<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayat Harian - HKBP Sinambela Simanullang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #d6e6f2;
            margin: 0;
        }

        .hero-ayat {
            background-image: url('{{ asset('images/gambar12.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 60vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero-ayat::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-text {
            position: relative;
            z-index: 2;
        }

        .section-title {
            background-color: #1e88e5;
            color: white;
            text-align: center;
            padding: 1rem;
            font-weight: bold;
        }

        .devotional-section {
            padding: 2rem 1rem;
            background-color: #fff;
        }

        .verse-highlight {
            background-color: #f4f4f4;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
        }

        .verse-highlight img {
            width: 40%;
            border-radius: 10px;
            margin-right: 1.5rem;
        }

        .verse-text {
            font-size: 1rem;
        }

        .renungan-item {
            display: flex;
            background-color: #f9f9f9;
            border-radius: 10px;
            margin-bottom: 1rem;
            padding: 1rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .renungan-item img {
            width: 120px;
            height: auto;
            border-radius: 8px;
            margin-right: 1rem;
        }

        .renungan-item h6 {
            font-weight: 600;
            margin-bottom: 0.3rem;
        }

        .renungan-item small {
            color: #1e88e5;
        }
    </style>
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

            {{-- List Renungan Harian --}}
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

            {{-- Tambahkan renungan lainnya sesuai kebutuhan --}}

        </div>
    </section>

    {{-- Footer --}}
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
