<?php

namespace App\Http\Controllers;
use App\TrCommission;
use App\MsArtist;
use App\MsCommissionType;
use DB;
use Illuminate\Http\Request;

class HireController extends Controller
{
    public function index($typeid,$commissionid){
        $data1 = DB::table('TrCommission')
        ->join('MsArtist','TrCommission.artist_id','=','MsArtist.id')
        ->join('MsCommissionType','TrCommission.commission_type_id','=','MsCommissionType.commission_type_id')
        ->where('TrCommission.commission_id','=',$commissionid)
        ->get();

        // dd($data1);
        return view('hire');
    }
}
