<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataikanController;
use App\Http\Controllers\DatakuController;
use App\Http\Controllers\OlahanController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\DeskripsiController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\KapalController;
use App\Http\Controllers\RiwayatbeliController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SaldoController;
use App\Http\Controllers\TangkapanController;
use App\Http\Controllers\TrackController;

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

Route::get('/',function(){
    return view('ewak.v_index');
});
    Route::get('/ewak/index', [IndexController::class,'index']);
    // Route::get('/ewak/register', [RegisterController::class,'index']);
    // Route::get('/ewak/login', [LoginController::class,'index']);
    Route::get('/ewak/deskripsi', [DeskripsiController::class,'index']);
    Route::get('/ewak/kategori_olahan', [OlahanController::class,'index']);
    Route::get('/ewak/kategori_paket', [PaketController::class,'index']);
    Route::get('/ewak/kategori_promo', [PromoController::class,'index']);
    Route::get('/ewak/kategori_satuan', [SatuanController::class,'index']);
    Route::get('/ewak/lokasi', [LokasiController::class,'index']);
    Route::get('/ewak/keranjang', [KeranjangController::class,'index']);

Auth::routes();
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/user', [UserController::class,'index'])->name('user');

    Route::get('/dataikan', [DataikanController::class,'index'])->name('dataikan');
    Route::get('/dataikan/insert_dataikan',[DataikanController::class,'insert_dataikan']);
    Route::post('/dataikan/update_dataikan/', [DataikanController::class,'update_dataikan']);
    Route::get('/dataikan/delete_dataikan/{id}', [DataikanController::class,'delete_dataikan']);
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/dataikan/printer_dataikan', [DataikanController::class,'printer_dataikan']);
    Route::get('/dataikan/printpdf_dataikan', [DataikanController::class,'printpdf_dataikan']);
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');

    Route::get('/dataku', [DatakuController::class,'index'])->name('dataku');
    Route::get('/dataku/insert_dataku', [DatakuController::class,'insert_dataku']);
    Route::post('/dataku/update_dataku/', [DatakuController::class,'update_dataku']);
    Route::get('/dataku/delete_dataku/{id}', [DatakuController::class,'delete_dataku']);
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/dataku/printer_dataku', [DatakuController::class,'printer_dataku']);
    Route::get('/dataku/printpdf_dataku', [DatakuController::class,'printpdf_dataku']);
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');

    Route::get('/kapal', [KapalController::class,'index'])->name('kapal');
    Route::post('/kapal/insert_kapal', [KapalController::class,'insert_kapal']);
    Route::post('/kapal/update_kapal/', [KapalController::class,'update_kapal']);
    Route::get('/kapal/delete_kapal/{id}', [KapalController::class,'delete_kapal']);
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/kapal/printer_kapal', [KapalController::class,'printer_kapal']);
    Route::get('/kapal/printpdf_kapal', [KapalController::class,'printpdf_kapal']);
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');

    Route::get('/riwayatbeli', [RiwayatbeliController::class,'index'])->name('riwayatbeli');
    Route::get('/riwayatbeli/insert_riwayatbeli', [RiwayatbeliController::class,'insert_riwayatbeli']);
    Route::post('/riwayatbeli/update_riwayatbeli/', [RiwayatbeliController::class,'update_riwayatbeli']);
    Route::get('/riwayatbeli/delete_riwayatbeli/{id}', [RiwayatbeliController::class,'delete_riwayatbeli']);
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/riwayatbeli/printer_riwayatbeli', [RiwayatbeliController::class,'printer_riwayatbeli']);
    Route::get('/riwayatbeli/printpdf_riwayatbeli', [RiwayatbeliController::class,'printpdf_riwayatbeli']);
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');

    Route::get('/saldo', [SaldoController::class,'index'])->name('saldo');
    Route::get('/saldo/insert_saldo', [SaldoController::class,'insert_saldo']);
    Route::post('/saldo/update_saldo/', [SaldoController::class,'update_saldo']);
    Route::get('/saldo/delete_saldo/{id}', [SaldoController::class,'delete_saldo']);
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/saldo/printer_saldo', [SaldoController::class,'printer_saldo']);
    Route::get('/saldo/printpdf_saldo', [SaldoController::class,'printpdf_saldo']);
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');

    Route::get('/tangkapan', [TangkapanController::class,'index'])->name('tangkapan');
    Route::get('/tangkapan/insert_tangkapan', [TangkapanController::class,'insert_tangkapan']);
    Route::post('/tangkapan/update_tangkapan/', [TangkapanController::class,'update_tangkapan']);
    Route::get('/tangkapan/delete_tangkapan/{id}', [TangkapanController::class,'delete_tangkapan']);
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/tangkapan/printer_tangkapan', [TangkapanController::class,'printer_tangkapan']);
    Route::get('/tangkapan/printpdf_tangkapan', [TangkapanController::class,'printpdf_tangkapan']);
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');

    Route::get('/track', [TrackController::class,'index'])->name('track');
    Route::get('/track/insert_track', [TrackController::class,'insert_track']);
    Route::post('/track/update_track/', [TrackController::class,'update_track']);
    Route::get('/track/delete_track/{id}', [TrackController::class,'delete_track']);
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/track/printer_track', [TrackController::class,'printer_track']);
    Route::get('/track/printpdf_track', [TrackController::class,'printpdf_track']);
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
