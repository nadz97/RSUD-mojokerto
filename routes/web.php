<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PonekBayiController;
use App\Http\Controllers\PonekPasienController;
use App\Http\Controllers\PonekAsesmenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/' , [DashboardController::class , 'index' ] );

Route::get('/admin/dokter' , [DokterController::class , 'index' ] );

Route::resource('/admin/ponekbayi', PonekBayiController::class);
Route::resource('/admin/ponekpasien', PonekPasienController::class);
Route::resource('/admin/ponekasesmen', PonekAsesmenController::class);

Route::get('/login', [LoginController::class, 'index']);


