<?php

namespace App\Http\Controllers\LMS\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/admin'; //Redirect after authenticate
    public function __construct()
    {
        // dd('ddd');
        $this->middleware('guest:admin')->except('logout'); //Notice this middleware
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login', ['url' => 'admin']);
    }
    protected function guard() // And now finally this is our custom guard name
    {
        return Auth::guard('admin');
    }

    // public function login(Request $request)
    // {
    //     $this->validate($request, [
    //         'email'   => 'required|email',
    //         'password' => 'required|min:6'
    //     ]);
    //     // dd($request->all());
    //     // dd(Auth::guard('admin'));
    //     if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
    //         // dd(auth()->guard('admin')->user());
    //         return redirect()->route('home');
    //     }
    //     alert()->error('Oops...', 'Something went wrong!');
    //     return back()->withInput($request->only('email', 'remember'));
    // }

    public function logout()
    {
        $name = Auth::guard('admin')->user()->name;
        Auth::guard('admin')->logout();
        return redirect()
            ->route('admin.login')
            ->withSuccess($name . ' has been logged out!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
