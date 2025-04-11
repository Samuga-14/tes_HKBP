<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKBP Sinambela Simanullang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }
        .hero {
            background-image: url('{{ asset('images/gambar12.jpg') }}');
            background-size: cover;
            background-position: center;
            min-height: 80vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
    </style>
</head>
<body>

    {{-- Header --}}
    @include('header')

    {{-- Hero Section --}}
    <section class="hero">
        <div class="hero-content">
            <h1 class="display-4 fw-bold">Selamat Datang di HKBP Sinambela Simanullang</h1>
            <p class="lead">Gereja yang melayani dengan kasih dan kebersamaan</p>
        </div>
    </section>

    {{-- Layanan Section --}}
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold">Layanan Ibadah HKBP Sinambela Simanullang</h2>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item">Ibadah Minggu</li>
                        <li class="list-group-item">Ibadah Tamu</li>
                        <li class="list-group-item">Baptisan Kudus</li>
                        <li class="list-group-item">Perjamuan Kudus</li>
                        <li class="list-group-item">Permintaan Doa</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/foto-ibadah.jpg') }}" alt="Foto Ibadah" class="img-fluid rounded shadow-sm">
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
