<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Jadwal Ibadah - HKBP Sinambela Simanullang</title>
  <link rel="icon" href="{{ asset('images/hkbplogo.png') }}" type="image/png">

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <!-- Custom CSS -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f7f9fc;
      color: #333;
      margin: 0;
      padding: 0;
    }

  
    /* Hero Section */
    .hero-section {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://source.unsplash.com/random/1600x400/?church') no-repeat center center/cover;
      padding: 100px 0;
      color: #fff;
      text-align: center;
    }
    .hero-section h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 20px;
    }
    .hero-section p {
      font-size: 1.2rem;
      font-weight: 300;
    }

    /* Jadwal Ibadah Section */
    .jadwal-ibadah {
      padding: 80px 0;
    }
    .jadwal-ibadah h2 {
      font-size: 2.5rem;
      font-weight: 700;
      color: #1a237e;
      margin-bottom: 60px;
      text-align: center;
    }

    .jadwal-item {
      background: linear-gradient(145deg, #ffffff, #f0f4ff);
      border-radius: 20px;
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
      padding: 40px;
      margin-bottom: 40px;
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
      opacity: 0;
      animation: fadeInUp 0.6s ease forwards;
    }
    .jadwal-item:nth-child(2) { animation-delay: 0.2s; }
    .jadwal-item:nth-child(3) { animation-delay: 0.4s; }
    .jadwal-item:nth-child(4) { animation-delay: 0.6s; }
    .jadwal-item:nth-child(5) { animation-delay: 0.8s; }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .jadwal-item:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .jadwal-item::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(to right, #3f51b5, #1a237e);
    }

    .jadwal-item h3 {
      font-size: 1.8rem;
      margin-bottom: 20px;
      color: #3f51b5;
      font-weight: 600;
    }

    .jadwal-item ul {
      list-style: none;
      padding-left: 0;
      margin: 0;
    }

    .jadwal-item ul li {
      padding-left: 1.8rem;
      position: relative;
      margin-bottom: 15px;
      font-size: 1.2rem;
      color: #555;
    }

    .jadwal-item ul li::before {
      content: "\f0f4";
      font-family: 'Bootstrap-icons';
      position: absolute;
      left: 0;
      color: #3f51b5;
      font-size: 1.5rem;
    }

    .jadwal-item i {
      color: #3f51b5;
      font-size: 1.6rem;
    }

    .jadwal-item .description {
      font-size: 1rem;
      color: #666;
      margin-top: 15px;
    }

    .container {
      max-width: 1100px;
      margin: 0 auto;
    }

    /* Footer */
    footer {
      background: #1a237e;
      color: #fff;
      padding: 40px 0;
      text-align: center;
    }
    footer p {
      margin: 0;
      font-size: 1rem;
    }
    footer a {
      color: #fff;
      font-size: 1.5rem;
      margin: 0 10px;
      transition: color 0.3s;
    }
    footer a:hover {
      color: #f0f4ff;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .hero-section h1 {
        font-size: 2rem;
      }
      .hero-section p {
        font-size: 1rem;
      }
      .jadwal-ibadah h2 {
        font-size: 2rem;
      }
      .jadwal-item {
        padding: 30px;
      }
      .jadwal-item h3 {
        font-size: 1.5rem;
      }
      .jadwal-item ul li {
        font-size: 1.1rem;
      }
    }

    @media (max-width: 576px) {
      .hero-section h1 {
        font-size: 1.8rem;
      }
      .jadwal-ibadah h2 {
        font-size: 1.8rem;
      }
      .jadwal-item {
        padding: 20px;
      }
      .jadwal-item h3 {
        font-size: 1.3rem;
      }
      .jadwal-item ul li {
        font-size: 1rem;
      }
      .container {
        padding: 0 15px;
      }
    }
  </style>
</head>
<body>

    <!-- Header -->
  @include('header')
  <!-- Jadwal Ibadah Section -->
  <section class="jadwal-ibadah ">
    <div class="container mt-5">
      <h2 data-aos="fade-up">Pelayanan Ibadah HKBP Sinambela - Simanullang</h2>

      <div class="row">
        <!-- Ibadah Minggu -->
        <div class="col-lg-4 col-md-6">
          <div class="jadwal-item" data-aos="fade-up">
            <h3><i class="bi bi-sun me-2"></i>Ibadah Minggu (Umum)</h3>
            <ul>
              <li>Setiap hari Minggu pukul 08:00 WIB</li>
            </ul>
            <p class="description">Ibadah umum yang diadakan setiap minggu dengan tujuan untuk memberikan pelayanan rohani kepada jemaat yang hadir. Setiap orang dapat bergabung untuk beribadah bersama.</p>
          </div>
        </div>

        <!-- Ibadah Tamu -->
        <div class="col-lg-4 col-md-6">
          <div class="jadwal-item" data-aos="fade-up">
            <h3><i class="bi bi-person-heart me-2"></i>Ibadah Tamu</h3>
            <ul>
              <li>Disesuaikan dengan permintaan</li>
            </ul>
            <p class="description">Ibadah khusus untuk tamu yang menginginkan pelayanan ibadah di luar jadwal rutin. Dapat diatur sesuai dengan kebutuhan dan permintaan.</p>
          </div>
        </div>

        <!-- Babtisan Kudus -->
        <div class="col-lg-4 col-md-6">
          <div class="jadwal-item" data-aos="fade-up">
            <h3><i class="bi bi-droplet me-2"></i>Babtisan Kudus</h3>
            <ul>
              <li>Diselenggarakan satu kali dalam setahun</li>
            </ul>
            <p class="description">Babtisan Kudus adalah sakramen penting dalam kehidupan umat Kristen. Dilakukan satu kali setahun untuk mengikatkan jemaat dengan Tuhan.</p>
          </div>
        </div>

        <!-- Perjamuan Kudus -->
        <div class="col-lg-4 col-md-6">
          <div class="jadwal-item" data-aos="fade-up">
            <h3><i class="bi bi-cup me-2"></i>Perjamuan Kudus</h3>
            <ul>
              <li>Diadakan pada momen tertentu sesuai kalender gerejawi</li>
            </ul>
            <p class="description">Perjamuan Kudus adalah sakramen yang dilakukan untuk mengenang pengorbanan Yesus Kristus. Diadakan secara berkala sesuai dengan kalender gereja.</p>
          </div>
        </div>

        <!-- Permintaan Doa -->
        <div class="col-lg-4 col-md-6">
          <div class="jadwal-item" data-aos="fade-up">
            <h3><i class="bi bi-columns me-2"></i>Permintaan Doa</h3>
            <ul>
              <li>Dapat diajukan oleh jemaat kapan saja</li>
            </ul>
            <p class="description">Jemaat dapat mengajukan permintaan doa kepada gereja kapan saja untuk mendapatkan kekuatan dan pertolongan dari Tuhan dalam menghadapi tantangan hidup.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
   <!-- Header -->
  @include('footer')
  <!-- Footer -->
 

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true
    });
  </script>
</body>
</html> 