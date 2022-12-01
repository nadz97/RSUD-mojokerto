<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsesmenBayiController extends Controller
{
    public function index()
    {
        return view('admin.ponek.ponekasesmenbayi.ponek-asesmen-bayi');
    }
}
