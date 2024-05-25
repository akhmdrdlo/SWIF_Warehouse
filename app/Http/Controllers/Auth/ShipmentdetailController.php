<?php

namespace App\Http\Controllers;

use App\Models\shipmentdetail;
use App\Http\Requests\StoreshipmentdetailRequest;
use App\Http\Requests\UpdateshipmentdetailRequest;

class ShipmentdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shipmentDetail');
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
     * @param  \App\Http\Requests\StoreshipmentdetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreshipmentdetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shipmentdetail  $shipmentdetail
     * @return \Illuminate\Http\Response
     */
    public function show(shipmentdetail $shipmentdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shipmentdetail  $shipmentdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(shipmentdetail $shipmentdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateshipmentdetailRequest  $request
     * @param  \App\Models\shipmentdetail  $shipmentdetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateshipmentdetailRequest $request, shipmentdetail $shipmentdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shipmentdetail  $shipmentdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(shipmentdetail $shipmentdetail)
    {
        //
    }
}
