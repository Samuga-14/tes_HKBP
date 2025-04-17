<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Laporan Kegiatan - HKBP Sinambela</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/laporan.css') }}" />
</head>
<body>

  {{-- Header --}}
  @include('header')

  {{-- Hero Section --}}
  <section class="hero-perkembangan">
    <div class="hero-text container">
      <h1>Laporan Kegiatan Gereja</h1>
      <p class="lead">Informasi dan dokumentasi kegiatan terkini di HKBP Sinambela</p>
    </div>
  </section>

  {{-- Section Title --}}
  <div class="section-title text-center py-4">
    <h2 class="fw-bold">Laporan Kegiatan</h2>
  </div>

  {{-- Content --}}
  <section class="progress-section container">
    <div class="row g-4">

      <div class="col-md-6">
        <div class="progress-card">
          <img src="{{ asset('images/kegiatan1.jpg') }}" alt="Kegiatan 1">
          <div class="progress-content">
            <h5><i class="bi bi-calendar-event"></i> Perayaan Paskah 2025</h5>
            <p>Perayaan Paskah tahun ini berlangsung meriah dan penuh sukacita. Jemaat turut berpartisipasi dalam ibadah, perlombaan, dan acara kebersamaan.</p>
            <p class="footer-note">Dilaksanakan pada 31 Maret 2025</p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="progress-card">
          <img src="{{ asset('images/kegiatan2.jpg') }}" alt="Kegiatan 2">
          <div class="progress-content">
            <h5><i class="bi bi-people-fill"></i> Pelayanan Sosial</h5>
            <p>Jemaat melakukan kunjungan kasih ke panti jompo dan berbagi sembako kepada masyarakat sekitar sebagai wujud nyata kasih Kristus.</p>
            <p class="footer-note">Dilaksanakan pada 10 Februari 2025</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  {{-- Footer --}}
  @include('footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
