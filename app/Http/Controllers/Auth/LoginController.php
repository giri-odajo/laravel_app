<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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

    protected $maxAttempts = 3; //ログイン失敗時のロックを３回に設定

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/todo'; //ここでログイン後に画面遷移する場所を/todoにしている

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout'); //exceptでlogoutは除いている
    }

    protected function loggedOut(Request $request)
    {
        return redirect('/login');
    }
}
