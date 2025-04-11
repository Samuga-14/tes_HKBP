<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kegiatan - HKBP Sinambela Simanullang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .hero-galeri {
            background-image: url('{{ asset('images/gambar12.jpg') }}');
            background-size: cover;
            background-position: center;
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            color: white;
            text-align: center;
        }

        .hero-galeri::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-text {
            position: relative;
            z-index: 2;
        }

        .section-title {
            background-color: #3498db;
            color: white;
            padding: 1rem;
            text-align: center;
            font-weight: bold;
            font-size: 1.5rem;
        }

        .content-section {
            background-color: #f4f4f4;
            padding: 2rem;
        }

        .galeri-item {
            margin-bottom: 2rem;
        }

        .galeri-item img {
            width: 100%;
            border-radius: 10px;
        }

        .galeri-text h5 {
            font-weight: bold;
            color: #2c3e50;
        }

        .galeri-text small {
            color: #777;
        }
    </style>
</head>
<body>

    {{-- Header --}}
    @include('header')

    {{-- Hero Section --}}
    <section class="hero-galeri">
        <div class="hero-text">
            <h1 class="display-5 fw-bold">Galeri Kegiatan HKBP Sinambela Simanullang</h1>
            <p class="lead">Kumpulan Dokumentasi Kegiatan Gereja</p>
        </div>
    </section>

    {{-- Galeri Section --}}
    <section class="section-title">
        Dokumentasi Kegiatan Terbaru
    </section>

    <section class="content-section">
        <div class="container">
            <div class="row">
                <!-- Contoh item 1 -->
                <div class="col-md-6 galeri-item">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{ asset('images/galeri1.jpg') }}" alt="Kegiatan 1">
                        </div>
                        <div class="col-md-7 galeri-text">
                            <h5>Kebaktian Pemuda</h5>
                            <p>Acara kebaktian pemuda HKBP yang penuh semangat dan sukacita.</p>
                            <small>10 Maret 2024</small>
                        </div>
                    </div>
                </div>

                <!-- Contoh item 2 -->
                <div class="col-md-6 galeri-item">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{ asset('images/galeri2.jpg') }}" alt="Kegiatan 2">
                        </div>
                        <div class="col-md-7 galeri-text">
                            <h5>Ibadah Paskah</h5>
                            <p>Peringatan hari Paskah bersama seluruh jemaat HKBP Sinambela.</p>
                            <small>31 Maret 2024</small>
                        </div>
                    </div>
                </div>

                <!-- Tambahkan item galeri lainnya di sini jika perlu -->
            </div>
        </div>
    </section>

    {{-- Footer --}}
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
