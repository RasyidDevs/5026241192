<!DOCTYPE html>
<html lang="en">

<head>
    <title>5026241192 Muhammad Rasyid Bomantoro Setya Putra</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .horizontal-form {
            display: flex;
            gap: 20px;
            align-items: center;
            flex-wrap: wrap;
        }

        .form-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .horizontal-form input {
            padding: 8px;
        }

        .horizontal-form button {
            padding: 8px 15px;
        }
        .error{
            color: red;
            font-size: 24px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h3>5026241192 Muhammad Rasyid Bomantoro Setya Putra</h3>
            <h2>@yield('title')</h2>
        </div>
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/pegawai">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/siswa">Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/obat">Obat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/d4">d4 (laki laki)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/e5">e5 (perempuan)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/eas">EAS</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            @yield('konten')
        </div>
    </div>

</body>
      
</html>
