{{-- Galeri.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kegiatan</title>
    <link rel="  website icon" href="{{ asset('images/hkbplogo.png') }}" type="image/png">


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
    <section class="hero">
        <div class="top-bar"></div>
        <div class="hero-image">
            <img src="{{ asset('images/icongaleri.jpg') }}"  alt="Ikon Gereja HKBP">
        </div>
        <div class="hero-content">
            <h1 class="hero-title">Galeri Kegiatan<br>HKBP Sin-Sim</h1>
            <p> Galeri kegiatan - kegiatan yang dilaksanakan oleh jemaat gereja HKBP Sinambela - Simanullang</p>
        </div>
        <div class="bottom-bar"></div>
    </section>


    {{-- Judul Section --}}
    <section class="section-title text-center mt-5 mb-4">
        Dokumentasi Kegiatan Terbaru
    </section>

    {{-- Galeri Section --}}
    <section class="galeri-section">
        <div class="galeri-card">
            <div class="galeri-image">
                <img src="{{ asset('images/galeri/biblecamp.jpg') }}" alt="Foto Kegiatan">
            </div>
            <div class="galeri-content">
                <div class="galeri-header">
                    <img src="{{ asset('images/hkbplogo.png') }}" alt="Logo HKBP" class="galeri-logo">
                    <span class="galeri-church">HKBP SINAMBELA</span>
                </div>
                <p class="galeri-text">
                        Kegiatan Bible Camp 2024 yang Diikuti oleh <br>
                        Remaja & Naposo Bulung Gereja HKBP Sinambela - Simanullang
                </p>
                <div class="galeri-date">9 APRIL 2024</div>

                {{-- Pindahkan tombol ke dalam konten --}}
                <div class="galeri-button-wrapper">
                    <a href="https://photos.app.goo.gl/qua62nz3WXFpLimWA" class="galeri-button" target="_blank"
                     rel="noopener noreferrer"> Lihat Galeri </a>

                </div>
            </div>
    </section>
    <section>
            <div class="galeri-card">
            <div class="galeri-image">
                <img src="{{ asset('images/galeri/volley.jpg') }}" alt="Foto Kegiatan">
            </div>
            <div class="galeri-content">
                <div class="galeri-header">
                    <img src="{{ asset('images/hkbplogo.png') }}" alt="Logo HKBP" class="galeri-logo">
                    <span class="galeri-church">HKBP SINAMBELA</span>
                </div>
                <p class="galeri-text">
                        Perlombaan Volly Jetun Games yang oleh <br>
                        Diikuti Naposo Bulung HKBP Sinambela - Simanullang
                </p>
                <div class="galeri-date"> 2 MEI 2025</div>

                {{-- Pindahkan tombol ke dalam konten --}}
                <div class="galeri-button-wrapper">
                    <a href="https://photos.app.goo.gl/qua62nz3WXFpLimWA" class="galeri-button" target="_blank"
                     rel="noopener noreferrer"> Lihat Galeri </a>

                </div>
            </div>
        </div>
    </section>




    {{-- Footer --}}
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
