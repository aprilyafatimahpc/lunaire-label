@extends('layout.app')

@section('content')

<style>
    .checkout-wrapper {
        display: flex;
        justify-content: center;
        padding: 60px 20px;
        background: #f4f4f4;
    }

    .checkout-box {
        background: white;
        width: 100%;
        max-width: 500px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        border-radius: 8px;
        padding: 40px;
        text-align: center;
    }

    .header-checkout h1 { font-size: 24px; letter-spacing: 4px; margin-bottom: 10px; }
    
    .badge-auto {
        background: #d4e1d7;
        color: #2d5a32;
        padding: 5px 15px;
        font-size: 11px;
        border-radius: 15px;
        display: inline-block;
        margin-bottom: 20px;
    }

    .form-group { text-align: left; margin-bottom: 20px; }
    .form-group label { display: block; font-size: 11px; font-weight: bold; color: #555; margin-bottom: 8px; }
    
    .form-control {
        width: 100%;
        padding: 12px;
        border: 1px solid #eee;
        background: #f9f9f9; /* Memberi kesan read-only */
        box-sizing: border-box;
        color: #333;
    }

    .btn-konfirmasi {
        width: 100%;
        padding: 15px;
        background: #3d2a29;
        color: white;
        border: none;
        cursor: pointer;
        font-weight: bold;
        transition: 0.3s;
        margin-top: 20px;
    }

    .btn-konfirmasi:hover { background: #5a3d3b; }

    .back-link { font-size: 13px; color: #555; text-decoration: none; display: block; margin-top: 20px; }
</style>

<div class="checkout-wrapper">
    <div class="checkout-box">
        <div class="header-checkout">
            <p style="font-size: 10px; letter-spacing: 2px;">LUNAIRE LABEL</p>
            <h1>CHECKOUT</h1>
            <div class="badge-auto">Data Member Terisi Otomatis</div>
        </div>

        <form action="/proses-checkout" method="POST">
            @csrf
            <div class="form-group">
                <label>NAMA LENGKAP</label>
                <input type="text" class="form-control" value="Katherine Pierce" readonly>
            </div>
            <div class="form-group">
                <label>EMAIL AKTIF</label>
                <input type="email" class="form-control" value="katherine@gmail.com" readonly>
            </div>
            <div class="form-group">
                <label>NOMOR WHATSAPP</label>
                <input type="text" class="form-control" value="085123456789" readonly>
            </div>
            <div class="form-group">
                <label>ALAMAT LENGKAP</label>
                <textarea class="form-control" rows="3" readonly>Jakarta</textarea>
            </div>
            <div class="form-group">
                <label>METODE PEMBAYARAN</label>
                <textarea class="form-control" rows="2" readonly>Saat ini hanya tersedia pembayaran Bank BCA</textarea>
            </div>

            <button type="submit" class="btn-konfirmasi">KONFIRMASI PESANAN</button>
        </form>

        <a href="/keranjang" class="back-link">&larr; KEMBALI KE KERANJANG</a>
    </div>
</div>

@endsection