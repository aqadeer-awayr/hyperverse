<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use App\Models\Country;
use App\Models\Language;
use App\Models\UsersVerify;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Profile\Update;
use App\Http\Requests\Profile\FeedBack;
use App\Jobs\FeedBackJob;
use App\Jobs\VerifyEmailJob;
use App\Models\Announcement;
use App\Repositories\ProfileRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    private $profileRespository;
    private $user;
    public function __construct(ProfileRepository $profileRepository)
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
        });
        $this->profileRespository = $profileRepository;
        // $this->user = User::find(auth()->user()->id);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.register');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    /*
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // dd($user->roles);
            if ($user->hasRole('super-admin')) {
                return redirect('/admin');
            } else {
                if (session()->has('code'))
                    session()->forget('code');
                if ($user->status !== 'enabled' && $user->affiliate_link != 'hello') {
                    // dd($user->status, $user->affiliate_code);
                    return redirect()->route('hyperverse.hvregister');
                }

                return redirect('/');
            }
        }

        return redirect("login");
    }
    */

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {
        $this->validator($request)->validate();

        $createUser = $this->create($request->all());
        // $createUser->assignRole('user');
        $token = Str::random(64);

        UsersVerify::create([
            'user_id' => $createUser->id,
            'token' => $token
        ]);
        $details = [
            'title' => 'Mail from Hyperverse Community',
            'email' => $request->email
        ];
        dispatch(new VerifyEmailJob($token, $request->email));

        session()->forget('code');
        return redirect('/thank-you');
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Entities\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'affiliate_link' => $data['code'] ?? '',
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function verifyAccount($token)
    {
        $verifyUser = UsersVerify::where('token', $token)->first();

        $message = 'Sorry your email cannot be identified.';

        if (!is_null($verifyUser)) {
            $user = $verifyUser->user;

            if (!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }

        return redirect()->route('login')->withSuccess($message);
    }
    /**
     * Set Language.
     *
     * @return \Illuminate\Http\Response
     */
    public function setlanguage($lang)
    {
        $language = Language::find($lang);
        Session::put('set-locale', $language->code);
        Session::put('set-locale-id', $lang);
        return redirect()->back();
    }
    /**
     * Store Feed back of logged in user.
     *
     * @return \Illuminate\Http\Response
     */
    public function feedback(FeedBack $request)
    {
        $request['user_id'] = $this->user->id;

        $email = 'muhammad.qadeer@purelogics.net';
        if (config('app.env') == 'prod') { 
            $email = 'admin@thehypercommunity.net';
            // $email = 'abqadeer.994@gmail.com';
        }
        $details = [
            'feedback' => $request->comment,
            'email' => $email
        ];
        // dd($details);
        Review::create($request->all());
        dispatch(new FeedBackJob($details));
        return redirect()->route('profile')->withSuccess('Your Response is Added Successfully');
    }

    /**
     * Update name on profile page.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateName(Request $request)
    {
        $res = $this->profileRespository->updateName($request, $this->user);
        return redirect()->route('profile')->withSuccess($res);
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    /**
     * Show the profile for loged in user.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $announcements = Announcement::all();
        return view('site.profile', compact('announcements'));
    }

    /**
     * Update the profile country and preffered language specified logged in user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function updateLocation(Request $request)
    {
        // dd($request->all());
        $this->profileRespository->updateLocation($request, $this->user);
        return redirect()->route('profile')->withSuccess('Location Updated Successfully');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request)
    {
        $res = $this->profileRespository->update($request, $this->user);
        // Mail::to($this->user->email)->send(new \App\Mail\WelcomeEmail($details));
        return redirect()->route('site-home')->with($res);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Update $request)
    {
        // dd($request->all());
        $res = $this->profileRespository->updateProfile($request, $this->user);
        // Mail::to($this->user->email)->send(new \App\Mail\WelcomeEmail($details));
        return redirect()->route('profile')->with($res);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function hyperverse()
    {
        if ($this->user->status == 'enabled')
            return redirect()->back();
        if ($this->user->iframe_count == 0) {
            $this->user->increment('iframe_count');
            return view('site.update-profile');
        }
        return view('site.update-profile');
    }
    public function refferLink()
    {
        // dd('ddd');
        if ($this->user->status == 'enabled')
            return redirect()->back();
        if ($this->user->iframe_count == 1) {
            $this->user->decrement('iframe_count');
            // return view('site.update-profile');
        }
        $get_referral_user = User::where('hc_link', $this->user->affiliate_link)->first();
        // dd($get_referral_user);
        return view('site.update-profile', compact('get_referral_user'));
    }

    /**
     * Get Ajax Request and restun Data
     *
     * @return \Illuminate\Http\Response
     */
    public function myformAjax($id)
    {
        $country = Country::find($id);
        // dd($country);
        $states = $country->states;
        return json_encode($states);
    }
    public function params($params)
    {
        $params = explode('=', $params);
        // session()->forget('code');
        if (session()->has('code')) {
            session()->forget($params[0]);
            session()->put($params[0], $params[1]);
            return json_encode($params);
        }

        session()->put($params[0], $params[1]);
        $params['success'] = 'success';
        return json_encode($params);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request)
    {
        return Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => [
                'required', 'confirmed', Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
            'code' => ['required', 'string', 'exists:users,hc_link']
        ]);
    }
}
