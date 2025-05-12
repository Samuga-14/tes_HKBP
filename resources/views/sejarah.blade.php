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
    <section class="hero-sejarah">
        <div class="hero-container">
            <div class="hero-image">
                <img src="{{ asset('images/nomensen.jpg') }}" alt="Ingwer Ludwig Nommensen" class="img-fluid oval-frame">
            </div>
            <div class="hero-text">
                <p class="lead">SEJARAH</p>
                <h1 class="display-5 fw-bold">HKBP Sin - Sim</h1>
                <p class="hero-description">
                    Sekitar pertengahan abad ke-19, gereja-gereja mulai didirikan di sekitar Danau Toba, dan salah satu jemaat yang tumbuh dari proses ini adalah HKBP Bakkara. Jemaat ini menjadi simbol keberhasilan penyebaran agama Kristen Protestan di wilayah yang dulunya sangat kuat memegang adat Batak.
                </p>
            </div>
        </div>
    </section>


    {{-- Section Judul --}}
    <section class="section-title">
        Sejarah Gereja HKBP Sinambela Simanullang
    </section>

    {{-- Konten Sejarah --}}
    <section class="content-section">
        <div class="container">
            <p class="mb-5 text-center">Berikut adalah beberapa poin sejarah dari HKBP Sinambela yang bisa Anda ketahui:</p>

            <div class="content-block">
                <h4>Sejarah HKBP Bakkara</h4>
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <img src="{{ asset('images/nomensen.jpg') }}" alt="Ingwer Ludwig Nommensen" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <p>
                            HKBP (Huria Kristen Batak Protestan) Bakkara adalah salah satu jemaat yang berada di bawah naungan HKBP pusat. Pusatnya di Pearaja, Tarutung, Sumatera Utara. Sejarah HKBP tidak bisa dilepaskan dari peran penting misionaris Jerman, yaitu Ingwer Ludwig Nommensen, yang datang ke tanah Batak pada tahun 1860-an. Melalui pelayanannya, banyak masyarakat Batak mengenal ajaran Kristen dan menjadi pengikut Kristus.
                        </p>
                    </div>
                </div>
            </div>

            <div class="content-block">
                <h4>Sejarah Bangunan Gereja</h4>
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="{{ asset('images/hkbp1.jpg') }}" alt="Bangunan Lama HKBP" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <p>
                            Menyusul kekristenan ke wilayah Bakkara (dan sekitarnya) dari misi penginjilan, masyarakat mulai membangun tempat ibadah secara sederhana. Bangunan gereja awal dibuat dari bahan seadanya seperti kayu dan ilalang. Seiring perkembangan zaman, gereja pun dibangun kembali dengan arsitektur lebih kokoh dan permanen, hingga menjadi seperti yang ada saat ini.
                        </p>
                    </div>
                </div>
            </div>

            <div class="content-block">
                <h4>Berdirinya Bangunan Gereja</h4>
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="{{ asset('images/gambar12.jpg') }}" alt="Bangunan Gereja Baru" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <p>
                            HKBP Bakkara (dan wilayah Sinambela Simanullang) secara resmi memiliki gedung HKBP sejak bertahun-tahun lalu dengan peresmian yang dilakukan oleh pimpinan jemaat setempat. Sejak saat itu, gereja ini aktif melayani jemaat melalui berbagai kegiatan ibadah, pelayanan sosial, pembinaan remaja dan pemuda, serta mendukung pendidikan anak-anak.
                        </p>
                    </div>
                </div>
            </div>

            <div class="content-block">
                <h4>Peran HKBP Sinambela - Simanullang</h4>
                <p>
                    HKBP Bakkara dan turunannya berfungsi sebagai tempat ibadah, tetapi juga sebagai pusat kegiatan sosial dan budaya bagi masyarakat Kristen Batak di sekitarnya. Gereja ini berperan aktif dalam:
                    <ul>
                        <li>Pendidikan Agama Kristen sejak usia dini</li>
                        <li>Pelestarian budaya Batak melalui kegiatan seni dan budaya</li>
                        <li>Pembinaan moral generasi muda</li>
                    </ul>
                </p>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
