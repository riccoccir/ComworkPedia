<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HireController extends Controller
{
    public function index(){
        return view('hire');
    }
}
