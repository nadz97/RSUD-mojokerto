<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PonekBayiController extends Controller
{
    public function index()
    {
        return view('admin.ponekbayi.pengkajian-awal-bayi');
    }

    public function page2()
    {
        return view('admin.ponekbayi.pengkajian-awal-bayi2');
    }
    public function page3()
    {
        return view('admin.ponekbayi.pengkajian-awal-bayi3');
    }
}
