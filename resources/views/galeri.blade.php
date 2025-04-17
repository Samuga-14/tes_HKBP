<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kegiatan - HKBP Sinambela Simanullang</title>

    {{-- Bootstrap & Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/galeri.css') }}">
</head>
<body>

    {{-- Header --}}
    @include('header')

    {{-- Hero Section --}}
    <section class="hero-galeri">
        <div class="hero-text">
            <h1 class="display-5 fw-bold animate__animated animate__fadeIn">Galeri Kegiatan HKBP Sinambela Simanullang</h1>
            <p class="lead animate__animated animate__fadeIn animate__delay-1s">Kumpulan Dokumentasi Kegiatan Gereja</p>
        </div>
    </section>

    {{-- Judul Section --}}
    <section class="section-title">
        Dokumentasi Kegiatan Terbaru
    </section>

    {{-- Galeri Section --}}
    <section class="content-section">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- Galeri 1 -->
                <div class="col">
                    <div class="galeri-item">
                        <img src="{{ asset('images/galeri1.jpg') }}" alt="Kegiatan 1">
                        <div class="galeri-text">
                            <h5>Kebaktian Pemuda</h5>
                            <p>Acara kebaktian pemuda HKBP yang penuh semangat dan sukacita.</p>
                            <small>10 Maret 2024</small>
                        </div>
                    </div>
                </div>

                <!-- Galeri 2 -->
                <div class="col">
                    <div class="galeri-item">
                        <img src="{{ asset('images/galeri2.jpg') }}" alt="Kegiatan 2">
                        <div class="galeri-text">
                            <h5>Ibadah Paskah</h5>
                            <p>Peringatan hari Paskah bersama seluruh jemaat HKBP Sinambela.</p>
                            <small>31 Maret 2024</small>
                        </div>
                    </div>
                </div>

                {{-- Tambahkan galeri lainnya di sini --}}
            </div>
        </div>
    </section>

    {{-- Footer --}}
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
