<?php

use App\Http\Controllers\AngkutanController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PanenController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\PupukController;
use App\Http\Controllers\SawitController;
use App\Http\Controllers\SuratJalanController;
use App\Http\Controllers\SuratKonfirmasiController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\VarietasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index']);     // Call To Action
// Route::get('/login', [NamaController::class, 'index']);      // Halaman Login
Route::get('/beranda', [BerandaController::class, 'index']);    // Halaman Beranda
Route::get('/petani', [PetaniController::class, 'index']);    // Halaman Petani
Route::get('/panen', [PanenController::class, 'index']);      // Halaman Hasil Panen
Route::get('/sawit', [SawitController::class, 'index']);      // Halaman Harga Sawit
Route::get('/angkutan', [AngkutanController::class, 'index']);       // Halaman Angkutan
Route::get('/varietas', [VarietasController::class, 'index']);       // Halaman Jenis Varietas
Route::get('/pupuk', [PupukController::class, 'index']);      // Halaman Jenis Pupuk
Route::get('/transaksi', [TransaksiController::class, 'index']);      // Halaman Data Transaksi
Route::get('/suratjalan', [SuratJalanController::class, 'index']);     // Halaman Data Surat Jalan
Route::get('/suratkonfirmasi', [SuratKonfirmasiController::class, 'index']);      // Halaman Surat Konfirmasi Perusahaan




// eksperimen
Route::get('/eksperimen/satu', function() {
	return view('eksperimen.satu');
});

Route::get('/eksperimen/dua', function() {
	return view('eksperimen.dua');
});
