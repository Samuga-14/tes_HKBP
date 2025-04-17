<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKBP Sinambela Simanullang</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

    <!-- Header -->
    @include('header')

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content text-center py-5">
            <h1 class="display-4 fw-bold text-shadow">Selamat Datang di HKBP Sinambela Simanullang</h1>
            <p class="lead">Jahowa do siparmahan au</p>
        </div>
    </section>

    <!-- Layanan Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold">Layanan Ibadah HKBP Sinambela Simanullang</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow-sm mb-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Ibadah Minggu</li>
                            <li class="list-group-item">Ibadah Tamu</li>
                            <li class="list-group-item">Baptisan Kudus</li>
                            <li class="list-group-item">Perjamuan Kudus</li>
                            <li class="list-group-item">Permintaan Doa</li>
                            <li class="list-group-item">Baptisan Kudus</li>
                            <li class="list-group-item">Perjamuan Kudus</li>
                            <li class="list-group-item">Permintaan Doa</li>
                            <li class="list-group-item">Permintaan Doa</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-container">
                        <img src="{{ asset('images/ibadah.jpg') }}" alt="Foto Ibadah" class="img-fluid rounded shadow-sm image-hover">
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi & Misi Section -->
    <section class="py-5 text-center bg-gradient">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card p-4 shadow-lg">
                        <h3 class="fw-bold">VISI</h3>
                        <p class="fs-5">Menjadi gereja yang hidup dalam iman, kasih, dan pelayanan demi kemuliaan Tuhan.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card p-4 shadow-lg">
                        <h3 class="fw-bold">MISI</h3>
                        <p class="fs-5">Menjadi gereja yang hidup dalam iman, kasih, dan pelayanan demi kemuliaan Tuhan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Peta Lokasi Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Lokasi HKBP Sinambela Simanullang</h2>
            <div class="ratio ratio-16x9 shadow-lg rounded">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.5437412669776!2d98.81977207496813!3d2.3214990976582306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e226455099785%3A0xce46d89250ac32d0!2sHKBP%20Sinambela!5e0!3m2!1sen!2sid!4v1744900700622!5m2!1sen!2sid"
                style="border: 0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
