@extends('layout.app')

@section('content')

<style>
    /* HERO SECTION */
    .hero {
        background: #5a3d3b;
        text-align: center;
        padding: 80px 20px;
        color: white;
    }
    .hero h1 { letter-spacing: 8px; font-size: 48px; }
    .hero p { letter-spacing: 3px; font-size: 14px; margin-top: 10px; }

    /* KOLEKSI SECTION */
    .koleksi { padding: 60px 20px; text-align: center; background: #fdfdfd; }
    .koleksi h2 { letter-spacing: 4px; margin-bottom: 50px; color: #5a3d3b; }
    
    .produk-container {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
    }

    /* CARD STYLE */
    .card {
        width: 260px;
        background: white;
        padding: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .gambar-box { 
    background: #f4f4f4; 
    padding: 10px; 
    margin-bottom: 15px; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
}

.gambar { 
    width: 100%; 
    height: 300px; 
    object-fit: contain; /* Mengubah 'cover' menjadi 'contain' agar gambar tidak terpotong */
    background: transparent; 
}

    .kategori { font-size: 11px; color: #999; text-transform: uppercase; margin-bottom: 5px; }
    .nama-produk { font-weight: bold; margin-bottom: 5px; font-size: 15px; }
    .harga { font-size: 14px; margin-bottom: 15px; color: #333; }

    .btn-detail {
        width: 100%;
        padding: 12px;
        border: 1px solid #5a3d3b;
        background: white;
        cursor: pointer;
        transition: 0.3s;
    }
    .btn-detail:hover { background: #5a3d3b; color: white; }

    .btn-semua {
        margin-top: 60px;
        background: #5a3d3b;
        color: white;
        border: none;
        padding: 15px 60px;
        cursor: pointer;
        font-size: 16px;
        transition: background 0.3s;
    }
    .btn-semua:hover { background: #452e2c; }
</style>

<section class="hero">
    <h1>LUNAIRE</h1>
    <p>ESTETIKA & KEANGGUNAN MODERN</p>
</section>

<section class="koleksi">
    <h2>KOLEKSI PILIHAN</h2>
    <div class="produk-container">

        @php
            $items = [
                ['img' => 'rosie victorian midi dress.jpg', 'cat' => 'DRESS', 'name' => 'Rosie Victorian Midi Dress', 'price' => 'Rp 495.000'],
                ['img' => 'midnight navy tailored vest.jpg', 'cat' => 'OUTER', 'name' => 'Midnight Navy Tailored Vest', 'price' => 'Rp 245.000'],
                ['img' => 'l epoque plaid tartan dress.jpg', 'cat' => 'DRESS', 'name' => 'L\'Epoque Plaid Tartan Dress', 'price' => 'Rp 425.000'],
            ];
        @endphp

        @foreach($items as $item)
        <div class="card">
            <div class="gambar-box">
                <img src="{{ asset('images/produk/' . $item['img']) }}" class="gambar" alt="{{ $item['name'] }}">
            </div>
            <div class="kategori">{{ $item['cat'] }}</div>
            <div class="nama-produk">{{ $item['name'] }}</div>
            <div class="harga">{{ $item['price'] }}</div>
            <a href="/detail-produk" style="text-decoration:none; color:inherit;">
                <button class="btn-detail">LIHAT DETAIL</button>
            </a>
        </div>
        @endforeach

    </div>

    <a href="/produk"><button class="btn-semua">LIHAT SEMUA</button></a>
</section>

@endsection