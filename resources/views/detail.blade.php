<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->judul }} - Berita Gereja</title>

    {{-- Bootstrap & Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
</head>
<body>

    {{-- Detail Berita Section --}}
    <section class="detail-berita-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <!-- Title and Date -->
                    <h1 class="fw-bold display-4 mb-4 text-primary">{{ $berita->judul }}</h1>

                    <!-- Image -->
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="img-fluid rounded-4 mb-4 shadow-lg">

                    <!-- Description -->
                    <div class="content-description">
                        <p>{{ $berita->deskripsi }}</p>
                    </div>
                    <p class="text-muted mb-3">
                        Dipublikasikan pada {{ \Carbon\Carbon::parse($berita->tanggal_publikasi)->translatedFormat('d F Y') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
