<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:client')->except('logout');
        $this->middleware('guest:artist')->except('logout');
    }

    // public function showClientLoginForm(){
    //     return view('/clientlogin', ['url' => 'client']);
    // }

    // public function clientLogin(Request $request){
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required|min:8'
    //     ]);

    //     if(Auth::guard('client') -> attempt(['client_email'=>$request->email, 'client_password'=>$request->password])){
    //         return redirect()->intended('/clienthome');
    //     }

    //     return back()->withInput($request->only('email'));
    // }
}
