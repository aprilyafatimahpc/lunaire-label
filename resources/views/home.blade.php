@extends('layout.app')

@section('content')

<style>
    .hero {
        text-align: center;
        padding: 60px 20px;
    }

    .hero h1 {
        letter-spacing: 8px;
        margin-bottom: 10px;
    }

    .hero p {
        font-style: italic;
    }

    .koleksi {
        padding: 40px;
        text-align: center;
    }

    .produk-container {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
        margin-top: 30px;
    }

    .card {
        background: white;
        color: #333;
        width: 250px;
        padding: 15px;
        border: 1px solid #ddd;
        transition: 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .gambar {
        height: 280px;
        background: #eee;
        margin-bottom: 15px;
    }

    .cat {
        font-size: 10px;
        letter-spacing: 1px;
        color: #888;
        margin-bottom: 5px;
    }

    .btn-detail {
        background: transparent;
        border: 1px solid #333;
        padding: 8px 20px;
        cursor: pointer;
        font-family: inherit;
        margin-top: 10px;
    }

    .btn-detail:hover {
        background: #4a3733;
        color: white;
    }

    .btn-semua {
        background: #4a3733;
        color: white;
        border: 1px solid white;
        padding: 12px 40px;
        margin-top: 40px;
        cursor: pointer;
    }

    .btn-semua:hover {
        opacity: 0.9;
    }
</style>

<div class="hero">
    <h1>LUNAIRE</h1>
    <p>ESTETIKA & KEANGGUNAN MODERN</p>
</div>

<div class="koleksi">
    <h2>KOLEKSI PILIHAN</h2>

    <div class="produk-container">

        @forelse($products as $product)
        <div class="card">

            <div class="gambar"></div>

            <div class="cat">
                {{ $product->kategori->nama_kategori ?? '-' }}
            </div>

            <h4>{{ $product->nama_barang }}</h4>

            <p>Rp {{ number_format($product->harga, 0, ',', '.') }}</p>

            <button class="btn-detail">LIHAT DETAIL</button>

        </div>
        @empty
            <p>Belum ada produk</p>
        @endforelse

    </div>

    <button class="btn-semua">LIHAT SEMUA</button>
</div>

@endsection