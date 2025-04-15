<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKBP Sinambela Simanullang</title>

    {{-- Bootstrap & Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
                    <img src="{{ asset('images/ibadah.jpg') }}" alt="Foto Ibadah" class="img-fluid rounded shadow-sm">
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
