{{-- Galeri.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kegiatan - HKBP Sinambela Simanullang</title>
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
        <div class="hero-content">
            <h1 class="hero-title">Selamat Datang di HKBP<br>Sinambela Simanullang</h1>
            <p class="hero-subtitle">Jahowa Do Si Parmahan Au</p>
        </div>
    </section>

    {{-- Judul Section --}}
    <section class="section-title text-center mt-5 mb-4">
        Dokumentasi Kegiatan Terbaru
    </section>

    {{-- Galeri Section --}}
    <section class="content-section">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($galeri as $item)
                <div class="col">
                    <div class="galeri-card">
                        <div class="galeri-img-wrapper">
            <img src="{{ asset('images/galeri/' . $item->gambar) }}" alt="{{ $item->judul }}" class="img-fluid">
        </div>
        <div class="galeri-text">
            <div class="d-flex align-items-center mb-3">
                <img src="{{ asset('images/hkbplogo.png') }}" alt="Logo HKBP" class="logo-galeri-mini me-2">
                <span class="text-muted small">HKBP SINAMBELA SIMANULLANG</span>
            </div>
            <h5 class="judul-galeri">{{ $item->judul }}</h5>
            <p class="deskripsi-galeri">{{ Str::limit(strip_tags($item->deskripsi), 100) }}</p>
            <div class="d-flex justify-content-between align-items-center mt-2">
                <small class="text-muted">{{ \Carbon\Carbon::parse($item->tanggal_publikasi)->translatedFormat('d F Y') }}</small>
                <a href="{{ asset('images/galeri/' . $item->gambar) }}" class="btn btn-sm btn-outline-primary" download>
                    <i class="bi bi-download"></i> Unduh
                </a>
            </div>
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
