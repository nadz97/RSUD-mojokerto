<?php

namespace App\Http\Controllers;

use App\Models\edukasi_pasien;
use App\Http\Requests\Storeedukasi_pasienRequest;
use App\Http\Requests\Updateedukasi_pasienRequest;

class EdukasiPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.igd.edukasi_pasien');
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
     * @param  \App\Http\Requests\Storeedukasi_pasienRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeedukasi_pasienRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\edukasi_pasien  $edukasi_pasien
     * @return \Illuminate\Http\Response
     */
    public function show(edukasi_pasien $edukasi_pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\edukasi_pasien  $edukasi_pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(edukasi_pasien $edukasi_pasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateedukasi_pasienRequest  $request
     * @param  \App\Models\edukasi_pasien  $edukasi_pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Updateedukasi_pasienRequest $request, edukasi_pasien $edukasi_pasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\edukasi_pasien  $edukasi_pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(edukasi_pasien $edukasi_pasien)
    {
        //
    }
}
