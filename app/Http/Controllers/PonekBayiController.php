<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PonekBayiController extends Controller
{
    public function index()
    {
        return view('admin.rme-ponek.ponekbayi.pengkajian-awal-bayi');
    }


}
