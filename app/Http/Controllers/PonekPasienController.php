<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PonekPasienController extends Controller
{
    public function index()
    {
        return view('admin.ponekpasien.pengkajian-awal-pasien');
    }
}
