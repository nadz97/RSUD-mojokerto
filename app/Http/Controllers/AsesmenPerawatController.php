<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsesmenPerawatController extends Controller
{
    public function index()
    {
        return view('admin.ri-ponek.asesmen-perawat');
    }

}
