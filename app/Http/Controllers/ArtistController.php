<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\MsArtist;
use Illuminate\Support\Facades\Hash;


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
            'email' => 'required|email|unique:msartist,artist_email',
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

        return redirect('/artist/dashboard');
    }


    public function login(Request $kiriman){
        $this->validate($kiriman, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $dataArtist = MsArtist::where('artist_email',$kiriman->email)->first();

        if($dataArtist && Hash::check($kiriman->password, $dataArtist->artist_password)){
            //Berhasil Login untuk
          
            Auth::guard('artist')->LoginUsingId($dataArtist['id']);
            // Auth::guard('artist')->login($dataArtist);

            return redirect('/artist/dashboard');
        }else{
            return "login gagal";
        }
    }
    public function logout(){
        if(Auth::guard('artist')->check()){
            Auth::guard('artist')->logout();
        }
        return redirect('/home');
    }
}
