<?php

namespace App\Http\Controllers;
use App\TrCommission;
use App\MsArtist;
use App\MsCommissionType;
use App\HeaderHireTransaction;
use App\DetailHire;
use DB;
use Auth;
use Illuminate\Http\Request;

class HireController extends Controller
{
    public function index($typeid,$commissionid){
        $data = DB::table('TrCommission')
        ->join('MsArtist','TrCommission.artist_id','=','MsArtist.id')
        ->join('MsCommissionType','TrCommission.commission_type_id','=','MsCommissionType.commission_type_id')
        ->where('TrCommission.commission_id','=',$commissionid)
        ->get();

        // dd($data);
        return redirect('/hire/'.(int)$typeid.'/hire-commission/'.(int)$commissionid.'', ['data' => $data]);
    }
    public function createNewHire(Request $request, $commission_id)
    {
        $userId = Auth::guard('client')->user();
        $this->validate($request, [
            'imagelink' => 'required',
            'category' => 'required',
            'payment_amount' => 'required'
        ]);
        $hire = new HeaderHireTransaction();

        $hire->client_id = $userId['id'];
        $hire->payment_id = $request->input('category');
        $hire->image_from_client = $request->input('imagelink');
        $hire->image_from_artist = "null";
        $hire->transaction_status = 'waiting';
        $hire->payment_amount = $request->input('payment_amount');
        $hire->save();
        
        $detail = new DetailHire();
        $detail->hire_id = $hire->id;
        $detail->commission_id = $commission_id;
        $detail->save();

        return redirect('/commission/history');

    }
}
