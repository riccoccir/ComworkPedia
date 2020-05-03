<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\MsClient;

class ClientController extends Controller
{
    protected function guard(){
        return Auth::guard('client');
    }

    public function clientLogin(Request $request){
        $credentials = $request->only('email', 'password');
        
        dd(\Auth::attempt(['client_email' => $request->email, 'client_password' => $request->password]));
        
        // if(Auth::attempt($request->only('client_email','client_password'))){
        //     return view('clienthome');
        // }
        // return redirect('/clientlogin');
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

    public function logout(){
        return redirect('/homepage');
    }
}