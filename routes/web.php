<?php

use Illuminate\Support\Facades\Route;

// 1. Tambahkan baris 'use' ini di bagian atas agar Laravel tahu lokasi Controller-mu
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;

// 2. Daftar Route (Alamat URL)
Route::get('/', function () {
    return view('welcome');
});

// Contoh Route untuk Auth
Route::get('/login', [AuthController::class, 'index']); // Ini akan memanggil function index di AuthController

// Contoh Route untuk Produk
Route::get('/produk', [ProdukController::class, 'index']);

// Contoh Route untuk Pesanan
Route::get('/pesanan', [PesananController::class, 'index']);