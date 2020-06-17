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

        // dd($data);

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

    public function submitPaymentReceipt($id, Request $request){
        $this->validate($request, [
            'imageexample' => 'required'
        ]);

        $commission = HeaderHireTransaction::where('hire_id', $id)->get();

        if ($request->hasFile('imageexample')) {
            $file = $request->file('imageexample');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/paymentreceipt/', $filename);
            // $commission->transfer_receipt = $filename;
        } else {
            return $request;
            // $commission->transfer_receipt = '';
        }

        HeaderHireTransaction::where('hire_id', $id)->update(['transfer_receipt' => $filename ]);;

        return redirect('/commission/history');
    }
}
