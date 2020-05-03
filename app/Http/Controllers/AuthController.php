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
        $this->validate($request, [
            'username' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:msclient,client_email',
            'phonenumber' => 'required',
            'password' => 'required|min:8|same:retypepassword'
        ]);
        
        MsClient::create([
            'client_name' => $request ->username,
            'client_email' => $request -> email,
            'client_password' => bcrypt($request -> password),
            'client_phoneNumber' => $request ->phonenumber
        ]);

        return redirect('/clientlogin');
    }

    public function artistLogin(){
        
    }

    public function artistRegister(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email|unique:msclient,client_email',
            'phonenumber' => 'required',
            'password' => 'required|min:8|same:retypepassword',
            'instagram' => 'required',
            'website' => 'required'
        ]);
        
        MsArtist::create([
            'artist_name' => $request ->username,
            'artist_email' => $request -> email,
            'artist_password' => bcrypt($request -> password),
            'artist_phoneNumber' => $request ->phonenumber,
            'artist_instagram' => $request -> instagram,
            'artist_webiste' => $request -> website,
        ]);

        return redirect('/artistlogin');
    }

    public function logout(){
        return redirect('/homepage');
    }
}
