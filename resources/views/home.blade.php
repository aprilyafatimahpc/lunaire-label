<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lunaire</title>
    <style>
        body { margin: 0; font-family: 'Times New Roman', serif; background: #4a3733; color: white; }
        .header { background: white; color: #4a3733; padding: 20px 50px; display: flex; justify-content: space-between; align-items: center; }
        .logo { font-weight: bold; letter-spacing: 3px; font-size: 20px; }
        .hero { text-align: center; padding: 60px 20px; }
        .hero h1 { letter-spacing: 8px; margin-bottom: 10px; }
        .koleksi { padding: 40px; text-align: center; }
        .produk-container { display: flex; justify-content: center; gap: 30px; flex-wrap: wrap; margin-top: 30px; }
        .card { background: white; color: #333; width: 250px; padding: 15px; border: 1px solid #ddd; }
        .gambar { height: 280px; background: #eee; margin-bottom: 15px; }
        .cat { font-size: 10px; letter-spacing: 1px; color: #888; }
        .btn-detail { background: transparent; border: 1px solid #333; padding: 8px 20px; cursor: pointer; font-family: inherit; margin-top: 10px; }
        .btn-semua { background: #4a3733; color: white; border: 1px solid white; padding: 12px 40px; margin-top: 40px; cursor: pointer; }
        footer { background: #332522; text-align: center; padding: 40px; margin-top: 50px; font-size: 13px; }
    </style>
</head>
<body>

<div class="header">
    <div class="logo">LUNAIRE</div>
    <div>👤 🛍️</div>
</div>

<div class="hero">
    <h1>LUNAIRE</h1>
    <p>ESTETIKA & KEANGGUNAN MODERN</p>
</div>

<div class="koleksi">
    <h2>KOLEKSI PILIHAN</h2>
    <div class="produk-container">
        @foreach($products as $product)
        <div class="card">
            <div class="gambar"></div>
            <div class="cat">{{ $product['category'] }}</div>
            <h4>{{ $product['name'] }}</h4>
            <p>{{ $product['price'] }}</p>
            <button class="btn-detail">LIHAT DETAIL</button>
        </div>
        @endforeach
    </div>
    <button class="btn-semua">LIHAT SEMUA</button>
</div>

<footer>
    <div class="logo">LUNAIRE</div>
    <p style="margin: 20px 0;">Tentang Kami | Syarat & Ketentuan | Kebijakan Pengembalian</p>
    <p>© 2026 Lunaire Label</p>
</footer>

</body>
</html>