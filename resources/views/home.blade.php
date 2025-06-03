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

  {{-- SEMUA STYLE DARI SINI SUDAH DIPINDAHKAN KE home.css --}}

</head>
<body>
  <!-- Header -->
  @include('header')

  <!-- Hero Section -->
  <section class="hero">
    {{-- <div class="hero-overlay"></div> --> HAPUS INI, GRADIENT SUDAH DI CSS .hero --}}
    <div class="hero-content">
      <h1 class="hero-title animate-on-scroll">
        Selamat Datang di <br><span>HKBP Sinambela Simanullang</span>
      </h1>
      <p class="hero-description animate-on-scroll delay-2">
        Bergabunglah dalam kasih dan ibadah bersama kami <br> untuk memuliakan Tuhan yang hidup.
      </p>
      {{-- Jika ingin ada tombol di hero, bisa ditambahkan lagi
      <a href="#layanan" class="btn btn-primary animate-on-scroll delay-3">Jelajahi Lebih Lanjut</a>
      --}}
    </div>
  </section>

  <!-- Zona Informasi Harian (Ulang Tahun + Ayat Harian) -->
  <section class="info-zone-container-v2 py-4 animate-on-scroll">
    <div class="container">
        <div class="info-zone-layout">
            <!-- Ulang Tahun -->
            <div class="info-card-natural animate-on-scroll delay-1">
                <div class="info-card-icon">
                    <i class="bi bi-calendar-heart"></i> {{-- Ganti icon --}}
                </div>
                <div class="info-card-content-wrapper">
                    <h4>Ulang Tahun Hari Ini ({{ now()->format('d/m/Y') }})</h4>
                    @php
                        $jemaatUlangTahun = App\Models\Jemaat::ulangTahunHariIni()->limit(3)->get();
                    @endphp
                     @if($jemaatUlangTahun->count() > 0)
                        <p class="item-detail-natural fw-bold">Selamat ulang tahun, Tuhan Yesus memberkati!</p>
                        @if(App\Models\Jemaat::ulangTahunHariIni()->count() > 10)
                            <p class="item-detail-natural"><em>Dan beberapa lainnya...</em></p>
                        @endif
                    @endif
                    @forelse($jemaatUlangTahun as $jemaat)
                        <div class="info-list-item-natural">
                            <p class="item-title-natural">{{ $jemaat->nama }}({{ \Carbon\Carbon::parse($jemaat->tanggal_lahir)->format('d M Y') }})</p>
                        </div>
                    @empty
                        <p class="no-info-message-natural">Tidak ada yang berulang tahun hari ini.</p>
                    @endforelse
                   
                </div>
            </div>
            <!-- Ayat Harian -->
            <div class="info-card-natural animate-on-scroll delay-2">
                 <div class="info-card-icon">
                    <i class="bi bi-book-half"></i> {{-- Ganti icon --}}
                </div>
                <div class="info-card-content-wrapper">
                    <h4>Ayat Harian</h4>
                    @php
                        // $ayatHarian = App\Models\Berita::where('tipe', 'ayat_harian')
                        //                               ->orderBy('tanggal_publikasi', 'desc')
                        //                               ->first();
                    @endphp
                    @if(isset($ayatHarian) && $ayatHarian)
                        <div class="info-list-item-natural">
                            <p class="item-title-natural">{{ $ayatHarian->judul }}</p>
                            <p class="item-detail-natural">{{ Str::limit($ayatHarian->deskripsi, 150) }}</p>
                            <small class="item-date-natural"><i>{{ \Carbon\Carbon::parse($ayatHarian->tanggal_publikasi)->translatedFormat('d F Y') }}</i></small>
                        </div>
                    @else
                        <p class="no-info-message-natural">Ayat Harian belum tersedia.</p>
                    @endif
                </div>
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

      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="service-image text-center">
            <img src="{{ asset('images/heme.jpg') }}" alt="Ibadah Jemaat" class="img-fluid rounded shadow">
            <div class="service-image-overlay d-flex align-items-center justify-content-center">
              <div class="service-image-content">
                <h4>Bergabunglah bersama kami</h4>
                <a href="/ayat" class="btn btn-primary btn-sm">Lihat Jadwal</a>
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
            <i class="bi bi-cloud-haze-fill"></i>
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
      <p class="section-subtitle animate-on-scroll delay-2 mb-5">Bersama-sama, kita dapat menyebarkan kasih Tuhan melalui pelayanan dan misi gereja.</p>
      <a href="https://wa.me/+6282276940299?text=Halo,%20saya%20ingin%20mengetahui%20lebih%20lanjut%20tentang%20pelayanan%20HKBP%20Sinambela%20Simanullang"
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
  <section class="location-section mb-5">
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
      }, { threshold: 0.1 }); // threshold 0.1 agar animasi lebih cepat terlihat

      document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
      });
    });
  </script>
</body>
</html>