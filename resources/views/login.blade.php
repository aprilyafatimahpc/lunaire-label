@extends('layout.app')

@section('content')

<style>
    /* KONTAINER LOGIN */
    .login-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
        background: #f4f4f4;
        padding: 20px;
    }

    .login-box {
        background: white;
        width: 100%;
        max-width: 450px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        border-radius: 8px;
        overflow: hidden;
    }

    .header-login {
        background: #3d2a29;
        color: white;
        padding: 40px;
        text-align: center;
    }

    .header-login h1 {
        letter-spacing: 6px;
        font-size: 24px;
        margin: 0;
    }

    .form-content {
        padding: 40px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-size: 12px;
        font-weight: bold;
        margin-bottom: 8px;
        color: #555;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        box-sizing: border-box;
        transition: border 0.3s;
    }

    .form-control:focus {
        border-color: #3d2a29;
        outline: none;
    }

    .btn-login {
        width: 100%;
        padding: 15px;
        background: #3d2a29;
        color: white;
        border: none;
        cursor: pointer;
        font-weight: bold;
        transition: background 0.3s;
    }

    .btn-login:hover {
        background: #5a3d3b;
    }

    .footer-login {
        text-align: center;
        margin-top: 20px;
        font-size: 13px;
    }

    .footer-login a {
        color: #3d2a29;
        font-weight: bold;
        text-decoration: none;
    }
</style>

<div class="login-wrapper">
    <div class="login-box">
        <div class="header-login">
            <h1>LUNAIRE</h1>
        </div>

        <div class="form-content">
            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                    <label>USERNAME</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
                </div>

                <div class="form-group">
                    <label>PASSWORD</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="********" required>
                </div>

                <button type="submit" class="btn-login">MASUK KE AKUN</button>
            </form>

            <div class="footer-login">
                <p>Belum punya akun? <a href="/register">Daftar Lunaire Member</a></p>
                <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">
                <a href="/">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</div>

@endsection