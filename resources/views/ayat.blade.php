<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayat Harian - HKBP Sinambela Simanullang</title>

    {{-- Bootstrap & Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/ayat.css') }}">
</head>
<body>

    {{-- Header --}}
    @include('header')

    {{-- Hero Section --}}
    <section class="hero-ayat">
        <div class="hero-text">
            <h1 class="display-6 fw-bold">SELAMAT DATANG DI HKBP SINAMBELA SIMANULLANG</h1>
        </div>
    </section>

    {{-- Section Title --}}
    <div class="section-title">
        Ayat Harian HKBP Sinambela - Simanullang
    </div>

    {{-- Content Section --}}
    <section class="devotional-section">
        <div class="container">
            {{-- Highlighted Verse --}}
            <div class="verse-highlight">
                <img src="{{ asset('images/renungan1.jpg') }}" alt="Renungan Utama">
                <div class="verse-text">
                    <h6>Mazmur 119:105</h6>
                    <p>"Firman-Mu itu pelita bagi kakiku dan terang bagi jalanku."</p>
                </div>
            </div>

            {{-- Renungan Harian List --}}
            <div class="renungan-item">
                <img src="{{ asset('images/renungan2.jpg') }}" alt="Renungan">
                <div>
                    <small>Efesus 6:1</small>
                    <h6>Renungan Harian</h6>
                    <p>Hai anak-anak, taatilah orang tuamu di dalam Tuhan, karena itulah yang benar.</p>
                </div>
            </div>

            <div class="renungan-item">
                <img src="{{ asset('images/renungan3.jpg') }}" alt="Renungan">
                <div>
                    <small>Mazmur 37:12</small>
                    <h6>Renungan Harian</h6>
                    <p>Tuhan akan membantu, sebab kebenaran ada pada-Nya.</p>
                </div>
            </div>

            <div class="renungan-item">
                <img src="{{ asset('images/renungan4.jpg') }}" alt="Renungan">
                <div>
                    <small>Kejadian 6:9</small>
                    <h6>Renungan Harian</h6>
                    <p>Nuh adalah orang yang benar dan tidak bercela di antara orang-orang sezamannya.</p>
                </div>
            </div>

        </div>
    </section>

    {{-- Footer --}}
    @include('footer')

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
