<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transfer;
use App\Models\Transferitem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Transfer::all();
        return view('admin.transfer',['datalist'=>$datalist]);
    }

    public function list($status)
    {
        $datalist = Transfer::where('status',$status)->get();
        return view('admin.transfers',['datalist'=>$datalist]);
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
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function show(Transfer $transfer,$id)
    {
        $data = Transfer::find($id);
        $datalist = Transferitem::where('transfer_id',$id)->get();
        return view('admin.transfer_item',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function edit(Transfer $transfer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transfer $transfer,$id)
    {
        $data = Transfer::find($id);
        $data->status= $request->input('status');
        $data-> note= $request->input('note');
        $data->save()->with('success','Order Updated');
        return redirect()->back()->with('success','order updated');
    }

    public function itemupdate(Request $request, Transfer $transfer,$id)
    {
        $data = Transferitem::find($id);
        $data->status= $request->input('status');
        $data-> note= $request->input('note');
        $data->save();
        return redirect()->back()->with('success','order updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transfer $transfer)
    {
        //
    }
}
