@extends('layout.app')

@section('content')

<style>
    .reg-wrapper {
        display: flex;
        justify-content: center;
        padding: 60px 20px;
        background: #f4f4f4;
    }

    .reg-box {
        background: white;
        width: 100%;
        max-width: 800px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        border-radius: 8px;
        overflow: hidden;
    }

    .header-reg {
        background: #3d2a29;
        color: white;
        padding: 40px;
        text-align: center;
    }

    .header-reg h1 { letter-spacing: 6px; font-size: 24px; margin: 0; }
    .header-reg p { font-size: 14px; opacity: 0.8; margin-top: 5px; }

    .form-content { padding: 40px; }
    
    /* GRID FORM */
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .form-group { margin-bottom: 20px; }
    .form-group.full { grid-column: span 2; }

    .form-group label {
        display: block;
        font-size: 11px;
        font-weight: bold;
        margin-bottom: 8px;
        color: #555;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        box-sizing: border-box;
        transition: 0.3s;
    }

    .form-control:focus { border-color: #3d2a29; outline: none; }

    .btn-reg {
        width: 100%;
        padding: 15px;
        background: #3d2a29;
        color: white;
        border: none;
        cursor: pointer;
        font-weight: bold;
        margin-top: 10px;
        transition: 0.3s;
    }

    .btn-reg:hover { background: #5a3d3b; }

    .footer-reg { text-align: center; margin-top: 20px; font-size: 13px; }
    .footer-reg a { color: #3d2a29; font-weight: bold; text-decoration: none; }
</style>

<div class="reg-wrapper">
    <div class="reg-box">
        <div class="header-reg">
            <h1>LUNAIRE</h1>
            <p>JOIN OUR COMMUNITY</p>
        </div>

        <div class="form-content">
            <form action="/register" method="POST">
                @csrf
                <div class="form-grid">
                    <div class="form-group">
                        <label>NAMA LENGKAP</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>USERNAME</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>EMAIL</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>NOMOR WHATSAPP</label>
                        <input type="tel" name="whatsapp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>PASSWORD</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>KONFIRMASI PASSWORD</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>
                    <div class="form-group full">
                        <label>ALAMAT LENGKAP PENGIRIMAN</label>
                        <textarea name="alamat" class="form-control" rows="3"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn-reg">DAFTAR SEKARANG</button>
            </form>

            <div class="footer-reg">
                <p>Sudah punya akun? <a href="/login">Login di sini</a></p>
            </div>
        </div>
    </div>
</div>

@endsection