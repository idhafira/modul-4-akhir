<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul', 'Aplikasi Akademik')</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 960px; margin: 0 auto; padding: 16px; color: #222; }
        nav a { margin-right: 12px; text-decoration: none; color: #1a56db; }
        nav a.aktif { font-weight: bold; text-decoration: underline; }
        table { width: 100%; border-collapse: collapse; margin-top: 12px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #1a56db; color: #fff; }
        .badge { padding: 2px 8px; border-radius: 10px; font-size: 12px; background: #e5e7eb; }
        .badge-info { background: #dbeafe; } .badge-ok { background: #dcfce7; } .badge-warn { background: #fef3c7; }
        .cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 12px; margin-top: 16px; }
        .card { border: 1px solid #ccc; border-radius: 8px; padding: 16px; text-align: center; text-decoration: none; color: inherit; }
        .card strong { display: block; font-size: 32px; color: #1a56db; }
    </style>
</head>
<body>
    <header>
        <h2>Sistem Informasi Akademik</h2>
        @include('partials.navbar')
        <hr>
    </header>

    <main>
        @yield('konten')
    </main>

    <footer>
        <hr>
        <p>&copy; {{ date('Y') }} Praktikum Pemrograman Web</p>
    </footer>
</body>
</html>
