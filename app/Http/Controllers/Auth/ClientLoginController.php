<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ClientLoginController extends Controller
{

    public function __construct(){
        $this->middleware('guest:client');
    }

    public function showLoginForm(){
        return view('clientlogin');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        
        if(Auth::guard('client')->attempt(['client_email' => $request->email, 'password' => $request->password])){
            return redirect()->intended('/clienthome');
        }
        
        return redirect()->back();
    }
}
