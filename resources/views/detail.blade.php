<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->judul }} - Berita Gereja</title>
    <link rel="icon" href="{{ asset('images/hkbplogo.png') }}" type="image/png">

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
</head>
<body>

    <!-- Detail Berita Section -->
    <section class="detail-berita-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Title -->
                    <h1>{{ $berita->judul }}</h1>

                    <!-- Image -->
                    <img src="{{ asset('images/berita/' . $berita->gambar) }}" alt="{{ $berita->judul }}">

                    <!-- Description -->
                    <div class="content-description">
                        {!! nl2br(e($berita->deskripsi)) !!}
                    </div>

                    <!-- Published Date -->
                    <p class="text-muted">
                        Dipublikasikan pada {{ \Carbon\Carbon::parse($berita->tanggal_publikasi)->translatedFormat('d F Y') }}
                    </p>

                    <!-- Back Button -->
                    <a href="{{ route('berita.user') }}" class="back-button">
                        <i class="bi bi-arrow-left-circle"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
