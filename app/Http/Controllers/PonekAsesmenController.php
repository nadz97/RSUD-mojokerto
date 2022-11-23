<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PonekAsesmenController extends Controller
{
    public function index()
    {
        return view('admin.ponekasesmen.ponek-asesmen-pasien');
    }
}
