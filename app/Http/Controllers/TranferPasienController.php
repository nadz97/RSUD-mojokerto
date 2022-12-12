<?php

namespace App\Http\Controllers;

use App\Models\tranfer_pasien;
use App\Http\Requests\Storetranfer_pasienRequest;
use App\Http\Requests\Updatetranfer_pasienRequest;

class TranferPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.rme-ponek.tranfer_pasien');
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
     * @param  \App\Http\Requests\Storetranfer_pasienRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetranfer_pasienRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tranfer_pasien  $tranfer_pasien
     * @return \Illuminate\Http\Response
     */
    public function show(tranfer_pasien $tranfer_pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tranfer_pasien  $tranfer_pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(tranfer_pasien $tranfer_pasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetranfer_pasienRequest  $request
     * @param  \App\Models\tranfer_pasien  $tranfer_pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetranfer_pasienRequest $request, tranfer_pasien $tranfer_pasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tranfer_pasien  $tranfer_pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(tranfer_pasien $tranfer_pasien)
    {
        //
    }
}
