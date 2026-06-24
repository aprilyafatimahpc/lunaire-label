<?php

use Illuminate\Support\Facades\Route;

// 1. Tambahkan baris 'use' ini di bagian atas agar Laravel tahu lokasi Controller-mu
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PesananDetailController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukStokController;

// 2. Daftar Route (Alamat URL)
Route::get('/', function () {
    return view('welcome');
});

// Contoh Route untuk Auth
Route::get('/login', [AuthController::class, 'index']); // Ini akan memanggil function index di AuthController

// Contoh Route untuk Produk
// Produk
Route::get('/produk', [ProdukController::class, 'index']);
Route::post('/produk', [ProdukController::class, 'store']);
Route::put('/produk/{id}', [ProdukController::class, 'update']);
Route::delete('/produk/{id}', [ProdukController::class, 'destroy']);

// Contoh Route untuk Pesanan
Route::get('/pesanan', [PesananController::class, 'index']);
Route::post('/pesanan', [PesananController::class, 'store']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori', [KategoriController::class, 'store']);

Route::get('/stok', [ProdukStokController::class, 'index']);
Route::post('/stok', [ProdukStokController::class, 'store']);
Route::put('/stok/{id}', [ProdukStokController::class, 'update']);
Route::delete('/stok/{id}', [ProdukStokController::class, 'destroy']);

Route::get('/pesanan-detail', [PesananDetailController::class, 'index']);
Route::post('/pesanan-detail', [PesananDetailController::class, 'store']);