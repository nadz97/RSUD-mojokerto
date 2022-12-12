<?php

namespace App\Http\Controllers;

use App\Models\formulirtriage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FormulirtriageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view( 'admin.igd.formulir_triage' );
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
     * @param  \App\Http\Requests\StoreformulirtriageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formulirtriage  $formulirtriage
     * @return \Illuminate\Http\Response
     */
    public function show(formulirtriage $formulirtriage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formulirtriage  $formulirtriage
     * @return \Illuminate\Http\Response
     */
    public function edit(formulirtriage $formulirtriage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateformulirtriageRequest  $request
     * @param  \App\Models\formulirtriage  $formulirtriage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, formulirtriage $formulirtriage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formulirtriage  $formulirtriage
     * @return \Illuminate\Http\Response
     */
    public function destroy(formulirtriage $formulirtriage)
    {
        //
    }
}
