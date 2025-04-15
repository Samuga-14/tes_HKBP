<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Link to external CSS -->
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Your main content here -->

    <!-- Footer Section -->
    <footer class="bg-primary text-white pt-5 pb-3">
        <div class="container">
            <div class="row text-center text-md-start">
                <!-- Social Media and Contact Info -->
                <div class="col-md-3 mb-4">
                    <div class="d-flex justify-content-center justify-content-md-start gap-3 mb-3">
                        <i class="fab fa-instagram fa-lg"></i>
                        <i class="fab fa-youtube fa-lg"></i>
                        <i class="fab fa-facebook fa-lg"></i>
                    </div>
                    <p>HKBP SINSIM@GMAIL.COM<br>(123) 456-7890</p>
                </div>

                <!-- Services Section -->
                <div class="col-md-2 mb-4">
                    <h5 class="fw-bold">LAYANAN</h5>
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
                    <h5 class="fw-bold">VISI GEREJA</h5>
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
                    <h5 class="fw-bold">ASET GEREJA</h5>
                    <ul class="list-unstyled">
                        <li>Rumah Dinas</li>
                        <li>Motor Pendeta</li>
                        <li>Lahan Pertanian</li>
                    </ul>
                </div>

                <!-- Created By Section -->
                <div class="col-md-3 mb-4 text-center">
                    <h5 class="fw-bold">DIBUAT OLEH</h5>
                    <img src="{{ asset('images/itdel.jpeg') }}" alt="Logo Del" width="80" class="mb-2">
                    <p class="fw-semibold">Institut Teknologi Del</p>
                </div>
            </div>

            <hr style="border-color: white;">
            <p class="text-center mb-0">COPYRIGHT © 2025 HKBP SINAMBELA SIMANULLANG</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
