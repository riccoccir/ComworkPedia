<?php

namespace App\Http\Controllers;
use App\TrCommission;
use Illuminate\Http\Request;
use Route;

class CommissionListController extends Controller
{
    public function showList($typeid){
        $categorytype = ['Vector Art', 'WPAP', 'Line Art', 'Low Poly Art', 'Flat Design', 'Karikatur'];

        //masih ngebug dikit
        $type = $typeid;

        $data = TrCommission::where('commission_type_id', $type)->paginate(5);
        // $data = TrCommission::all();

        return view('commissionlist', ['commissioncategory' => $categorytype[$type - 1], 'allData' => $data]);
    }
}
