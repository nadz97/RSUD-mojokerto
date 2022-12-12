<?php

namespace App\Http\Controllers;

use App\Models\triage_igd;
use App\Http\Requests\Storetriage_igdRequest;
use App\Http\Requests\Updatetriage_igdRequest;

class TriageIgdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.igd.triage_igd');
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
     * @param  \App\Http\Requests\Storetriage_igdRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetriage_igdRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\triage_igd  $triage_igd
     * @return \Illuminate\Http\Response
     */
    public function show(triage_igd $triage_igd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\triage_igd  $triage_igd
     * @return \Illuminate\Http\Response
     */
    public function edit(triage_igd $triage_igd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetriage_igdRequest  $request
     * @param  \App\Models\triage_igd  $triage_igd
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetriage_igdRequest $request, triage_igd $triage_igd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\triage_igd  $triage_igd
     * @return \Illuminate\Http\Response
     */
    public function destroy(triage_igd $triage_igd)
    {
        //
    }
}
