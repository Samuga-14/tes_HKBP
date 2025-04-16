<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkembangan Bangunan Gereja - HKBP Sinambela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<body>

    {{-- Header --}}
    @include('header')

    {{-- Hero Section --}}
    <section class="hero-perkembangan">
        <div class="hero-text">
            <h1 class="display-6 fw-bold">SELAMAT DATANG DI HKBP SINAMBELA SIMANULLANG</h1>
        </div>
    </section>

    {{-- Section Title --}}
    <div class="section-title">
        Perkembangan Bangunan Gereja
    </div>

    {{-- Content Section --}}
    <section class="progress-section">
        <div class="container">

            {{-- Renovasi Altar --}}
            <div class="progress-card">
                <h5><i class="bi bi-person-wheelchair progress-icon"></i> Renovasi Altar</h5>
                <img src="{{ asset('images/altar.jpg') }}" alt="Renovasi Altar">
                <p>
                    “Puji syukur kepada Tuhan, altar gereja yang telah direnovasi ini berdiri sebagai hasil doa, kerja sama, biaya, dan dukungan seluruh jemaat HKBP Sinambela - Simanullang.”
                </p>
                <p class="footer-note">Selesai pada 25 Agustus 2025</p>
            </div>

            <div class="divider"></div>

            {{-- Renovasi dalam gereja --}}
            <div class="progress-card">
                <h5><i class="bi bi-person-wheelchair progress-icon"></i> Renovasi dalam gereja</h5>
                <img src="{{ asset('images/dalam_gereja.jpg') }}" alt="Renovasi Dalam Gereja">
                <p>
                    “Interior gereja kini tampil lebih terang dan nyaman untuk beribadah berkat pencahayaan baru, renovasi langit-langit, serta perbaikan akustik ruangan.”
                </p>
                <p class="footer-note">Diselesaikan pada 12 Januari 2025</p>
            </div>

        </div>
    </section>

    {{-- Footer --}}
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
