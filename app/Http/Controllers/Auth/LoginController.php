<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
//     public function __construct()
//     {
//         $this->middleware('guest')->except('logout');
//     }
// // google call back
//     public function redirectToGoogle(){
//     return Socialite::driver('google')->redirect();
// }
// public function handleGoogleCallback(){
//     $user = Socialite::driver('google')->user();
// }
// public function redirectToGithub(){
//     return Socialite::driver('github')->redirect();
// }
// public function handleGithubCallback(){
//     $user = Socialite::driver('github')->user();
// }
}
