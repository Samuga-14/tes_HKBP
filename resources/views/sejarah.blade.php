<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah Gereja - HKBP Sinambela Simanullang</title>
    <link rel="  website icon" href="{{ asset('images/hkbplogo.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&display=swap" rel="stylesheet">

    <!-- Link ke file CSS external -->
    <link href="{{ asset('css/sejarah.css') }}" rel="stylesheet">
</head>
<body>

    {{-- Header --}}
    @include('header')

    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="hero-wrapper">
            <div class="hero-img">
                <img src="{{ asset('images/nomensen.jpg') }}" alt="Ingwer Ludwig Nommensen" class="oval-image">
            </div>
            <div class="hero-content">
                <p class="hero-tagline">Sejarah</p>
                <h1 class="hero-title">HKBP Sin - Sim</h1>
                <p class="hero-desc">
                    Sekitar pertengahan abad ke-19, gereja-gereja mulai didirikan di sekitar Danau Toba, dan salah satu jemaat yang tumbuh dari proses ini adalah HKBP Bakkara. Jemaat ini menjadi simbol keberhasilan penyebaran agama Kristen Protestan di wilayah yang dulunya sangat kuat memegang adat Batak.
                </p>
            </div>
        </div>
    </section>


    {{-- Konten Sejarah Interaktif --}}
    <section class="interactive-history">

        <div class="container py-5">
        <div class="judul-wrapper">
            <h2 class="text-center fw-bold mb-4">Sejarah Gereja HKBP Sinambela Simanullang</h2>
        </div>
        </div>


        {{-- Blok Sejarah 1 --}}
        <div class="history-block bg-white-blue">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-md-6 order-md-1 mb-3 mb-md-0">
                        <img src="{{ asset('images/nomensen.jpg') }}" class="img-fluid rounded-4 shadow" alt="Nommensen">
                    </div>
                    <div class="col-md-6 order-md-2">
                        <h4 class="fw-semibold mb-3">Misi Nommensen ke Tanah Batak</h4>
                        <p>
                            HKBP Bakkara adalah bagian dari sejarah besar penyebaran Injil di Tanah Batak.
                            Dimulai dari kedatangan misionaris asal Jerman, Ingwer Ludwig Nommensen, pada pertengahan abad ke-19, ajaran Kristen mulai diterima oleh masyarakat Batak.
                        </p>
                        <p>
                            Dengan pendekatan budaya dan pendidikan, Nommensen berhasil mendirikan jemaat-jemaat baru, termasuk di Bakkara dan Sinambela. Ini menjadi fondasi gereja HKBP yang kita kenal saat ini.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Blok Sejarah 2 --}}
        <div class="history-block bg-blue-white">
            <div class="container py-5">
                <div class="row align-items-center flex-md-row-reverse">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <img src="{{ asset('images/hkbp1.jpg') }}" class="img-fluid rounded-4 shadow" alt="Bangunan Awal">
                    </div>
                    <div class="col-md-6">
                        <h4 class="fw-semibold mb-3">Bangunan Gereja Pertama</h4>
                        <p>
                            Gereja pertama dibangun dengan bahan sederhana seperti kayu dan ilalang, menggambarkan semangat awal masyarakat untuk memiliki tempat ibadah sendiri.
                        </p>
                        <p>
                            Seiring berjalannya waktu, bangunan tersebut direnovasi menjadi gereja permanen yang lebih kokoh dan megah, mencerminkan pertumbuhan iman dan komunitas jemaat.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Blok Sejarah 3 (Kosong – Untuk konten tambahan) --}}
        <div class="history-block bg-white-blue">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-md-6 order-md-1 mb-3 mb-md-0">
                        <img src="{{ asset('images/gambar12.jpg') }}" class="img-fluid rounded-4 shadow" alt="Gereja Baru">
                    </div>
                    <div class="col-md-6 order-md-2">
                        <h4 class="fw-semibold mb-3">[Judul Konten Tambahan]</h4>
                        <p>[Paragraf pertama konten tambahan akan diletakkan di sini.]</p>
                        <p>[Paragraf kedua konten tambahan akan diletakkan di sini.]</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tambahkan blok lagi sesuai kebutuhan di sini... --}}
        
    </section>


    {{-- Footer --}}
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>