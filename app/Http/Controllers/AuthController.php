<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function clientLogin(Request $request){
        // dd($request->all());
        if(Auth::attempt($request->only('client_email','client_password'))){
            return view('clienthome');
        }
        return redirect('/clientlogin');
    }

    public function logout(){
        return redirect('/homepage');
    }
}
