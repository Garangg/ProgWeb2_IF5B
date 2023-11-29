<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ValidasiController;
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

Route::get('/', [\App\Http\Controllers\MahasiswaController::class, 'index'])->name('Mahasiswa.index');
Route::post('/hitung', [\App\Http\Controllers\MahasiswaController::class, 'hitung']);
Route::post('/clear', [\App\Http\Controllers\MahasiswaController::class, 'clearSession']) ->name('Mahasiswa.clearSession');

// Latihan 10A
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('formulir', [PegawaiController::class, 'formulir']);
Route::post('formulir/proses', [PegawaiController::class, 'proses']);

// Latihan 10B
Route::get('/input', [ValidasiController::class, 'input']);
Route::post('/proses', [ValidasiController::class, 'proses']);

// Tugas
Route::get('/login', [ValidasiController::class, 'login']);
Route::post('/login/proses', [ValidasiController::class, 'prosesLogin']);

Route::resource('students', \App\Http\Controllers\StudentsController::class);