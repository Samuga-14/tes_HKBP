<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita & Pengumuman</title>
    <link rel="  website icon" href="{{ asset('images/hkbplogo.png') }}" type="image/png">

    {{-- CSRF Token --}}

    {{-- Bootstrap & Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/berita.css') }}">
</head>
<body>

    {{-- Header --}}
    @include('header')

{{-- Hero Section --}}
<section class="hero-berita-custom">
    <div class="top-bar"></div>
    <div class="container hero-content">
        <div class="row align-items-center">
            <div class="col-lg-6 text-section">
                <h1>Berita & Pengumuman<br>HKBP Sinambela - Simanullang</h1>
                <p> Berita dan pengumuman terbaru seputar kegiatan di Gereja HKBP Sinambela - Simanullang </p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('images/bg1.jpg') }}" alt="Ilustrasi Berita" class="hero-image">
            </div>
        </div>
    </div>
    <div class="bottom-bar"></div>
</section>

{{-- Berita Section --}}
   <section class="berita-gereja-section py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Berita Gereja</h2>
        
        <div class="row">
            <!-- Kontainer Berita 1 -->
            <div class="col-12 mb-4">
                <div class="berita-card shadow-lg rounded-4">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <img src="{{ asset('images/berita/biblecamp.jpg') }}" alt="Berita 1" class="img-fluid rounded-3 berita-image">
                        </div>
                        <div class="col-md-7">
                            <h3 class="berita-title">Bible Camp</h3>
                            <p class="berita-desc">Bible Camp HKBP Sinambela adalah kegiatan rohani yang bertujuan untuk memperdalam iman, mempererat kebersamaan, dan membentuk karakter Kristiani di kalangan generasi muda. Melalui sesi renungan, pujian, permainan rohani, 
                                dan kebersamaan di alam terbuka, para peserta diajak -|untuk lebih mengenal kasih Tuhan dan memperkuat relasi mereka dengan sesama serta dengan Kristus.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kontainer Berita 2 -->
            <div class="col-12 mb-4">
                <div class="berita-card shadow-lg rounded-4">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <img src="{{ asset('images/berita/volley.jpg') }}" alt="Berita 2" class="img-fluid rounded-3 berita-image">
                        </div>
                        <div class="col-md-7">
                            <h3 class="berita-title">Perlombaan Volly Jetun Games Diikuti Naposo Bulung HKBP Sinambela - Simanullang</h3>
                            <p class="berita-desc">Naposo Bulung, sebagai generasi muda yang penuh semangat dan dedikasi terhadap kemajuan kampung, turut ambil bagian dalam kegiatan turnamen voli Jetun Games. 
                                Keikutsertaan ini merupakan bentuk nyata dari komitmen mereka untuk membangun solidaritas, sportivitas, dan kebersamaan antar pemuda.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
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
