<?php

namespace App\Http\Controllers;

use App\Models\identifikasi_bayi;
use App\Http\Requests\Storeidentifikasi_bayiRequest;
use App\Http\Requests\Updateidentifikasi_bayiRequest;

class IdentifikasiBayiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.rme-ponek.identifikasi_bayi');
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
     * @param  \App\Http\Requests\Storeidentifikasi_bayiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeidentifikasi_bayiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\identifikasi_bayi  $identifikasi_bayi
     * @return \Illuminate\Http\Response
     */
    public function show(identifikasi_bayi $identifikasi_bayi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\identifikasi_bayi  $identifikasi_bayi
     * @return \Illuminate\Http\Response
     */
    public function edit(identifikasi_bayi $identifikasi_bayi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateidentifikasi_bayiRequest  $request
     * @param  \App\Models\identifikasi_bayi  $identifikasi_bayi
     * @return \Illuminate\Http\Response
     */
    public function update(Updateidentifikasi_bayiRequest $request, identifikasi_bayi $identifikasi_bayi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\identifikasi_bayi  $identifikasi_bayi
     * @return \Illuminate\Http\Response
     */
    public function destroy(identifikasi_bayi $identifikasi_bayi)
    {
        //
    }
}
