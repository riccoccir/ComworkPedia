<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\MsClient;
use Hash;

class ClientController extends Controller
{
    // protected function guard(){
    //     return Auth::guard('client');
    // }

    public function __construct(){
        $this->middleware('auth');
    }
    public function clientLogin(Request $request){
        //backup code jika error
        // $email = $request->email;
        // $password = $request->password;
                
        // $user = MsClient::where('client_email', $email)->first();

        // if(Hash::check($password, $user->client_password)){
        //     return redirect('/clienthome');
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
