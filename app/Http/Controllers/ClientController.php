<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\MsClient;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
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
    
    public function login(Request $kiriman){
        $this->validate($kiriman, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        
        $dataClient = MsClient::where('client_email',$kiriman->email)->first();

        if($dataClient && Hash::check($kiriman->password, $dataClient->client_password)){
            //Berhasil Login

            Auth::guard('client')->LoginUsingId($dataClient[0]['id']);
            
            return redirect('/clienthome');
        }else{

            return "login gagal";
        }
    }

    public function logout(){
        if(Auth::guard('client')->check()){
            Auth::guard('client')->logout();
        }

        return redirect('/homepage');
    }
}
