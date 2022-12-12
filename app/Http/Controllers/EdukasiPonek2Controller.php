<?php

namespace App\Http\Controllers;

use App\Models\edukasi_ponek2;
use App\Http\Requests\Storeedukasi_ponek2Request;
use App\Http\Requests\Updateedukasi_ponek2Request;

class EdukasiPonek2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view( 'admin.rme-ponek.edukasi_ponek2' );
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
     * @param  \App\Http\Requests\Storeedukasi_ponek2Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeedukasi_ponek2Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\edukasi_ponek2  $edukasi_ponek2
     * @return \Illuminate\Http\Response
     */
    public function show(edukasi_ponek2 $edukasi_ponek2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\edukasi_ponek2  $edukasi_ponek2
     * @return \Illuminate\Http\Response
     */
    public function edit(edukasi_ponek2 $edukasi_ponek2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateedukasi_ponek2Request  $request
     * @param  \App\Models\edukasi_ponek2  $edukasi_ponek2
     * @return \Illuminate\Http\Response
     */
    public function update(Updateedukasi_ponek2Request $request, edukasi_ponek2 $edukasi_ponek2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\edukasi_ponek2  $edukasi_ponek2
     * @return \Illuminate\Http\Response
     */
    public function destroy(edukasi_ponek2 $edukasi_ponek2)
    {
        //
    }
}
