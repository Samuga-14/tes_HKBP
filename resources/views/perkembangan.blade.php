<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkembangan Bangunan Gereja - HKBP Sinambela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #d6e6f2;
            margin: 0;
        }

        .hero-perkembangan {
            background-image: url('{{ asset('images/gambar12.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 60vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero-perkembangan::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-text {
            position: relative;
            z-index: 2;
        }

        .section-title {
            background-color: #1e88e5;
            color: white;
            text-align: center;
            padding: 1rem;
            font-weight: bold;
        }

        .progress-section {
            background-color: #fff;
            padding: 2rem 1rem;
        }

        .progress-card {
            background-color: white;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .progress-card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .progress-icon {
            color: #1e88e5;
            font-size: 1.5rem;
            margin-right: 0.5rem;
        }

        .divider {
            height: 4px;
            background-color: #1e88e5;
            width: 100px;
            margin: 2rem auto;
        }

        .footer-note {
            text-align: right;
            font-size: 0.9rem;
            color: #777;
        }
    </style>
</head>
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
