<?php

namespace App\Http\Controllers;

use App\Models\edukasipasien_ponek2;
use App\Http\Requests\Storeedukasipasien_ponek2Request;
use App\Http\Requests\Updateedukasipasien_ponek2Request;

class EdukasipasienPonek2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.rme-ponek.edukasipasien_ponek2');
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
     * @param  \App\Http\Requests\Storeedukasipasien_ponek2Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeedukasipasien_ponek2Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\edukasipasien_ponek2  $edukasipasien_ponek2
     * @return \Illuminate\Http\Response
     */
    public function show(edukasipasien_ponek2 $edukasipasien_ponek2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\edukasipasien_ponek2  $edukasipasien_ponek2
     * @return \Illuminate\Http\Response
     */
    public function edit(edukasipasien_ponek2 $edukasipasien_ponek2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateedukasipasien_ponek2Request  $request
     * @param  \App\Models\edukasipasien_ponek2  $edukasipasien_ponek2
     * @return \Illuminate\Http\Response
     */
    public function update(Updateedukasipasien_ponek2Request $request, edukasipasien_ponek2 $edukasipasien_ponek2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\edukasipasien_ponek2  $edukasipasien_ponek2
     * @return \Illuminate\Http\Response
     */
    public function destroy(edukasipasien_ponek2 $edukasipasien_ponek2)
    {
        //
    }
}
