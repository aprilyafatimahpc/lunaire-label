<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lunaire</title>

    <style>
        body {
            margin: 0;
            font-family: 'Times New Roman', serif;
            background: #4a3733;
            color: white;
        }

        .header {
            background: white;
            color: #4a3733;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-weight: bold;
            letter-spacing: 3px;
        }

        footer {
            background: #332522;
            text-align: center;
            padding: 40px;
            margin-top: 60px;
        }
    </style>

</head>
<body>

    <div class="header">
        <div class="logo">LUNAIRE</div>
        <div>👤 🛍️</div>
    </div>

    @yield('content')

    <footer>
        <p>© 2026 Lunaire Label</p>
    </footer>

</body>
</html>