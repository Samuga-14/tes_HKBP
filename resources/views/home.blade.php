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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
  
  <style>
    /* Animasi untuk elemen yang akan muncul saat scroll */
    .scroll-animate {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    
    .scroll-animate.animate {
      opacity: 1;
      transform: translateY(0);
    }
    
    /* Delay untuk animasi bertahap */
    .delay-1 { transition-delay: 0.2s; }
    .delay-2 { transition-delay: 0.4s; }
    .delay-3 { transition-delay: 0.6s; }
    .delay-4 { transition-delay: 0.8s; }
    .delay-5 { transition-delay: 1s; }
    
    /* Animasi khusus untuk hero section */
    .hero-content {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 1s ease-out, transform 1s ease-out;
    }
    
    .hero-content.animate {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
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
          <p class="fs-1 scroll-animate" style="color: black; font-size: 2.5rem !important;">
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
  </section>  

  <!-- Layanan Section -->
  <section class="service-section py-6" id="layanan">
    <div class="container-fluid">
      <div class="section-header text-center mb-5">
        <h2 class="section-title fw-bold scroll-animate">Layanan Ibadah</h2>
        <div class="section-divider mx-auto scroll-animate delay-1"></div>
        <p class="section-subtitle mt-3 scroll-animate delay-2">Melayani dengan penuh kasih dan kerendahan hati</p>
      </div>

      <div class="row align-items-center g-4">
        <div class="col-lg-6">
          <div class="service-card scroll-animate delay-1">
            <h3 class="service-card-title h4 mb-4">Gereja Melayani</h3>
            <ul class="service-list">
              <li class="service-item scroll-animate delay-2">
                <span class="service-icon">
                  <i class="bi bi-calendar-check"></i>
                </span>
                <span>Ibadah Minggu</span>
              </li>
              <li class="service-item scroll-animate delay-3">
                <span class="service-icon">
                  <i class="bi bi-people"></i>
                </span>
                <span>Ibadah Tamu</span>
              </li>
              <li class="service-item scroll-animate delay-4">
                <span class="service-icon">
                  <i class="bi bi-water"></i>
                </span>
                <span>Baptisan Kudus</span>
              </li>
              <li class="service-item scroll-animate delay-5">
                <span class="service-icon">
                  <i class="bi bi-cup-hot"></i>
                </span>
                <span>Perjamuan Kudus</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="service-image scroll-animate delay-2">
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
  <section class="vision-section py-5">
      <div class="container-fluid">
          <div class="text-center mb-5">
              <h2 class="section1-title text-primary fw-bold position-relative d-flex align-items-center justify-content-center scroll-animate">
                <span class="d-inline-block border-bottom border-3 border-primary pb-3 me-3">Visi & <br> Misi</span>
                <span class="mx-4 fs-1">|</span>
                <span class="h3 text-secondary">HKBP Sinambela - Simanullang Bakkara</span>
              </h2>
          </div>
          <div class="row align-items-center g-5">
              <div class="col-md-6 mb-4 mb-md-0">
                  <div class="vision-image overflow-hidden rounded scroll-animate delay-1">
                      <img src="{{ asset('images/jemaat.jpeg') }}" alt="Visi Misi Gereja" class="img-fluid">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="vision-content p-4 scroll-animate delay-2">
                      <h3 class="fw-bold text-primary mb-4">Visi HKBP Sin - Sim</h3>
                      <p class="fst-italic mb-5" style="color: #495057; font-size: 1.1rem; line-height: 1.6;">"Menjadi gereja yang hidup dalam iman, kasih, dan pelayanan demi kemuliaan Tuhan"</p>

                      <h4 class="fw-bold text-primary mt-4">Misi HKBP Sin - Sim</h4>
                      <div class="mt-4">
                          <div class="mission-item scroll-animate delay-3">
                              Memberitakan Injil Kristus kepada semua lapisan masyarakat dengan pelayanan yang tulus
                          </div>
                          <div class="mission-item scroll-animate delay-4">
                              Meningkatkan pembinaan rohani melalui ibadah, pendidikan jemaat, dan pelayanan sakramen, katekisasi, komisi bapak, ibu dan anak
                          </div>
                          <div class="mission-item scroll-animate delay-5">
                              Menjadi garam dan terang bagi lingkungan sekitar melalui pelayanan sosial, pendidikan, dan kepedulian terhadap sesama
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Divider -->
  <div class="container my-5">
    <hr class="my-4" />
  </div>

  <!-- Lokasi -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center fw-bold mb-4 scroll-animate" style="color: #002147;">Lokasi Gereja HKBP Sinambela Simanullang</h2>
      <div class="ratio ratio-16x9 shadow rounded scroll-animate delay-1">
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
  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Animasi untuk hero section saat halaman dimuat
      const heroContent = document.querySelector('.hero-content');
      if (heroContent) {
        setTimeout(() => {
          heroContent.classList.add('animate');
        }, 300);
      }
      
      // Fungsi untuk menangani animasi scroll
      function handleScrollAnimation() {
        const elements = document.querySelectorAll('.scroll-animate');
        const windowHeight = window.innerHeight;
        const triggerPoint = windowHeight * 0.85;
        
        elements.forEach(element => {
          const elementPosition = element.getBoundingClientRect().top;
          
          if (elementPosition < triggerPoint) {
            element.classList.add('animate');
          }
        });
      }
      
      // Jalankan sekali saat halaman dimuat
      handleScrollAnimation();
      
      // Jalankan saat scroll
      window.addEventListener('scroll', handleScrollAnimation);
    });
  </script>
</body>
</html>