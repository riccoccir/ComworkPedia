<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\MsArtist;

class ArtistController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
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


    public function login(Request $kiriman){
        $dataArtist = MsArtist::where('artist_email',$kiriman->email)->where('artist_password',$kiriman->password)->get();

        if(count($dataArtist)>0){
            //Berhasil Login untuk
          
            Auth::guard('artist')->LoginUsingId($dataArtist[0]['artist_id']);

            return redirect('/');
        }else{

            return "login gagal";
        }
    }

    public function logout(){
        return redirect('/homepage');
    }
}
