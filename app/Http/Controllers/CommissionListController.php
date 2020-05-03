<?php

namespace App\Http\Controllers;
use App\TrCommission;
use Illuminate\Http\Request;
use Route;

class CommissionListController extends Controller
{
    public function showList($typeid){
        $categorytype = ['Vector Art', 'WPAP', 'Line Art', 'Low Poly Art', 'Flat Design', 'Karikatur'];
        $data = TrCommission::where('commission_type_id', $typeid)->paginate(5);
        return view('commissionlist', ['commissioncategory' => $categorytype[$typeid - 1], 'allData' => $data]);
    }

    public function showDetailedCommissionInfo($typeid, $commissionid){
        $data = TrCommission::where('commission_id', $commissionid)->firstOrFail();
        
        // return redirect('/commissionlist/'.(int)$typeid.'/commission/'.(int)$commissionid.'');
        return view('commissiondetail', ['data' => $data]);
    }
}
