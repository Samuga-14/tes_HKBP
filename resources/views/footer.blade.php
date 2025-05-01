<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Footer HKBP Sinambela</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
    }

    footer {
      background: #002147;
      color: white;
      padding-top: 3rem;
      padding-bottom: 1.5rem;
      border-top: 2px solid #fff;
    }

    footer h5 {
      font-weight: 600;
      margin-bottom: 0.5rem;
      font-size: 1rem;
      text-transform: uppercase;
      letter-spacing: 1px;
      opacity: 0.8;
    }

    footer ul {
      padding-left: 0;
      margin-bottom: 0;
    }

    footer ul li {
      list-style: none;
      margin-bottom: 0.4rem;
      font-weight: 300;
      font-size: 0.85rem;
      transition: color 0.3s ease;
    }

    footer ul li:hover {
      color: #ffc107;
    }

    .footer-icon {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-bottom: 1rem;
    }

    .footer-icon a {
      color: white;
      transition: color 0.3s ease, transform 0.3s ease;
      font-size: 1.5rem;
    }

    .footer-icon a:hover {
      color: #ffc107;
      transform: scale(1.1);
    }

    footer img {
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
      width: 70px;
      margin-bottom: 1rem;
    }

    hr {
      border-top: 2px solid rgba(255, 255, 255, 0.3);
      margin: 1.5rem 0;
    }

    /* Mobile Optimizations */
    @media (max-width: 767.98px) {
      .footer-icon {
        justify-content: center;
      }
      footer .col-md-2, footer .col-md-3 {
        text-align: center;
        margin-bottom: 1rem;
      }
      footer .col-md-3 img {
        width: 50px;
      }
      footer h5 {
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>

  <!-- Footer Section -->
  <footer>
    <div class="container">
      <div class="row text-center text-md-start">
        <!-- Social Media and Contact Info -->
        <div class="col-md-3 mb-3">
          <div class="footer-icon">
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-youtube"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
          </div>
          <p class="mb-1">HKBP SINSIM@GMAIL.COM</p>
          <p>(123) 456-7890</p>
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
          <h5>DIBUAT OLEH</h5>
          <img src="{{ asset('images/itdel.jpeg') }}" alt="Logo Del" class="mb-2" />
          <p class="fw-semibold mb-0">Institut Teknologi Del</p>
        </div>
      </div>
      <hr />
      <p class="text-center mt-2 mb-0">COPYRIGHT © 2025 HKBP SINAMBELA SIMANULLANG</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
