@extends('layout.app')

@section('content')

<style>
    /* HERO SECTION */
    .hero-produk {
        background: #5a3d3b;
        color: white;
        text-align: center;
        padding: 80px 20px;
    }
    .hero-produk h1 { font-size: 48px; letter-spacing: 8px; margin-bottom: 10px; }
    .hero-produk p { letter-spacing: 3px; font-size: 14px; opacity: 0.8; }

    /* GRID CONTAINER */
    .koleksi-container { background: #fdfdfd; padding: 60px 5%; min-height: 700px; }
    .produk-grid { 
        display: grid; 
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); 
        gap: 40px; 
        justify-items: center; 
    }

    /* CARD INTERACTION */
    .produk-card { 
        width: 100%; 
        max-width: 260px; 
        text-align: center; 
        transition: transform 0.3s ease; 
    }
    .produk-card:hover { transform: translateY(-10px); }

    .gambar-frame { 
        background: #f4f4f4; 
        padding: 15px; 
        margin-bottom: 20px; 
        overflow: hidden; 
    }
    .gambar-frame img { 
        width: 100%; 
        height: 320px; 
        object-fit: contain; /* Agar tidak terpotong */
        transition: transform 0.5s ease; 
    }
    .produk-card:hover img { transform: scale(1.05); }

    /* TYPOGRAPHY */
    .kategori { color: #888; font-size: 12px; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 1px; }
    .nama-produk { color: #333; font-size: 16px; font-weight: bold; margin-bottom: 8px; }
    .harga { color: #5a3d3b; font-size: 15px; font-weight: bold; margin-bottom: 20px; }

    /* BUTTON INTERACTIVE */
    .btn-detail {
        width: 100%;
        padding: 12px;
        background: transparent;
        border: 1px solid #5a3d3b;
        color: #5a3d3b;
        cursor: pointer;
        font-weight: bold;
        transition: 0.3s ease;
    }
    .btn-detail:hover { background: #5a3d3b; color: white; }
</style>

<section class="hero-produk">
    <h1>KOLEKSI KAMI</h1>
    <p>TEMUKAN KEANGGUNAN DALAM SETIAP DETAIL</p>
</section>

<section class="koleksi-container">
    <div class="produk-grid">
        
        @php
            $products = [
                ['img' => 'rosie victorian midi dress.jpg', 'cat' => 'DRESS', 'name' => 'Rosie Victorian Midi Dress', 'price' => 'Rp 495.000'],
                ['img' => 'midnight navy tailored vest.jpg', 'cat' => 'OUTER', 'name' => 'Midnight Navy Tailored Vest', 'price' => 'Rp 245.000'],
                ['img' => 'l epoque plaid tartan dress.jpg', 'cat' => 'DRESS', 'name' => 'L\'Epoque Plaid Tartan Dress', 'price' => 'Rp 425.000'],
                ['img' => 'grace silk tie-front blouse.jpg', 'cat' => 'ATASAN', 'name' => 'Grace Silk Tie-Front Blouse', 'price' => 'Rp 295.000'],
                ['img' => 'dorothy floral embroidery dress.jpg', 'cat' => 'DRESS', 'name' => 'Dorothy Floral Embroidery Dress', 'price' => 'Rp 585.000'],
                ['img' => 'colette ribbon cape blazer.jpg', 'cat' => 'OUTER', 'name' => 'Colette Ribbon Cape Blazer', 'price' => 'Rp 450.000'],
                ['img' => 'asymmetric draped linen blouse.jpg', 'cat' => 'ATASAN', 'name' => 'Asymmetric Draped Linen Blouse', 'price' => 'Rp 275.000'],
            ];
        @endphp

        @foreach($products as $p)
        <div class="produk-card">
            <div class="gambar-frame">
                <img src="{{ asset('images/produk/' . $p['img']) }}" alt="{{ $p['name'] }}">
            </div>
            <div class="kategori">{{ $p['cat'] }}</div>
            <div class="nama-produk">{{ $p['name'] }}</div>
            <div class="harga">{{ $p['price'] }}</div>
            <a href="/detail-produk" style="text-decoration:none;">
                <button class="btn-detail">LIHAT DETAIL</button>
            </a>
        </div>
        @endforeach

    </div>
</section>

@endsection