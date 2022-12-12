<?php

namespace App\Http\Controllers;

use App\Models\pengkajian_keperawatan;
use App\Http\Requests\Storepengkajian_keperawatanRequest;
use App\Http\Requests\Updatepengkajian_keperawatanRequest;

class PengkajianKeperawatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view( 'admin.igd.pengkajian_keperawatan' );
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
     * @param  \App\Http\Requests\Storepengkajian_keperawatanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepengkajian_keperawatanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengkajian_keperawatan  $pengkajian_keperawatan
     * @return \Illuminate\Http\Response
     */
    public function show(pengkajian_keperawatan $pengkajian_keperawatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengkajian_keperawatan  $pengkajian_keperawatan
     * @return \Illuminate\Http\Response
     */
    public function edit(pengkajian_keperawatan $pengkajian_keperawatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepengkajian_keperawatanRequest  $request
     * @param  \App\Models\pengkajian_keperawatan  $pengkajian_keperawatan
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepengkajian_keperawatanRequest $request, pengkajian_keperawatan $pengkajian_keperawatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengkajian_keperawatan  $pengkajian_keperawatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengkajian_keperawatan $pengkajian_keperawatan)
    {
        //
    }
}
