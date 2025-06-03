{{-- Berita.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Berita & Pengumuman</title>
    <link rel="icon" href="{{ asset('images/hkbplogo.png') }}" type="image/png" />

    {{-- Bootstrap & Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/berita.css') }}" />
</head>
<body>

    {{-- Header --}}
    @include('header')

    {{-- Hero Section --}}
  <section class="hero-section">
  <div class="radial-lines"></div>
  <div class="hero-text">
    <p class="subtitle fade-up fade-up-delay-1 ">Berita & Pengumuman</p>
    <h1 class="fade-up fade-up-delay-2">HKBP SINAMBELA -SIMANULLANG</h1>
    <p class="tagline fade-up fade-up-delay-3">Berita dan pengumuman terbaru seputar kegiatan di Gereja HKBP Sinambela - Simanullang</p>
  </div>
</section>

    {{-- Berita Section --}}
    <section class="content-section py-5 fade-up fade-up-delay-4">
        <div class="container">
            <h2 class="mb-5 text-center fw-semibold fade-up fade-up-delay-5">Berita Terbaru</h2>

            @forelse ($beritas as $index => $item)
                <div class="d-flex flex-column flex-md-row gap-3 mb-4 p-4 berita-box bg-white shadow-lg rounded-4 fade-up fade-up-delay-{{ ($index % 6) + 1 }}">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('images/berita/' . $item->gambar) }}"
                             alt="{{ $item->judul }}"
                             class="img-fluid rounded-3"
                             style="width:220px;height:140px;object-fit:cover;" />
                    </div>

                    <div class="flex-grow-1">
                        <h5 class="fw-semibold">{{ $item->judul }}</h5>
                        <p class="mb-2">{{ Str::limit(strip_tags($item->deskripsi), 150) }}</p>

                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                Dipublikasikan pada
                                {{ \Carbon\Carbon::parse($item->tanggal_publikasi)->translatedFormat('d F Y') }}
                            </small>
                            <a href="{{ route('detail', $item->id) }}"
                               class="btn btn-outline-primary btn-sm">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">Belum ada berita.</p>
            @endforelse
        </div>
    </section>

    {{-- Footer --}}
    @include('footer')

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
