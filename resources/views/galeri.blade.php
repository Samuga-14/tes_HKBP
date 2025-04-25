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
    <section class="hero-galeri text-center py-5 bg-light">
        <div class="container">
            <h1 class="display-5 fw-bold animate__animated animate__fadeIn">Galeri Kegiatan HKBP Sinambela Simanullang</h1>
            <p class="lead animate__animated animate__fadeIn animate__delay-1s">Kumpulan Dokumentasi Kegiatan Gereja</p>
        </div>
    </section>

    {{-- Judul Section --}}
    <section class="section-title text-center mt-4 mb-3">
        Dokumentasi Kegiatan Terbaru
    </section>

    {{-- Galeri Section --}}
    <section class="content-section">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach ($galeri as $item)
                <div class="col">
                    <div class="galeri-card shadow-sm rounded-4">
                        <img src="{{ asset('images/galeri/' . $item->gambar) }}" alt="gambar" class="img-thumbnail" width="90">
                        <div class="p-3">
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{ asset('images/hkbplogo.png') }}" alt="Logo HKBP" class="me-2" width="30">
                                <div>
                                    <strong>HKBP SINAMBELA SIMANULLANG</strong>
                                </div>
                            </div>
                            <h5 class="judul-galeri">{{ $item->judul }}</h5>
                            <p class="mb-1 deskripsi-galeri">{{ Str::limit(strip_tags($item->deskripsi), 100) }}</p>
                            <small class="text-muted">{{ \Carbon\Carbon::parse($item->tanggal_publikasi)->translatedFormat('d F Y') }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Footer --}}
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
