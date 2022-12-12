<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PonekBayiController;
use App\Http\Controllers\AsesmenBayiController;
use App\Http\Controllers\PonekPasienController;
use App\Http\Controllers\PonekAsesmenController;
use App\Http\Controllers\AsesmenPerawatController;
use App\Http\Controllers\PengkajianIgdController;
use App\Http\Controllers\PengkajianKeperawatanController;
use App\Http\Controllers\EdukasiPasienController;
use App\Http\Controllers\EdukasiPonekController;
use App\Http\Controllers\EdukasiPonek2Controller;
use App\Http\Controllers\PengkajianBayiController;
use App\Http\Controllers\EdukasiPasienPonekController;
use App\Http\Controllers\EdukasipasienPonek2Controller;
use App\Http\Controllers\PenempelanSuratController;
use App\Http\Controllers\IdentifikasiBayiController;
use App\Http\Controllers\TriageIgdController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\AwalBayiController;
use App\Http\Controllers\TranferPasienController;

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
Route::resource('/admin/asesmenbayi', AsesmenBayiController::class);
Route::resource('/admin/asesmenperawat', AsesmenPerawatController::class);
Route::resource( 'admin/igd/triage_igd' , TriageIgdController::class );
Route::resource( 'admin/igd/pengkajian_igd' ,  PengkajianIgdController::class );
Route::resource( 'admin/igd/pengkajian_keperawatan' , PengkajianKeperawatanController::class );
Route::resource( 'admin/igd/konsultasi' ,  KonsultasiController::class );
Route::resource( 'admin/igd/edukasi_pasien' , EdukasiPasienController::class );
Route::resource( 'admin/igd/penempelan_surat' ,  PenempelanSuratController::class );
Route::resource( 'admin/rme-ponek/edukasi_ponek' ,  EdukasiPonekController::class );
Route::resource( 'admin/rme-ponek/edukasi_ponek2' ,  EdukasiPonek2Controller::class );
Route::resource( 'admin/rme-ponek/pengkajian_bayi' ,  PengkajianBayiController::class );
Route::resource( 'admin/rme-ponek/edukasipasien_ponek' ,  EdukasiPasienPonekController::class );
Route::resource( 'admin/rme-ponek/edukasipasien_ponek2' ,  EdukasipasienPonek2Controller::class );
Route::resource( 'admin/rme-ponek/identifikasi_bayi' ,  IdentifikasiBayiController::class );
Route::resource( 'admin/rme-ponek/awal_bayi' ,  AwalBayiController::class );
Route::resource( 'admin/rme-ponek/tranfer_pasien' ,  TranferPasienController::class );

Route::get('/login', [LoginController::class, 'index']);


