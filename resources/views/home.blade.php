<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>HKBP Sinambela Simanullang</title>
  <link rel="website icon" href="{{ asset('images/hkbplogo.png') }}" type="image/png">

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/home.css') }}" />

  <style>
    :root {
      --primary: #1e3a8a; /* Deep navy */
      --secondary: #d4a373; /* Soft gold */
      --accent: #f9f6f0; /* Ivory */
      --text-dark: #1f2937;
      --text-muted: #4b5563;
      --shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--accent);
      color: var(--text-dark);
      scroll-behavior: smooth;
    }

    /* Animations */
    .animate-on-scroll {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .animate-on-scroll.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .delay-1 { transition-delay: 0.2s; }
    .delay-2 { transition-delay: 0.4s; }
    .delay-3 { transition-delay: 0.6s; }

    /* Hero Section */
    .hero {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url('{{ asset("images/gereja.jpg") }}') center/cover no-repeat;
      min-height: 95vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
      color: #fff;
      position: relative;
    }

    .hero-content {
      max-width: 900px;
      text-align: center;
      z-index: 1;
    }

    .hero-title {
      font-family: 'Playfair Display', serif;
      font-size: 3.5rem;
      font-weight: 700;
      line-height: 1.2;
      margin-bottom: 1.5rem;
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
    }

    .hero-subtitle {
      font-family: 'Playfair Display', serif;
      font-size: 2.5rem;
      font-weight: 500;
      margin: 1rem 0;
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
    }

    .hero-description {
      font-size: 1.2rem;
      max-width: 700px;
      margin: 0 auto 2rem;
      line-height: 1.8;
      color: #f1f1f1;
    }

    .btn-primary {
      background-color: var(--secondary);
      border-color: var(--secondary);
      padding: 0.8rem 2.5rem;
      font-size: 1.1rem;
      border-radius: 50px;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #b38b59;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    /* Bible Verse Section */
    .bible-verse {
      background: linear-gradient(135deg, var(--accent), #e8ecef);
      padding: 5rem 0;
    }

    .verse-wrapper {
      max-width: 700px;
      margin: 0 auto;
    }

    .verse-decor-top,
    .verse-decor-bottom {
      transition: opacity 0.8s ease 0.2s;
    }

    .verse-quote {
      font-family: 'Playfair Display', serif;
      font-weight: 500;
      font-size: 2rem;
      line-height: 1.4;
      letter-spacing: 0.5px;
      color: var(--text-dark);
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .verse-reference {
      font-family: 'Poppins', sans-serif;
      font-size: 1.125rem;
      color: var(--text-muted);
      line-height: 1.5;
    }

    /* Schedule Section */
    .schedule-section {
      padding: 5rem 0;
      background-color: #fff;
    }

    .section-title {
      font-family: 'Playfair Display', serif;
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--primary);
      text-transform: uppercase;
      margin-bottom: 1.5rem;
    }

    .section-divider {
      width: 80px;
      height: 4px;
      background: var(--secondary);
      margin: 1.5rem auto;
      border-radius: 2px;
    }

    .section-subtitle {
      font-size: 1.1rem;
      color: var(--text-muted);
      max-width: 600px;
      margin: 0 auto;
      line-height: 1.6;
    }

    .table {
      background-color: #fff;
      border-radius: 12px;
      box-shadow: var(--shadow);
      overflow: hidden;
    }

    .table thead {
      background-color: var(--primary);
      color: #fff;
    }

    .table tbody tr:hover {
      background-color: #f1f5f9;
    }

    /* Service Section */
    .service-section {
      padding: 5rem 0;
      background: linear-gradient(135deg, #f8f9fa, var(--accent));
    }

    .service-card {
      background: #fff;
      border-radius: 15px;
      padding: 2.5rem;
      box-shadow: var(--shadow);
      transition: transform 0.3s ease;
    }

    .service-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    }

    .service-card-title {
      font-family: 'Playfair Display', serif;
      color: var(--primary);
      font-weight: 700;
      border-bottom: 2px solid #e8ecef;
      padding-bottom: 1rem;
    }

    .service-image {
      position: relative;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: var(--shadow);
    }

    .service-image img {
      transition: transform 0.6s ease;
    }

    .service-image:hover img {
      transform: scale(1.05);
    }

    .service-image-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      background: linear-gradient(to top, rgba(30, 58, 138, 0.8), transparent);
      padding: 2rem;
      color: #fff;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .service-image:hover .service-image-overlay {
      opacity: 1;
    }

    /* Community Section */
    .community-section {
      padding: 5rem 0;
      background: linear-gradient(135deg, var(--accent), #e8ecef);
    }

    .community-card {
      background: #fff;
      border-radius: 15px;
      padding: 2.5rem;
      box-shadow: var(--shadow);
      transition: transform 0.3s ease;
      height: 100%;
    }

    .community-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    }

    .community-card .bi {
      font-size: 2.5rem;
      color: var(--secondary);
      margin-bottom: 1.5rem;
      transition: transform 0.3s ease;
    }

    .community-card:hover .bi {
      transform: scale(1.1);
    }

    .community-card h3 {
      font-family: 'Playfair Display', serif;
      font-size: 1.5rem;
      font-weight: 600;
      color: var(--text-dark);
    }

    /* Testimony Section */
    .testimony-section {
      padding: 5rem 0;
      background-color: #fff;
    }

    .testimony-card {
      background: var(--accent);
      border-radius: 12px;
      padding: 2rem;
      box-shadow: var(--shadow);
      text-align: center;
      transition: transform 0.3s ease;
    }

    .testimony-card:hover {
      transform: translateY(-5px);
    }

    .testimony-card h5 {
      font-family: 'Playfair Display', serif;
      color: var(--text-dark);
    }

    /* Donation Section */
    .donation-section {
      padding: 5rem 0;
      background: linear-gradient(135deg, #f8f9fa, var(--accent));
    }

    /* Vision Section */
    .vision-section {
      padding: 5rem 0;
      background-color: #fff;
    }

    .vision-content {
      background: #fff;
      border-radius: 12px;
      padding: 2.5rem;
      box-shadow: var(--shadow);
    }

    .mission-item {
      font-size: 1.1rem;
      color: var(--text-muted);
      margin-bottom: 1.2rem;
      padding-left: 1.5rem;
      position: relative;
    }

    .mission-item:before {
      content: '•';
      position: absolute;
      left: 0;
      color: var(--secondary);
      font-size: 1.5rem;
    }

    .vision-image img {
      height: 400px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: var(--shadow);
    }

    /* Location Section */
    .location-section {
      padding: 5rem 0;
      background: linear-gradient(135deg, var(--accent), #e8ecef);
    }

    .location-section iframe {
      border-radius: 12px;
      box-shadow: var(--shadow);
      border: 3px solid #e8ecef;
    }

    /* Responsive */
    @media (max-width: 991.98px) {
      .hero-title { font-size: 2.8rem; }
      .hero-subtitle { font-size: 2rem; }
      .section-title { font-size: 2.2rem; }
      .service-card, .community-card, .vision-content { padding: 2rem; }
      .vision-image img { height: 350px; }
    }

    @media (max-width: 767.98px) {
      .hero { min-height: 80vh; padding: 1.5rem; }
      .hero-title { font-size: 2.2rem; }
      .hero-subtitle { font-size: 1.6rem; }
      .verse-quote { font-size: 1.5rem; }
      .section-title { font-size: 1.8rem; }
      .vision-image img { height: 250px; }
    }
  </style>
</head>
<body>
  <!-- Header -->
  @include('header')

  <!-- Hero Section -->
<section class="hero">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <h1 class="hero-title animate-on-scroll">
      Selamat Datang di <br><span>HKBP Sinambela Simanullang</span>
    </h1>
    <p class="hero-description animate-on-scroll delay-2">
      Bergabunglah dalam kasih dan ibadah bersama kami <br> untuk memuliakan Tuhan yang hidup.
    </p>
  </div>
</section>


  <!-- Bible Verse Section -->
  <section class="bible-verse">
    <div class="container text-center">
      <div class="verse-wrapper animate-on-scroll">
        <div class="verse-decor-top mb-4 animate-on-scroll delay-1">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--text-dark)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 2v20M2 12h20"/>
          </svg>
        </div>
        <p class="verse-quote mb-4 animate-on-scroll delay-2">
          Jala Dame Ni Kristus Ima<br>
          Mangarajai Di Bagasan<br>
          Roha Muna
        </p>
        <p class="verse-reference mt-4 animate-on-scroll delay-3">
          <em>"Biarlah damai sejahtera Kristus menguasai hati kalian."</em><br>
          <small>(Kolose 3:15, terjemahan bebas)</small>
        </p>
        <div class="verse-decor-bottom mt-4 animate-on-scroll delay-1">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--text-dark)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 2v20M2 12h20"/>
          </svg>
        </div>
      </div>
    </div>
  </section>

  <!-- Jadwal Ibadah Mingguan -->
 <section class="schedule-section py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title animate-on-scroll">Jadwal Ibadah Mingguan</h2>
      <div class="section-divider animate-on-scroll delay-1"></div>
      <p class="section-subtitle animate-on-scroll delay-2">Mari bersama-sama memuji dan menyembah Tuhan.</p>
    </div>

    <div class="row g-4 animate-on-scroll delay-3">
      <div class="col-md-6 col-lg-3">
        <div class="card ibadah-card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Minggu</h5>
            <p class="card-time">08:00 WIB</p>
            <p class="card-type">Ibadah Umum</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card ibadah-card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Minggu</h5>
            <p class="card-time">10:00 WIB</p>
            <p class="card-type">Sekolah Minggu</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card ibadah-card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Rabu</h5>
            <p class="card-time">19:00 WIB</p>
            <p class="card-type">Kebaktian Doa</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card ibadah-card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Jumat</h5>
            <p class="card-time">18:00 WIB</p>
            <p class="card-type">Ibadah Pemuda</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 🎉 Zona Informasi Harian (Ulang Tahun + Ayat Harian) -->
<div class="info-zone-genz">
  <!-- Ulang Tahun -->
  <div class="birthday-card-genz">
    <div class="birthday-card-header-genz">
      <i class="fas fa-birthday-cake text-yellow-300 text-lg animate-pulse"></i>
      <h3>Ulang Tahun Hari Ini</h3>
      <p>Selamat ulang tahun!</p>
    </div>
    <div class="birthday-card-body-genz">
      @forelse(App\Models\Jemaat::ulangTahunHariIni()->get() as $jemaat)
        <div class="birthday-user-genz">
          <div class="user-info">
            <p class="user-name">{{ $jemaat->nama }}</p>
            <p class="user-ttl">{{ \Carbon\Carbon::parse($jemaat->tanggal_lahir)->format('d M Y') }}</p>
          </div>
        </div>
      @empty
        <div class="no-birthday-message">Belum ada yang ulang tahun hari ini</div>
      @endforelse
    </div>
  </div>

  <!-- Ayat Harian -->
  <div class="birthday-card-genz">
    <div class="birthday-card-header-genz">
      <i class="fas fa-book-open text-yellow-300 text-lg animate-pulse"></i>
      <h3>Ayat Harian</h3>
      <p> Selamat menjalani hari dalam kasih Kristus! </p>
    </div>
    <div class="birthday-card-body-genz">
      @if($ayatHarian)
        <div class="birthday-user-genz">
          <div class="user-info">
            <p class="user-name">{{ $ayatHarian->judul }}</p>
            <p class="user-ttl">{{ $ayatHarian->deskripsi }}</p>
            <small><i>{{ \Carbon\Carbon::parse($ayatHarian->tanggal_publikasi)->translatedFormat('d F Y') }}</i></small>
          </div>
        </div>
      @else
        <div class="no-birthday-message">Belum ada Ayat Harian yang tersedia</div>
      @endif
    </div>
  </div>
</div>

  <!-- Layanan Section -->
  <section class="service-section" id="layanan">

  <div class="container-fluid">
    <div class="text-center mb-5">
      <h2 class="section-title animate-on-scroll">Layanan Ibadah</h2>
      <div class="section-divider animate-on-scroll delay-1"></div>
      <p class="section-subtitle animate-on-scroll delay-2">
        Kami mengundang Anda untuk bergabung dalam sukacita dan damai sejahtera di setiap ibadah mingguan kami.
      </p>
    </div>

    <div class="row align-items-center g-4">
      <!-- Ayat Harian -->

      <!-- Kanan: Gambar Ibadah -->
      <div class="col-lg-6">
        <div class="service-image animate-on-scroll delay-2">
          <img src="{{ asset('images/ibadah.jpg') }}" alt="Ibadah Jemaat" class="img-fluid w-100">
          <div class="service-image-overlay">
            <div class="service-image-content">
              <h4>Bergabunglah bersama kami</h4>
              <a href="/ayat" class="btn btn-primary btn-sm mt-3">Lihat Jadwal</a>

    <div class="container-fluid">
      <div class="text-center mb-5">
        <h2 class="section-title animate-on-scroll">Layanan Ibadah</h2>
        <div class="section-divider animate-on-scroll delay-1"></div>
        <p class="section-subtitle animate-on-scroll delay-2">Kami mengundang Anda untuk bergabung dalam sukacita dan damai sejahtera di setiap ibadah mingguan kami.</p>
      </div>
        <div class="col-lg-6">
          <div class="service-image animate-on-scroll delay-2">
            <img src="{{ asset('images/ibadah.jpg') }}" alt="Ibadah Jemaat" class="img-fluid w-100">
            <div class="service-image-overlay">
              <div class="service-image-content">
                <h4>Bergabunglah bersama kami</h4>
                <a href="/ayat" class="btn btn-primary btn-sm mt-3">Lihat Jadwal</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


  <!-- Our Community Section -->
  <section class="community-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title animate-on-scroll">Tentang Gereja Kami</h2>
        <div class="section-divider animate-on-scroll delay-1"></div>
        <p class="section-subtitle animate-on-scroll delay-2">A family united in faith, love, and service to God.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="community-card animate-on-scroll delay-1">
            <i class="bi bi-heart-fill"></i>
            <h3 class="mt-3">Kasih dalam Komunitas</h3>
            <p>Di HKBP Sinambela Simanullang, kami adalah keluarga yang saling mendukung dan mengasihi, berbagi sukacita dan duka dalam iman kepada Tuhan.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="community-card animate-on-scroll delay-2">
            <i class="bi bi-people-fill"></i>
            <h3 class="mt-3">Kebersamaan Jemaat</h3>
            <p>Kami membangun hubungan yang erat melalui ibadah, fellowship, dan kegiatan bersama, menciptakan komunitas yang hangat dan welcoming.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="community-card animate-on-scroll delay-3">
            <i class="bi bi-cross"></i>
            <h3 class="mt-3">Iman yang Hidup</h3>
            <p>Dengan Alkitab sebagai pedoman, kami bertumbuh dalam iman melalui pengajaran, doa, dan pelayanan yang memuliakan Tuhan.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimoni Jemaat -->
  <section class="testimony-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title animate-on-scroll">Apa Kata Jemaat</h2>
        <div class="section-divider animate-on-scroll delay-1"></div>
        <p class="section-subtitle animate-on-scroll delay-2">Cerita dari hati jemaat kami.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="testimony-card animate-on-scroll delay-1">
            <p>"Bergabung dengan HKBP Sinambela Simanullang membuat saya merasa diterima dan semakin dekat dengan Tuhan."</p>
            <h5 class="mt-3">Sari Simanullang</h5>
            <small>Jemaat Aktif</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimony-card animate-on-scroll delay-2">
            <p>"Ibadah di sini selalu membawa damai di hati. Pelayanan yang tulus dan penuh kasih."</p>
            <h5 class="mt-3">Johan Sinambela</h5>
            <small>Anggota Pemuda</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimony-card animate-on-scroll delay-3">
            <p>"Sekolah Minggu di sini sangat menyenangkan untuk anak-anak, mereka belajar tentang iman dengan gembira."</p>
            <h5 class="mt-3">Maria Lumbanbatu</h5>
            <small>Orang Tua Jemaat</small>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ajakan Donasi -->
  <section class="donation-section">
    <div class="container text-center">
      <h2 class="section-title animate-on-scroll">Dukung Pelayanan Kami</h2>
      <div class="section-divider animate-on-scroll delay-1"></div>
      <p class="section-subtitle animate-on-scroll delay-2">Bersama-sama, kita dapat menyebarkan kasih Tuhan melalui pelayanan dan misi gereja.</p>
      <a href="https://wa.me/+6285830058928?text=Halo,%20saya%20ingin%20mengetahui%20lebih%20lanjut%20tentang%20pelayanan%20HKBP%20Sinambela%20Simanullang"
         class="btn btn-primary animate-on-scroll delay-3"
         target="_blank">Hubungi Kami</a>
    </div>
  </section>

  <!-- Visi & Misi -->
  <section class="vision-section">
    <div class="container-fluid">
      <div class="text-center mb-5">
        <h2 class="section-title animate-on-scroll">Visi & Misi</h2>
        <div class="section-divider animate-on-scroll delay-1"></div>
        <p class="section-subtitle animate-on-scroll delay-2">HKBP Sinambela - Simanullang Bakkara</p>
      </div>
      <div class="row align-items-center g-5">
        <div class="col-md-6">
          <div class="vision-image animate-on-scroll delay-1">
            <img src="{{ asset('images/jemaat.jpeg') }}" alt="Visi Misi Gereja" class="img-fluid">
          </div>
        </div>
        <div class="col-md-6">
          <div class="vision-content p-4 animate-on-scroll delay-2">
            <h3 class="mb-4">Visi HKBP Sin - Sim</h3>
            <p class="fst-italic mb-5">"Menjadi gereja yang hidup dalam iman, kasih, dan pelayanan demi kemuliaan Tuhan"</p>
            <h4 class="mb-4">Misi HKBP Sin - Sim</h4>
            <div class="mt-4">
              <div class="mission-item animate-on-scroll delay-3">
                Memberitakan Injil Kristus kepada semua lapisan masyarakat dengan pelayanan yang tulus
              </div>
              <div class="mission-item animate-on-scroll delay-4">
                Meningkatkan pembinaan rohani melalui ibadah, pendidikan jemaat, dan pelayanan sakramen, katekisasi, komisi bapak, ibu dan anak
              </div>
              <div class="mission-item animate-on-scroll delay-5">
                Menjadi garam dan terang bagi lingkungan sekitar melalui pelayanan sosial, pendidikan, dan kepedulian terhadap sesama
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Lokasi -->
  <section class="location-section">
    <div class="container">
      <h2 class="text-center section-title animate-on-scroll">Lokasi Gereja</h2>
      <div class="section-divider animate-on-scroll delay-1"></div>
      <div class="ratio ratio-16x9 animate-on-scroll delay-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.512070773479!2d98.81977207496813!3d2.3214990976582306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e226455099785%3A0xce46d89250ac32d0!2sHKBP%20Sinambela!5e1!3m2!1sid!2sid!4v1745199322586!5m2!1sid!2sid"
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

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
          }
        });
      }, { threshold: 0.2 });

      document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
      });
    });
  </script>
</body>
</html>
