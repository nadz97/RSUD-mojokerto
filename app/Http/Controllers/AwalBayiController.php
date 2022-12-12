<?php

namespace App\Http\Controllers;

use App\Models\awal_bayi;
use App\Http\Requests\Storeawal_bayiRequest;
use App\Http\Requests\Updateawal_bayiRequest;

class AwalBayiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.rme-ponek.awal_bayi');
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
     * @param  \App\Http\Requests\Storeawal_bayiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeawal_bayiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\awal_bayi  $awal_bayi
     * @return \Illuminate\Http\Response
     */
    public function show(awal_bayi $awal_bayi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\awal_bayi  $awal_bayi
     * @return \Illuminate\Http\Response
     */
    public function edit(awal_bayi $awal_bayi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateawal_bayiRequest  $request
     * @param  \App\Models\awal_bayi  $awal_bayi
     * @return \Illuminate\Http\Response
     */
    public function update(Updateawal_bayiRequest $request, awal_bayi $awal_bayi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\awal_bayi  $awal_bayi
     * @return \Illuminate\Http\Response
     */
    public function destroy(awal_bayi $awal_bayi)
    {
        //
    }
}
