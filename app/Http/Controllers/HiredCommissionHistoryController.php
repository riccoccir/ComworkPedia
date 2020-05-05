<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HiredCommissionHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('headerhiretransaction')
        ->join('msclient','msclient.client_id', '=', 'headerhiretransaction.client_id')
        ->join('mspayment','mspayment.payment_id', '=', 'headerhiretransaction.payment_id')
        ->join('detailhire', 'detailhire.hire_id', '=', 'headerhiretransaction.hire_id')
        ->join('trcommission', 'trcommission.commission_id', '=', 'detailhire.commission_id')
        ->join('msartist', 'msartist.artist_id', '=', 'detailhire.artist_id')->get();

        return view('hiredcommissionlist', compact('data'));
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
}