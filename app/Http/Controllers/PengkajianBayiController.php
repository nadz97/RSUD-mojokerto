<?php

namespace App\Http\Controllers;

use App\Models\pengkajian_bayi;
use App\Http\Requests\Storepengkajian_bayiRequest;
use App\Http\Requests\Updatepengkajian_bayiRequest;

class PengkajianBayiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view( 'admin.rme-ponek.pengkajian_bayi' );
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
     * @param  \App\Http\Requests\Storepengkajian_bayiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepengkajian_bayiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengkajian_bayi  $pengkajian_bayi
     * @return \Illuminate\Http\Response
     */
    public function show(pengkajian_bayi $pengkajian_bayi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengkajian_bayi  $pengkajian_bayi
     * @return \Illuminate\Http\Response
     */
    public function edit(pengkajian_bayi $pengkajian_bayi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepengkajian_bayiRequest  $request
     * @param  \App\Models\pengkajian_bayi  $pengkajian_bayi
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepengkajian_bayiRequest $request, pengkajian_bayi $pengkajian_bayi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengkajian_bayi  $pengkajian_bayi
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengkajian_bayi $pengkajian_bayi)
    {
        //
    }
}
