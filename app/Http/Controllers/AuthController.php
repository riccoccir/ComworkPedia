<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function clientLogin(Request $request){
        // dd($request->all());
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/clienthome');
        }
        return redirect('/login');
    }

    public function logout(){
        return redirect('/homepage');
    }
}
