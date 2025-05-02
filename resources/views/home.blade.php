<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>HKBP Sinambela Simanullang</title>
  <link rel="  website icon" href="{{ asset('images/hkbplogo.png') }}" type="image/png">


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
          <h1 class="hero-title">SELAMAT DATANG DI HKBP<br>SINAMBELA SIMANULLANG</h1>
          <p class="hero-subtitle">Jahowa Do Si Parmahan Au</p>
        </div>
  </section>
  <section class="section-title">
  </section>
  <!-- Bible Verse Section -->
  <section class="bible-verse py-4">
      <div class="container text-center">
          <p class="fs-1" style="color: black; font-size: 2.5rem !important;">
              <strong>J</strong>ALA
              <strong>D</strong>AME
              <strong>N</strong>I
              <strong>K</strong>RISTUS
              <strong>I</strong>
              <strong>M</strong>A<br>
              <strong>M</strong>ANGARAJAI
              <strong>D</strong>I
              <strong>B</strong>AGASAN<br>
              <strong>R</strong>OHA
              <strong>M</strong>UNA
          </p>
      </div>
  </section>  <!-- Layanan Section -->
<section class="service-section py-6" id="layanan">
    <div class="container-fluid">
      <div class="section-header text-center mb-5">
        <h2 class="section-title fw-bold">Layanan Ibadah</h2>
        <div class="section-divider mx-auto"></div>
        <p class="section-subtitle mt-3">Melayani dengan penuh kasih dan kerendahan hati</p>
      </div>

      <div class="row align-items-center g-4">
        <div class="col-lg-6">
          <div class="service-card">
            <h3 class="service-card-title h4 mb-4">Gereja Melayani</h3>
            <ul class="service-list">
              <li class="service-item">
                <span class="service-icon">
                  <i class="bi bi-calendar-check"></i>
                </span>
                <span>Ibadah Minggu</span>
              </li>
              <li class="service-item">
                <span class="service-icon">
                  <i class="bi bi-people"></i>
                </span>
                <span>Ibadah Tamu</span>
              </li>
              <li class="service-item">
                <span class="service-icon">
                  <i class="bi bi-water"></i>
                </span>
                <span>Baptisan Kudus</span>
              </li>
              <li class="service-item">
                <span class="service-icon">
                  <i class="bi bi-cup-hot"></i>
                </span>
                <span>Perjamuan Kudus</span>
              </li>
              <li class="service-item">
                <span class="service-icon">
                  <i class="bi bi-heart"></i>
                </span>
                <span>Permintaan Doa</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="service-image">
            <img src="{{ asset('images/ibadah.jpg') }}" alt="Ibadah Jemaat" class="img-fluid w-100">
            <div class="service-image-overlay">
              <div class="service-image-content">
                <h4>Bergabunglah bersama kami</h4>
                <a href="/ayat" class="btn btn-light btn-sm mt-3">Lihat Jadwal</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Visi & Misi -->
  <section class="py-5 text-center bg-white">
    <div class="container">
    <h2 class="fw-bold mb-4" style="color: #002147;">VISI</h2>
    <p class="fs-5 mx-auto" style="max-width: 750px;">Menjadi gereja yang hidup dalam iman, kasih, dan pelayanan demi kemuliaan Tuhan.</p>
    <h2 class="fw-bold mt-5 mb-4" style="color: #002147;">MISI</h2>
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
    <h2 class="text-center fw-bold mb-4" style="color: #002147;">Lokasi Gereja HKBP Sinambela Simanullang</h2>
    <div class="ratio ratio-16x9 shadow rounded">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.512070773479!2d98.81977207496813!3d2.3214990976582306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e226455099785%3A0xce46d89250ac32d0!2sHKBP%20Sinambela!5e1!3m2!1sid!2sid!4v1745199322586!5m2!1sid!2sid"
        width="300"
        height="150"
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
