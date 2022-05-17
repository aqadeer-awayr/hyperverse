<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest:web')->except('logout'); //Notice this middleware
    }
    protected function authenticated()
    {
        $user = auth()->user();
        // dd($user->status, $user->affiliate_link);
        if ($user->status !== 'enabled' && $user->affiliate_link !== 'hello') {
            return redirect()->route('hyperverse.hvregister');
        }
        return redirect('/');
    }

    public function logout()
    {
        auth()->logout();

        Session::flush();
        Cache::flush();

        return redirect('/');
    }
}
