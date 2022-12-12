<?php

namespace App\Http\Controllers;

use App\Models\edukasi_ponek;
use App\Http\Requests\Storeedukasi_ponekRequest;
use App\Http\Requests\Updateedukasi_ponekRequest;

class EdukasiPonekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view( 'admin.rme-ponek.edukasi_ponek' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeedukasi_ponekRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeedukasi_ponekRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\edukasi_ponek  $edukasi_ponek
     * @return \Illuminate\Http\Response
     */
    public function show(edukasi_ponek $edukasi_ponek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\edukasi_ponek  $edukasi_ponek
     * @return \Illuminate\Http\Response
     */
    public function edit(edukasi_ponek $edukasi_ponek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateedukasi_ponekRequest  $request
     * @param  \App\Models\edukasi_ponek  $edukasi_ponek
     * @return \Illuminate\Http\Response
     */
    public function update(Updateedukasi_ponekRequest $request, edukasi_ponek $edukasi_ponek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\edukasi_ponek  $edukasi_ponek
     * @return \Illuminate\Http\Response
     */
    public function destroy(edukasi_ponek $edukasi_ponek)
    {
        //
    }
}
