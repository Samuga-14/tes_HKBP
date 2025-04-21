<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>HKBP Sinambela Simanullang</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
</head>
<body>

  <!-- Header -->
  @include('header')

  <!-- Hero Section -->
  <section class="hero">
        <div class="hero-content">
          <h1 class="hero-title">Selamat Datang di HKBP<br>Sinambela Simanullang</h1>
          <p class="hero-subtitle">Jahowa Do Si Parmahan Au</p>
        </div>
  </section>
  <section class="section-title">
</section>

  <!-- Divider -->
  <div class="container my-5">
    <hr class="my-4" />
  </div>

  <!-- Layanan Section -->
  <section class="py-5 bg-light" id="layanan">
    <div class="container">
      <h2 class="text-center mb-5 fw-bold text-primary">Layanan Ibadah</h2>
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <ul class="list-group shadow">
            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Ibadah Minggu</li>
            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Ibadah Tamu</li>
            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Baptisan Kudus</li>
            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Perjamuan Kudus</li>
            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Permintaan Doa</li>
          </ul>
        </div>
        <div class="col-md-6">
          <img src="{{ asset('images/ibadah.jpg') }}" alt="Ibadah Jemaat" class="img-fluid rounded shadow image-hover" />
        </div>
      </div>
    </div>
  </section>

  <!-- Visi & Misi -->
  <section class="py-5 text-center bg-white">
    <div class="container">
      <h2 class="fw-bold text-primary mb-4">VISI</h2>
      <p class="fs-5 mx-auto" style="max-width: 750px;">Menjadi gereja yang hidup dalam iman, kasih, dan pelayanan demi kemuliaan Tuhan.</p>
      <h2 class="fw-bold text-primary mt-5 mb-4">MISI</h2>
      <p class="fs-5 mx-auto" style="max-width: 750px;">Menghidupi ajaran Kristus dalam kehidupan sehari-hari melalui ibadah, penginjilan, dan pelayanan sosial yang membangun komunitas yang berlandaskan kasih.</p>
    </div>
  </section>

  <!-- Divider -->
  <div class="container my-5">
    <hr class="my-4" />
  </div>

  <!-- Lokasi -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center fw-bold mb-4 text-primary">Lokasi Gereja HKBP Sinambela Simanullang</h2>
      <div class="ratio ratio-16x9 shadow rounded">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.512070773479!2d98.81977207496813!3d2.3214990976582306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e226455099785%3A0xce46d89250ac32d0!2sHKBP%20Sinambela!5e1!3m2!1sid!2sid!4v1745199322586!5m2!1sid!2sid"
        width="600"
        height="450"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </section>

  <!-- Footer -->
  @include('footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
