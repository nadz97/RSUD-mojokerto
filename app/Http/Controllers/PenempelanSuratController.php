<?php

namespace App\Http\Controllers;

use App\Models\penempelan_surat;
use App\Http\Requests\Storepenempelan_suratRequest;
use App\Http\Requests\Updatepenempelan_suratRequest;

class PenempelanSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.igd.penempelan_surat');
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
     * @param  \App\Http\Requests\Storepenempelan_suratRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepenempelan_suratRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penempelan_surat  $penempelan_surat
     * @return \Illuminate\Http\Response
     */
    public function show(penempelan_surat $penempelan_surat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penempelan_surat  $penempelan_surat
     * @return \Illuminate\Http\Response
     */
    public function edit(penempelan_surat $penempelan_surat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepenempelan_suratRequest  $request
     * @param  \App\Models\penempelan_surat  $penempelan_surat
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepenempelan_suratRequest $request, penempelan_surat $penempelan_surat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penempelan_surat  $penempelan_surat
     * @return \Illuminate\Http\Response
     */
    public function destroy(penempelan_surat $penempelan_surat)
    {
        //
    }
}
