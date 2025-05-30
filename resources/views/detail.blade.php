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

    <!-- Header Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="/">
                <img src="{{ asset('images/hkbplogo.png') }}" alt="Logo HKBP" width="40" height="40">
                <div class="d-flex flex-column">
                    <span style="font-size: 1.2rem;">HKBP</span>
                    <span style="font-size: 1rem;">SINAMBELA-SIMANULLANG</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('sejarah') ? 'active' : '' }}" href="/sejarah">Sejarah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('berita.user') ? 'active' : '' }}" href="{{ route('berita.user') }}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('galeri.user') ? 'active' : '' }}" href="{{ route('galeri.user') }}">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('warta.user') ? 'active' : '' }}" href="{{ route('warta.user') }}">Warta Jemaat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pengurus.user') ? 'active' : '' }}" href="{{ route('pengurus.user') }}">Struktur Kepengurusan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Spacer for fixed-top navbar -->
    <div style="padding-top: 70px;"> <!-- Adjust height to match your navbar's height -->
      <!-- Detail Berita Section -->
      <section class="detail-berita-section">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-10">
                      <!-- Title -->
                      <h1 class="mb-4">{{ $berita->judul }}</h1>

                      <!-- Image -->
                      <div class="mb-4">
                          <img src="{{ asset('images/berita/' . $berita->gambar) }}"
                               alt="{{ $berita->judul }}"
                               class="img-fluid">
                      </div>

                      <!-- Description -->
                      <div class="content-description mb-4">
                          {!! nl2br(e($berita->deskripsi)) !!}
                      </div>

                      <!-- Published Date -->
                      <p class="text-muted mb-4">
                          Dipublikasikan pada {{ \Carbon\Carbon::parse($berita->tanggal_publikasi)->translatedFormat('d F Y') }}
                      </p>
                      <p class="text-muted mb-4">
                          Dikelola oleh pihak HKBP Sinambela - Simanullnag
                      </p>

                      <!-- Back Button -->
                      <div class="mb-5">
                          <a href="{{ route('berita.user') }}" class="back-button">
                              <i class="bi bi-arrow-left-circle"></i> Kembali
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
    </div>


    <!-- Footer Section -->
    <footer>
      <div class="container">
        <div class="row text-center text-md-start">

          <!-- Social Media and Contact Info -->
          <div class="col-md-3 mb-3">
            <div class="footer-icon">
              <a href="https://wa.me/6285830058928" target="_blank"><i class="bi bi-whatsapp"></i></a>
              <a href="https://www.youtube.com/@baktirajachannel1" target="_blank"><i class="bi bi-youtube"></i></a>
              <a href="https://www.instagram.com/joseppsilaen_" target="_blank"><i class="bi bi-instagram"></i></a>
              <a href="https://www.facebook.com/groups/HKBP SINAMBELA SIMANULLANG RESORT BAKARA" target="_blank"><i class="bi bi-facebook"></i></a>
            </div>
            <div class="contact-text">
              <p class="mb-0">hkbpsinsim@gmail.com</p>
            </div>
          </div>

          <!-- Services Section -->
          <div class="col-md-2 mb-3">
            <h5>LAYANAN</h5>
            <ul class="list-unstyled">
              <li>Ibadah Minggu</li>
              <li>Ibadah Tamu</li>
              <li>Babtisan Kudus</li>
              <li>Perjamuan</li>
              <li>Permintaan Doa</li>
            </ul>
          </div>

          <!-- Vision Section -->
          <div class="col-md-2 mb-3">
            <h5>VISI GEREJA</h5>
            <ul class="list-unstyled">
              <li>Menjadi Gereja yang</li>
              <li>hidup dalam iman,</li>
              <li>kasih, dan</li>
              <li>pelayanan demi</li>
              <li>kemuliaan Tuhan</li>
            </ul>
          </div>

          <!-- Church Assets Section -->
          <div class="col-md-2 mb-3">
            <h5>ASET GEREJA</h5>
            <ul class="list-unstyled">
              <li>Rumah Dinas</li>
              <li>Motor Pendeta</li>
              <li>Lahan Pertanian</li>
            </ul>
          </div>

          <!-- Created By Section -->
          <div class="col-md-3 mb-3 text-center">
            <img src="{{ asset('images/itdel.jpeg') }}" alt="Logo Del" />
            <img src="{{ asset('images/hkbplogo.png') }}" alt="Logo HKBP" />
            <p class="fw-semibold mb-0 text-white">Tim Pengembang</p>
          </div>
        </div>
        <hr class="footer-hr" /> <!-- Added class to the hr -->
        <p class="text-center mt-2 mb-0">COPYRIGHT © 2025 HKBP SINAMBELA SIMANULLANG</p>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>