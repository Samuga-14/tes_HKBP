<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKBP Bakkara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        html { scroll-behavior: smooth; }
        body { font-family: 'Poppins', sans-serif; }
        section { padding: 100px 20px; min-height: 100vh; }
        .section-title {
            text-transform: uppercase;
            font-weight: 800;
            font-size: 2.5rem;
            margin-bottom: 40px;
            position: relative;
            padding-bottom: 20px;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: rgb(9, 9, 121);
        }
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://source.unsplash.com/1600x900/?church');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 150px 20px;
        }
        footer {
            background: linear-gradient(180deg, rgb(10, 10, 77) 0%, rgb(9, 9, 81) 50%, rgb(46, 46, 148) 100%);
            color: white;
            padding: 40px 20px;
            text-align: center;
        }
        .navbar-brand { color: #ff0000 !important; }
        .nav-link { color:rgb(10, 10, 77) !important; }
        .nav-link:hover { color:rgb(175, 6, 6) !important; }
        .sejarah-img {
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .sejarah-img:hover {
            transform: scale(1.02);
        }
        .sejarah-text {
            padding: 30px;
        }
        .contact-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .contact-card:hover {
            transform: translateY(-10px);
        }
        .contact-icon {
            font-size: 2.5rem;
            color: rgb(9, 9, 121);
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar fixed-top -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#home">HKBP Bakkara</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sejarah">Sejarah Gereja</a></li>
                    <li class="nav-item"><a class="nav-link" href="#jadwal">Jadwal Ibadah</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pengurus">Pengurus</a></li>
                    <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pengumuman">Pengumuman</a></li>
                    <li class="nav-item"><a class="nav-link" href="#ayat">Ayat Harian</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

     <!-- Hero Section -->
    <section id="home" class="hero" style="background-image: url('https://awsimages.detik.net.id/community/media/visual/2024/12/24/suasana-persiapan-natal-di-gereja-katedral-santa-perawan-maria-ratu-rosario-suci-di-kelurahan-randusari-kecamatan-semarang-sel-1_169.jpeg?w=1200'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; color: white; position: relative;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5);"></div>
        <h1 class="display-3 fw-bold" style="position: relative; z-index: 1;">Selamat Datang di HKBP Bakkara</h1>
        <p class="lead" style="position: relative; z-index: 1;">Gereja yang melayani dengan kasih dan kebersamaan</p>
    </section>

    <!-- Sejarah Section -->
    <section id="sejarah" class="bg-light">
        <div class="container">
            <h2 class="section-title text-center">SEJARAH GEREJA</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Milan_Cathedral_from_Piazza_del_Duomo.jpg/1200px-Milan_Cathedral_from_Piazza_del_Duomo.jpg" alt="HKBP Bakkara" class="img-fluid sejarah-img">
                </div>
                <div class="col-md-6 sejarah-text">
                    <p class="lead">HKBP Bakkara memiliki sejarah panjang dalam melayani jemaat. Berdiri sejak abad ke-19, gereja ini menjadi pusat peribadatan bagi umat Kristen Batak, khususnya di wilayah Bakkara.</p>
                    <p>Seiring perkembangan zaman, HKBP Bakkara terus berkembang dengan berbagai pelayanan rohani dan sosial untuk jemaat serta masyarakat sekitar.</p>
                    <a href="{{ route('pages.sejarah') }}" class="btn btn-primary mt-3">Selengkapnya</a>
                    </div>
            </div>
        </div>
    </section>
    <!-- Kontak Section -->
    <section id="kontak">
        <div class="container">
            <h2 class="section-title text-center">KONTAK & BANTUAN</h2>
            <p class="text-center lead mb-5">Hubungi kami jika ada pertanyaan lebih lanjut.</p>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="contact-card text-center">
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        <h4 class="fw-bold">Kunjungi Kami</h4>
                        <p>Jl. Bakkara No. 123<br>Sumatera Utara, Indonesia</p>
                        <a href="https://goo.gl/maps" class="btn btn-outline-primary mt-3">Lihat Peta</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-card text-center">
                        <i class="fas fa-phone-alt contact-icon"></i>
                        <h4 class="fw-bold">Hubungi Kami</h4>
                        <p>Telepon: (123) 456-7890<br>WhatsApp: +62 xxx-xxxx-xxxx</p>
                        <a href="tel:123456789" class="btn btn-outline-primary mt-3">Telepon Sekarang</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-card text-center">
                        <i class="fas fa-envelope contact-icon"></i>
                        <h4 class="fw-bold">Email Kami</h4>
                        <p>info@hkbpbakkara.org<br>admin@hkbpbakkara.org</p>
                        <a href="mailto:info@hkbpbakkara.org" class="btn btn-outline-primary mt-3">Kirim Email</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h4>Tentang HKBP Bakkara</h4>
                    <p>Melayani dengan kasih dan kebersamaan dalam iman kepada Tuhan Yesus Kristus.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h4>Informasi Kontak</h4>
                    <p>
                        Alamat: Jl. Bakkara No. 123<br>
                        Telepon: (123) 456-7890<br>
                        Email: info@hkbpbakkara.org
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <h4>Jadwal Ibadah</h4>
                    <p>
                        Minggu: 10:00 WIB<br>
                        Sekolah Minggu: 08:00 WIB<br>
                        Ibadah Rabu: 18:00 WIB
                    </p>
                </div>
            </div>
            
            <hr class="mt-4 mb-4" style="border-color: white;">
            <p>© 2025 HKBP Bakkara. Semua hak dilindungi.</p>
        </div>
    </footer>

    <!-- Script untuk smooth scrolling -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navLinks = document.querySelectorAll(".nav-link");
            navLinks.forEach(link => {
                link.addEventListener("click", function (e) {
                    e.preventDefault();
                    let targetId = this.getAttribute("href").substring(1);
                    let targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        let offset = 80;
                        let elementPosition = targetElement.offsetTop - offset;
                        window.scrollTo({ top: elementPosition, behavior: "smooth" });
                    }
                });
            });
        });
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>