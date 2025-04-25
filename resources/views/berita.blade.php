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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/berita.css') }}">
</head>
<body>

    {{-- Header --}}
    @include('header')

    {{-- Hero Section --}}
    <section class="hero-berita-section py-5 bg-light border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1 class="fw-bold display-4 mb-3 text-primary">Berita & Pengumuman</h1>
                    <h2 class="h5 text-muted mb-4">HKBP Sinambela Simanullang</h2>
                    <p class="lead text-secondary">"Mengabarkan kasih Tuhan lewat informasi dan kegiatan."</p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('images/itdel.jpeg') }}" alt="Ilustrasi Berita" class="img-fluid rounded-4 shadow-sm" style="max-height: 320px;">
                </div>
            </div>
        </div>
    </section>

    {{-- Berita Section --}}
    <section class="content-section py-5">
        <div class="container">
            <h2 class="mb-5 text-center fw-bold">Berita Terbaru</h2>
            @foreach ($beritas->sortByDesc('tanggal_publikasi') as $item)
            <div class="d-flex flex-column flex-md-row gap-3 mb-4 p-4 berita-box bg-white shadow-lg rounded-4">
                <div class="flex-shrink-0">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="img-fluid rounded-3" style="width: 220px; height: 140px; object-fit: cover;">
                </div>
                <div class="flex-grow-1">
                    <h5 class="fw-semibold">{{ $item->judul }}</h5>
                    <p class="mb-2">{{ Str::limit(strip_tags($item->deskripsi), 150) }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            Dipublikasikan pada {{ \Carbon\Carbon::parse($item->tanggal_publikasi)->translatedFormat('d F Y') }}
                        </small>
                        <a href="{{ route('detail', $item->id) }}" class="btn btn-outline-primary btn-sm">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    {{-- Footer --}}
    @include('footer')

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
