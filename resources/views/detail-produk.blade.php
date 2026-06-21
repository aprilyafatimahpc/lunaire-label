@extends('layout.app')

@section('content')

<style>
    /* KONTAINER UTAMA */
    .detail-container { background: #ffffff; padding: 60px 10%; }
    .detail-wrapper { display: flex; gap: 60px; max-width: 1200px; margin: auto; }
    
    /* GALERI */
    .galeri { width: 45%; }
    .gambar-utama { background: #fcfcfc; padding: 20px; border: 1px solid #eee; text-align: center; margin-bottom: 20px; }
    .gambar-utama img { width: 100%; height: 450px; object-fit: contain; }
    
    .thumbnail-container { display: flex; gap: 15px; justify-content: center; }
    .thumbnail-item { width: 80px; height: 100px; border: 1px solid #ddd; cursor: pointer; overflow: hidden; transition: 0.3s; }
    .thumbnail-item:hover { border-color: #5a3d3b; }
    .thumbnail-item img { width: 100%; height: 100%; object-fit: cover; }

    /* INFO PRODUK */
    .info-produk { width: 55%; color: #333; }
    .kategori { font-size: 11px; letter-spacing: 2px; color: #888; margin-bottom: 10px; text-transform: uppercase; }
    .nama-produk { font-size: 36px; font-weight: bold; margin-bottom: 15px; color: #222; }
    .harga { font-size: 24px; color: #5a3d3b; font-weight: bold; margin-bottom: 30px; }
    .garis { border-top: 1px solid #eee; margin: 30px 0; }
    
    .judul-section { font-size: 14px; font-weight: bold; letter-spacing: 2px; margin-bottom: 15px; }
    .deskripsi { line-height: 1.8; color: #666; font-size: 14px; }

    /* UKURAN INTERAKTIF */
    .ukuran-box { display: flex; gap: 15px; margin-top: 15px; }
    .size-option { text-align: center; }
    .size-btn { width: 60px; height: 40px; border: 1px solid #ddd; background: white; cursor: pointer; transition: 0.3s; }
    .size-btn:hover, .size-btn.active { border-color: #5a3d3b; background: #5a3d3b; color: white; }
    .stok-text { font-size: 10px; color: #888; display: block; margin-top: 5px; }

    /* AKSI */
    .aksi { margin-top: 40px; display: flex; gap: 15px; }
    .btn-keranjang { flex: 2; background: #5a3d3b; color: white; border: none; padding: 15px; cursor: pointer; font-weight: bold; transition: 0.3s; }
    .btn-keranjang:hover { background: #452e2c; }
    .btn-batal { flex: 1; background: #f0f0f0; border: none; padding: 15px; cursor: pointer; }
</style>

<div class="detail-container">
    <div class="detail-wrapper">
        <div class="galeri">
            <div class="gambar-utama">
                <img src="{{ asset('images/produk/rosie victorian midi dress.jpg') }}" id="main-display">
            </div>
            <div class="thumbnail-container">
                <div class="thumbnail-item" onclick="changeImage('{{ asset('images/produk/rosie victorian midi dress.jpg') }}')">
                    <img src="{{ asset('images/produk/rosie victorian midi dress.jpg') }}">
                </div>
                <div class="thumbnail-item" onclick="changeImage('{{ asset('images/produk/rosie victorian midi dress.jpg') }}')">
                    <img src="{{ asset('images/produk/rosie victorian midi dress.jpg') }}">
                </div>
            </div>
        </div>

        <div class="info-produk">
            <div class="kategori">LUNAIRE LABEL - DRESS</div>
            <div class="nama-produk">Rosie Victorian Floral Dress</div>
            <div class="harga">Rp. 495.000</div>
            
            <div class="garis"></div>

            <div class="judul-section">DESKRIPSI PRODUK</div>
            <div class="deskripsi">
                Dress motif bunga kecil bergaya Victorian. Bahan katun premium yang sejuk dengan volume rok yang lebar dan elegan.
                <br><br>
                Panduan Ukuran:<br>
                S: LD 90cm | P 110cm <br> M: LD 95cm | P 112cm <br> 
                L: LD 100cm | P 115cm <br> XL: LD 105cm | P 118cm
            </div>

            <div class="garis"></div>

            <div class="judul-section">PILIHAN UKURAN:</div>
            <div class="ukuran-box">
                @foreach(['S', 'M', 'L', 'XL'] as $size)
                <div class="size-option">
                    <button class="size-btn" onclick="selectSize(this)">{{ $size }}</button>
                    <span class="stok-text">sisa 5</span>
                </div>
                @endforeach
            </div>

            <div class="aksi">
    <!-- Menggunakan tag <a> agar bisa diarahkan ke route /keranjang -->
    <a href="{{ url('/keranjang') }}" style="text-decoration: none; flex: 2;">
        <button class="btn-keranjang" style="width: 100%;">TAMBAH KE KERANJANG</button>
    </a>
    
    <!-- Tombol Batal -->
    <button class="btn-batal" onclick="window.location.href='{{ url('/home') }}'">BATAL</button>
</div>
        </div>
    </div>
</div>

<script>
    // Slider sederhana untuk ganti gambar
    function changeImage(src) {
        document.getElementById('main-display').src = src;
    }
    // Toggle tombol ukuran
    function selectSize(btn) {
        document.querySelectorAll('.size-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
    }
</script>

@endsection