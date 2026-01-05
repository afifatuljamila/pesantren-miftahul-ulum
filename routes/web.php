<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;

// HAPUS rute welcome, sisakan satu saja seperti di bawah ini:
Route::get('/', function () {
    return view('pendaftaran'); 
});

// Proses Kirim Data Pendaftaran
Route::post('/daftar', [PendaftaranController::class, 'store'])->name('daftar.store');