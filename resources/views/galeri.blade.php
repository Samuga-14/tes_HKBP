{{-- Galeri.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kegiatan</title>
    <link rel="website icon" href="{{ asset('images/hkbplogo.png') }}" type="image/png">

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
  <section class="hero-section">
  <div class="radial-lines"></div>
  <div class="hero-text">
    <p class="subtitle fade-up fade-up-delay-1">GALERI KEGIATAN</p>
    <h1 class="fade-up fade-up-delay-2">HKBP SINAMBELA - SIMANULLANG</h1>
    <p class="tagline fade-up fade-up-delay-3">Galeri kegiatan - kegiatan yang dilaksanakan oleh jemaat gereja HKBP Sinambela - Simanullang</p>
  </div>
</section>

    {{-- Judul Section --}}
    <section class="section-title text-center mt-5 mb-4 fade-up fade-up-delay-4">
        Dokumentasi Kegiatan Terbaru
    </section>

    {{-- Galeri Section --}}
    <section class="content-section py-5 fade-up fade-up-delay-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($galeri as $index => $item)
                <div class="col fade-up fade-up-delay-{{ ($index % 6) + 1 }}">
                    <div class="galeri-card p-3 shadow-sm rounded-4 bg-white h-100 d-flex flex-column">
                        <div class="galeri-img-wrapper mb-3">
                            <img src="{{ asset('images/galeri/' . $item->gambar) }}" alt="{{ $item->judul }}" class="img-fluid rounded-3">
                        </div>
                        <div class="galeri-text flex-grow-1">
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{ asset('images/hkbplogo.png') }}" alt="Logo HKBP" class="logo-galeri-mini me-2">
                                <span class="text-muted small">HKBP SINAMBELA SIMANULLANG</span>
                            </div>
                            <h5 class="judul-galeri">{{ $item->judul }}</h5>
                            <p class="deskripsi-galeri">{{ Str::limit(strip_tags($item->deskripsi), 100) }}</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted">
                                {{ \Carbon\Carbon::parse($item->tanggal_publikasi)->translatedFormat('d F Y') }}
                            </small>
                            @if ($item->link_google_foto)
                            <a href="{{ $item->link_google_foto }}" class="btn-google-foto mt-2" target="_blank">
                                <i class="bi bi-box-arrow-up-right"></i> Lihat Foto
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> 
    </section>

    {{-- Footer --}}
    @include('footer')

</body>
</html>
