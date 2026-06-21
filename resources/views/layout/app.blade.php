<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunaire | @yield('title')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Times New Roman', serif; background: #ffffff; color: #333; }

        /* HEADER */
        .header { background: #ffffff; padding: 20px 50px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eee; }
        .logo { font-size: 24px; font-weight: bold; letter-spacing: 4px; color: #4a3733; }
        .header-right { display: flex; gap: 20px; }
        .header-right a { color: #4a3733; font-size: 20px; transition: transform 0.2s; }
        .header-right a:hover { transform: scale(1.2); }

        /* FOOTER (Warna Cokelat sesuai Figma) */
        footer { background: #4a3733; color: white; text-align: center; padding: 60px 20px; margin-top: 50px; }
        .footer-menu { margin-top: 25px; display: flex; justify-content: center; gap: 25px; flex-wrap: wrap; }
        .footer-menu a { color: white; text-decoration: none; font-size: 14px; opacity: 0.8; transition: 0.3s; }
        .footer-menu a:hover { opacity: 1; text-decoration: underline; }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">LUNAIRE</div>
        <div class="header-right">
            <a href="/login">👤</a>
            <a href="/keranjang">🛍️</a>
        </div>
    </header>

    <main>@yield('content')</main>

    <footer class="footer-lunaire">
    <h2>LUNAIRE</h2>
    <hr style="width: 50px; margin: 15px auto;">
    <div class="footer-menu">
        <a href="#">Tentang Kami</a>
        <a href="#">Syarat & Ketentuan</a>
        <a href="#">Kebijakan Pengembalian</a>
        <a href="/riwayat">Riwayat Belanja</a>
        <a href="#">Panduan Belanja</a>
    </div>
    <div style="margin-top: 30px; font-size: 12px; opacity: 0.7;">
        © 2026 Lunaire Label
    </div>
</footer>
</body>
</html>