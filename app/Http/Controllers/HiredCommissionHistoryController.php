<?php

namespace App\Http\Controllers;

use App\HeaderHireTransaction;
use Illuminate\Http\Request;
use DB;
use Auth;

class HiredCommissionHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::guard('client')->user();

        $data = DB::table('headerhiretransaction')
        ->join('msclient','msclient.id', '=', 'headerhiretransaction.client_id')
        ->join('mspayment','mspayment.payment_id', '=', 'headerhiretransaction.payment_id')
        ->join('detailhire', 'detailhire.hire_id', '=', 'headerhiretransaction.hire_id')
        ->join('trcommission', 'trcommission.commission_id', '=', 'detailhire.commission_id')
        ->where('msclient.id', $user['id'])->get();

        return view('hiredcommissionlist', compact('data'));
    }

    public function acceptCommissionResult($id){
        HeaderHireTransaction::where('hire_id', $id)->update(['transaction_status' => 'accepted']);

        return redirect('/commission/history');
    }

    public function askForRevision($id){
        HeaderHireTransaction::where('hire_id', $id)->update(['transaction_status' => 'revision']);

        return redirect('/commission/history');
    }
}
