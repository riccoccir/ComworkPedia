<?php

namespace App\Http\Controllers;

use App\HeaderHireTransaction;
use App\TrCommission;
use Illuminate\Http\Request;
use Auth;

class ArtistDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createNewCommission(Request $request){
        $userId = Auth::guard('artist')->user();
        $this->validate($request, [
            'commissionname' => 'required',
            'description' => 'required|min:10',
            'price' => 'required|min:1',
            'password' => 'required|min:1',
            'duration' => 'required',
            'category' => 'required'
        ]);
        $commission = new TrCommission();

        $commission->commission_name = $request->name('commissionname');
        $commission->commission_description = $request->name('description');
        $commission->slot_available = $request->name('slots');
        $commission->commission_price = $request->name('price');
        $commission->commission_duration = $request->name('duration');
        if($request->hasfile('imageexample')){
            $file = $request->file('imageexample');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/commission/',$filename);
            $highlights->commission_image = $filename;
        }else{
            return $request;
            $highlights->commission_image = '';
        }

        dd($request);
        $commission->save();

        return view('artistdashboard');


        


    }

    public function showPage(){
        $userId = Auth::guard('artist')->user();

        $allCommission = TrCommission::where('artist_id', $userId['id'])->get();

        $pendingList = HeaderHireTransaction::where('transaction_status', 'on progress')
        ->join('detailhire','detailhire.hire_id','=','headerhiretransaction.hire_id')
        ->join('trcommission','trcommission.commission_id','=','detailhire.commission_id')
        ->where('transaction_status', 'on progress')
        ->where('trcommission.artist_id', $userId['id'])->get();

        $onProgressList = HeaderHireTransaction::where('transaction_status', 'on progress')
        ->join('msclient','msclient.id','=', 'headerhiretransaction.client_id')
        ->join('detailhire','detailhire.hire_id','=','headerhiretransaction.hire_id')
        ->join('trcommission','trcommission.commission_id','=','detailhire.commission_id')
        ->where('transaction_status', 'on progress')
        ->where('trcommission.artist_id', $userId['id'])->get();

        return view('artistdashboard')
        ->with('commission', $allCommission)
        ->with('pending', $pendingList)
        ->with('onprogress', $onProgressList);
    }
}
