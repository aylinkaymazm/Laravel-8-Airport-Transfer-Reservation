<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
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
        $datalist = Transfer::where('user_id',Auth::id())->get();
        return view('home.user_transfer',['datalist'=>$datalist]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $total = $request->input('total');
        return view('home.user_transfer_add',['total'=>$total]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Transfer();
        $data->product_id = $request->input('product_id');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->date = $request->input('date');
        $data->time = $request->input('time');
        $data->phone = $request->input('phone');
        $data->total = $request->input('total');
        $data->note = $request->input('note');
        $data->price = $request->input('price');
        $data->from_destination = $request->input('from_destination');
        $data->to_destination = $request->input('to_destination');
        $data->airline = $request->input('airline');
        $data->flight_number = $request->input('flight_number');
        $data->flight_arrived_date = $request->input('flight_arrived_date');
        $data->flight_arrived_time = $request->input('flight_arrived_time');
        $data->pick_up_time = $request->input('pick_up_time');

        $data->save();

        return redirect()->route('user_transfer')->with('success','Transfer Order Successfuly');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function show(Transfer $transfer,$id)
    {
        $datalist = Transfer::where('user_id',Auth::id())->where('transfer_id',$id)->get();

        return view('home.user_transfer_item',['datalist'=>$datalist]);
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
    public function update(Request $request, Transfer $transfer)
    {
        //
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
