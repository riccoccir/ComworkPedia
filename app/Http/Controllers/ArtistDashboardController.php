<?php

namespace App\Http\Controllers;

use App\DetailHire;
use App\HeaderHireTransaction;
use App\TrCommission;
use Illuminate\Http\Request;
use Auth;
use DB;

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

    public function createNewCommission(Request $request)
    {
        $userId = Auth::guard('artist')->user();

        $this->validate($request, [
            'commissionname' => 'required',
            'description' => 'required|min:10',
            'price' => 'required|min:1',
            'slots' => 'required|min:1',
            'duration' => 'required',
            'category' => 'required',
            'imageexample' => 'required'
        ]);
        $commission = new TrCommission();

        $commission->artist_id = $userId['id'];
        $commission->commission_name = $request->input('commissionname');
        $commission->commission_description = $request->input('description');
        $commission->slot_available = $request->input('slots');
        $commission->commission_price = $request->input('price');
        $commission->commission_duration = $request->input('duration');
        $commission->commission_type_id = $request->input('category');
        if ($request->hasFile('imageexample')) {
            $file = $request->file('imageexample');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/commission/', $filename);
            $commission->commission_image = $filename;
        } else {
            return $request;
            $commission->commission_image = '1592306333.jpg';
        }
        $commission->save();

        return redirect('/artist/dashboard');
    }

    public function editExistingCommission($id, Request $request){
        $userId = Auth::guard('artist')->user();

        $this->validate($request, [
            'commissionname' => 'required',
            'description' => 'required|min:10',
            'price' => 'required|min:1',
            'slots' => 'required|min:1',
            'duration' => 'required',
            'category' => 'required',
            'imageexample' => 'required'
        ]);
        $commission = TrCommission::where('commission_id', $id);

        $commission->artist_id = $userId['id'];
        $commission->commission_name = $request->input('commissionname');
        $commission->commission_description = $request->input('description');
        $commission->slot_available = $request->input('slots');
        $commission->commission_price = $request->input('price');
        $commission->commission_duration = $request->input('duration');
        $commission->commission_type_id = $request->input('category');
        if ($request->hasFile('imageexample')) {
            $file = $request->file('imageexample');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/commission/', $filename);
            $commission->commission_image = $filename;
        } else {
            return $request;
            $commission->commission_image = '';
        }
        $commission->save();

        return redirect('/artist/dashboard');
    }

    public function showPage()
    {
        $userId = Auth::guard('artist')->user();

        $allCommission = TrCommission::where('artist_id', $userId['id'])->get();

        $pendingList = HeaderHireTransaction::where('transaction_status', 'waiting')
            ->join('detailhire', 'detailhire.hire_id', '=', 'headerhiretransaction.hire_id')
            ->join('trcommission', 'trcommission.commission_id', '=', 'detailhire.commission_id')
            ->where('trcommission.artist_id', $userId['id'])->get();

        // dd($pendingList);

        $onProgressList = HeaderHireTransaction::where('transaction_status', 'on progress')
            ->orWhere( 'transaction_status', 'revision')
            ->orWhere('transaction_status', 'submitted')
            ->join('msclient', 'msclient.id', '=', 'headerhiretransaction.client_id')
            ->join('detailhire', 'detailhire.hire_id', '=', 'headerhiretransaction.hire_id')
            ->join('trcommission', 'trcommission.commission_id', '=', 'detailhire.commission_id')
            ->where('trcommission.artist_id', $userId['id'])->get();

        return view('artistdashboard')
            ->with('commission', $allCommission)
            ->with('pending', $pendingList)
            ->with('onprogress', $onProgressList);
    }


    public function deleteCommission($id)
    {
        $commission = HeaderHireTransaction::where('commission_id', $id)
            ->join('detailhire', 'detailhire.hire_id', '=', 'headerhiretransaction.hire_id')->get();

        if ($commission->isEmpty()) {
            DB::delete('delete from trcommission where commission_id = ?', [$id]);
            return redirect('/artist/dashboard');
        } else {
            return redirect('/artist/dashboard')->withErrors('cantdelete', 'Tidak bisa hapus commission yang masih memiliki kontrak!');
        }
    }

    public function submitLinkImage($id, Request $newImageLink)
    {
        HeaderHireTransaction::where('hire_id', $id)
        ->update(['image_from_artist' => $newImageLink->resultimage , 'transaction_status' => 'submitted']);

        return redirect('/artist/dashboard');
    }

    public function acceptOrRejectOffer($postId, $status)
    {
        if ($status == 'onprogress') {
            $status = 'on progress';
        }

        $checkAvailability = DetailHire::where('hire_id', $postId)->first();
        $commisToChange = TrCommission::where('commission_id', $checkAvailability['commission_id'])->first();

        // dd($checkAvailability);

        if ($commisToChange['slot_available'] < 1 && $status=='on progress') {
            return redirect('/artist/dashboard');
        }

        HeaderHireTransaction::where('hire_id', $postId)->update(['transaction_status' => $status]);

        if ($status == 'on progress') {
            $totalSlot = $commisToChange['slot_available'] - 1;
            TrCommission::where('commission_id', $checkAvailability['commission_id'])->update(['slot_available' => $totalSlot]);
        }

        return redirect('/artist/dashboard');
    }
}
