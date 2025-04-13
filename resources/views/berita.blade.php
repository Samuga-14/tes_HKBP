<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Gereja - HKBP Sinambela Simanullang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .hero-sejarah {
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

        .hero-sejarah::before {
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

        .card-img-top {
            height: 220px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    {{-- Header --}}
    @include('header')

    {{-- Hero Section --}}
    <section class="hero-sejarah">
        <div class="hero-text">
            <h1 class="display-5 fw-bold">BERITA TERBARU DARI HKBP SINAMBELA SIMANULLANG</h1>
            <p class="lead">"Mengabarkan kasih Tuhan lewat informasi dan kegiatan."</p>
        </div>
    </section>

    {{-- Section Judul --}}
    <section class="section-title">
        Berita & Pengumuman HKBP Sinambela Simanullang
    </section>

    {{-- Berita Section --}}
    <section class="content-section">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Card 1 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="{{ asset('images/berita/ayat.jpg') }}" class="card-img-top" alt="Ayat Harian">
                        <div class="card-body">
                            <h5 class="card-title">Ayat Harian</h5>
                            <p class="card-text">Lihat ayat harian yang disediakan oleh HKBP Sinambela</p>
                        </div>
                        <div class="card-footer bg-transparent text-end border-0">
                            <a href="{{ url('/ayat') }}" class="btn btn-outline-primary btn-sm">Lihat Selengkapnya →</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="{{ asset('images/berita/kegiatan.jpg') }}" class="card-img-top" alt="Laporan Kegiatan">
                        <div class="card-body">
                            <h5 class="card-title">Laporan Kegiatan</h5>
                            <p class="card-text">Lihat kegiatan-kegiatan ataupun acara yang dilaksanakan di HKBP Sinambela</p>
                        </div>
                        <div class="card-footer bg-transparent text-end border-0">
                            <a href="#" class="btn btn-outline-primary btn-sm">Lihat Selengkapnya →</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="{{ asset('images/berita/perkembangan.jpg') }}" class="card-img-top" alt="Perkembangan Gereja">
                        <div class="card-body">
                            <h5 class="card-title">Perkembangan Gereja</h5>
                            <p class="card-text">Lihat bagaimana perkembangan pembangunan gereja setiap saat</p>
                        </div>
                        <div class="card-footer bg-transparent text-end border-0">
                            <a href="{{ url('/perkembangan') }}" class="btn btn-outline-primary btn-sm">Lihat Selengkapnya →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
