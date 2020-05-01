<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommissionListController extends Controller
{
    public function showList(){
        $type = $_GET['type'];
        return view('commissionlist', ['commissioncategory' => $type]);
    }
}
