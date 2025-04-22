<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Gereja - HKBP Sinambela Simanullang</title>

    {{-- Bootstrap & Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/berita.css') }}">
</head>
<body>

    {{-- Header --}}
    @include('header')

    {{-- Hero Section --}}
    <section class="hero-berita">
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
    <section class="content-section py-5">
        <div class="container">
            <h2 class="mb-4 text-center fw-bold">Berita Terbaru</h2>
            @foreach ($beritas->sortByDesc('tanggal_publikasi') as $item)
            <div class="d-flex flex-column flex-md-row gap-3 mb-4 p-3 berita-box bg-white shadow-sm rounded-3">
                <div class="flex-shrink-0">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="img-fluid rounded" style="width: 220px; height: 140px; object-fit: cover;">
                </div>
                <div>
                    <h5 class="fw-semibold">{{ $item->judul }}</h5>
                    <p class="text-muted mb-1" style="font-size: 0.9rem;">
                        Dipublikasikan pada {{ \Carbon\Carbon::parse($item->tanggal_publikasi)->translatedFormat('d F Y') }}
                    </p>
                    <p class="mb-2">{{ Str::limit(strip_tags($item->deskripsi), 150) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
