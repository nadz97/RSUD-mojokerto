<?php

namespace App\Http\Controllers;

use App\Models\pengkajian_igd;
use App\Http\Requests\Storepengkajian_igdRequest;
use App\Http\Requests\Updatepengkajian_igdRequest;

class PengkajianIgdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view( 'admin.igd.pengkajian_igd' );
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
     * @param  \App\Http\Requests\Storepengkajian_igdRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepengkajian_igdRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengkajian_igd  $pengkajian_igd
     * @return \Illuminate\Http\Response
     */
    public function show(pengkajian_igd $pengkajian_igd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengkajian_igd  $pengkajian_igd
     * @return \Illuminate\Http\Response
     */
    public function edit(pengkajian_igd $pengkajian_igd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepengkajian_igdRequest  $request
     * @param  \App\Models\pengkajian_igd  $pengkajian_igd
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepengkajian_igdRequest $request, pengkajian_igd $pengkajian_igd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengkajian_igd  $pengkajian_igd
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengkajian_igd $pengkajian_igd)
    {
        //
    }
}
