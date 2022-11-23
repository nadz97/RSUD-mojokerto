<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    $page_title = 'Dashboard';
    $page_description = 'Sistem Informasi bla bla bla';
    $logo = "images/logo.png";
    $logoText = "images/logo-text.png";
    $action = __FUNCTION__;
		
    return view('admin.dashboard', compact('page_title', 'page_description','action','logo','logoText'));
  }
}
