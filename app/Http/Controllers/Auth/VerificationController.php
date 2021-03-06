<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Jobs\WelcomeEmailJob;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function verify(Request $request)
    {
        $user = User::find($request->route('id'));

        if ($user->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($request->user()));
            if (empty($user->affiliate_link))
                $this->welcomeEmail($user);
            return view('auth.verify');
        }

        return redirect($this->redirectPath())->with('verified', true);
    }

    protected function welcomeEmail($user)
    {
        // dd($user);
        $hc_link = generateRandomString(5);
        $details = [
            'title' => 'Mail from Hyperverse Community',
            'body' => URL::to('/') . '/?code=' . $hc_link,
            'email' => $user->email
        ];
        $user->update([
            'hc_link' => URL::to('/') . '/?code=' . $hc_link,
            'status' => 'enabled'
        ]);
        dispatch(new WelcomeEmailJob($details));
    }
}
