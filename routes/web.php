<?php

use Illuminate\Support\Facades\Route;

// Import semua Controller yang diperlukan
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PesananDetailController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukStokController;

// 1. ROUTE UNTUK VIEW (Menampilkan Halaman)
// Gunakan Route::view untuk halaman yang tidak butuh logika database kompleks
Route::get('/', function () { return view('welcome'); });
Route::view('/home', 'home');
Route::view('/produk', 'produk');
Route::view('/detail-produk', 'detail-produk');
Route::view('/login', 'login');
Route::view('/register', 'register');
Route::view('/keranjang', 'keranjang');
Route::view('/checkout', 'checkout');
Route::view('/riwayat', 'riwayat');

// 2. ROUTE UNTUK LOGIKA (Menggunakan Controller)
// Pastikan tidak ada duplikasi URL dengan daftar di atas

// Auth
Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']); // Tambahan untuk memproses login
Route::post('/register', [AuthController::class, 'register']); // Tambahan untuk memproses register

// Produk
Route::get('/produk-data', [ProdukController::class, 'index']); // Pakai suffix '-data' jika url /produk bentrok
Route::post('/produk', [ProdukController::class, 'store']);
Route::put('/produk/{id}', [ProdukController::class, 'update']);
Route::delete('/produk/{id}', [ProdukController::class, 'destroy']);

// Pesanan & Keranjang
Route::get('/pesanan', [PesananController::class, 'index']);
Route::post('/pesanan', [PesananController::class, 'store']);
Route::post('/upload-bukti', [PesananController::class, 'uploadBukti']); // Sesuai instruksi nota

// Kategori & Stok
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/stok', [ProdukStokController::class, 'index']);
Route::post('/stok', [ProdukStokController::class, 'store']);
Route::put('/stok/{id}', [ProdukStokController::class, 'update']);
Route::delete('/stok/{id}', [ProdukStokController::class, 'destroy']);

// Detail Pesanan
Route::get('/pesanan-detail', [PesananDetailController::class, 'index']);