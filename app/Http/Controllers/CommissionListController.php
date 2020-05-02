<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommissionListController extends Controller
{
    public function showList(){
        $categorytype = ['Vector Art', 'WPAP', 'Line Art', 'Low Poly Art', 'Flat Design', 'Karikatur'];
        $commisName = 'ini adalah kerjaan' ;

        $type = $_GET['typeid'];
        return view('commissionlist', ['commissioncategory' => $categorytype[$type - 1], 'commisName' => $commisName]);

    
    }
}
