<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function clientLogin(Request $request){
        // dd($request->all());

        $user = $request->only('username','password');

        if(Auth::attempt($user)){
            return redirect('/clienthome');
        }
        return redirect('/login');
    }

    public function logout(){
        return redirect('/homepage');
    }
}
