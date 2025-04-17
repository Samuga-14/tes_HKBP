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
      background: linear-gradient(135deg, #007bff, #0056b3);
      color: white;
    }

    footer h5 {
      font-weight: 600;
      margin-bottom: 1rem;
    }

    footer ul {
      padding-left: 0;
    }

    footer ul li {
      list-style: none;
      margin-bottom: 0.5rem;
      font-weight: 300;
    }

    .footer-icon i {
      color: white;
      transition: transform 0.3s ease, color 0.3s ease;
    }

    .footer-icon i:hover {
      color: #ffc107;
      transform: scale(1.2);
    }

    footer img {
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    hr {
      border-top: 2px solid rgba(255,255,255,0.3);
    }

    /* Mobile Optimizations */
    @media (max-width: 767.98px) {
      .footer-icon {
        justify-content: center !important;
      }
      footer .col-md-2, footer .col-md-3 {
        text-align: center;
      }
    }
  </style>
</head>
<body>

  <!-- Footer Section -->
  <footer class="pt-5 pb-4">
    <div class="container">
      <div class="row text-center text-md-start">
        <!-- Social Media and Contact Info -->
        <div class="col-md-3 mb-4">
          <div class="footer-icon d-flex justify-content-center justify-content-md-start gap-3 mb-3">
            <a href="#"><i class="bi bi-instagram fs-4"></i></a>
            <a href="#"><i class="bi bi-youtube fs-4"></i></a>
            <a href="#"><i class="bi bi-facebook fs-4"></i></a>
          </div>
          <p class="mb-1">HKBP SINSIM@GMAIL.COM</p>
          <p>(123) 456-7890</p>
        </div>

        <!-- Services Section -->
        <div class="col-md-2 mb-4">
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
        <div class="col-md-2 mb-4">
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
        <div class="col-md-2 mb-4">
          <h5>ASET GEREJA</h5>
          <ul class="list-unstyled">
            <li>Rumah Dinas</li>
            <li>Motor Pendeta</li>
            <li>Lahan Pertanian</li>
          </ul>
        </div>

        <!-- Created By Section -->
        <div class="col-md-3 mb-4 text-center">
          <h5>DIBUAT OLEH</h5>
          <img src="{{ asset('images/itdel.jpeg') }}" alt="Logo Del" width="90" class="mb-2" />
          <p class="fw-semibold mb-0">Institut Teknologi Del</p>
        </div>
      </div>

      <hr />
      <p class="text-center mt-3 mb-0">COPYRIGHT © 2025 HKBP SINAMBELA SIMANULLANG</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
