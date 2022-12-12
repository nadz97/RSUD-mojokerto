<?php

namespace App\Http\Controllers;

use App\Models\edukasiPasien_ponek;
use App\Http\Requests\StoreedukasiPasien_ponekRequest;
use App\Http\Requests\UpdateedukasiPasien_ponekRequest;

class EdukasiPasienPonekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.rme-ponek.edukasiPasien_ponek');
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
     * @param  \App\Http\Requests\StoreedukasiPasien_ponekRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreedukasiPasien_ponekRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\edukasiPasien_ponek  $edukasiPasien_ponek
     * @return \Illuminate\Http\Response
     */
    public function show(edukasiPasien_ponek $edukasiPasien_ponek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\edukasiPasien_ponek  $edukasiPasien_ponek
     * @return \Illuminate\Http\Response
     */
    public function edit(edukasiPasien_ponek $edukasiPasien_ponek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateedukasiPasien_ponekRequest  $request
     * @param  \App\Models\edukasiPasien_ponek  $edukasiPasien_ponek
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateedukasiPasien_ponekRequest $request, edukasiPasien_ponek $edukasiPasien_ponek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\edukasiPasien_ponek  $edukasiPasien_ponek
     * @return \Illuminate\Http\Response
     */
    public function destroy(edukasiPasien_ponek $edukasiPasien_ponek)
    {
        //
    }
}
