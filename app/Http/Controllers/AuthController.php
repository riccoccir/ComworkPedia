<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\MsClient;
use App\MsArtist;

class AuthController extends Controller
{
    public function clientLogin(Request $request){
        dd($request->all());
        if(Auth::attempt($request->only('client_email','client_password'))){
            return view('clienthome');
        }
        return redirect('/clientlogin');
    }

    public function clientRegister(Request $request){
        // dd($request->all());
        // MsClient::create([
        //     'client_name' => $request ->username,
        //     'client_email' => $request -> email,
        //     'client_password' => bcrypt($request -> password),
        //     'client_phoneNumber' => $request ->phonenumber
        // ]);

        return redirect('/clientlogin');
    }

    public function artistLogin(){
        
    }

    public function logout(){
        return redirect('/homepage');
    }
}
