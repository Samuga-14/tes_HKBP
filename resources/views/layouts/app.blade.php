<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>

=======
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKBP Bakkara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
=======
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKBP Bakkara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
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
=======
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
>>>>>>> Stashed changes
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
        .nav-hover {
        position: relative;
    }
    
    .nav-hover::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        background: rgb(9, 9, 121);
        left: 0;
        bottom: 0;
        transition: width 0.3s ease;
    }
    
    .nav-hover:hover::after {
        width: 100%;
    }

    .dropdown-menu {
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .dropdown-item:hover {
        background-color: rgb(9, 9, 121);
        color: white;
    }
    .social-media a {
            transition: all 0.3s ease;
        }
        .social-media a:hover {
            color: #ffc107 !important;
            transform: translateY(-3px);
        }
        footer i {
            width: 20px;
        }
        footer {
            position: relative;
            overflow: hidden;
        }
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #ffc107, #dc3545, #0d6efd);
        }
>>>>>>> Stashed changes
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#home">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMwAAADACAMAAAB/Pny7AAAAt1BMVEX///8BHWYAAF0AAFkAG2UAAFsAFmMAEGEAAFfk5erZ3eUmOHRiZYzU1+IAGGQ5OnIAAFLu8fZSVIBhaJIAAE35+vwACl8ABl4AAEkAAEaiprvz9Pa/wtDIyta1t8eussUbI2iIi6Y+P3NpcZZYXogxMm5ARnt5e5qanLJGS3wPDluAg6CSla4AAEAVJ2ocL28dHF1DQ24kJ2I6OmaZob0VElhUVHesrrohKFw7PGEyQHgAADNsb43xILLdAAAOh0lEQVR4nO1di3KbuhYtICGgvGPJKQYDNhi75iRpzml7b27+/7suAudhSfgJ2D3jNZ0k03FAS9raL23tfPlyww1/MrDOAV96TCdDT827bRT6pcd0MnTTlbcAHePSYzoZuilLW1BvZK4DNzLXihuZa8WNzLXiRuZacSNzrfDmLJnZn+E16/OHryxysM1FAjb3ma+PmXfpsXPQ7xTEgSUjSfxnZP8aycjcyA8CupHpFyeTITcy/eJG5kZmANzI3MgMgBuZG5kB8K/3zYDExwB/BplspHBA7MhtmfuMu7o+MtiwOIQ+YbjkU/5jf0ha4F+V0LiRuVbcyFwrbmSuFTcy14obmWvFjcy14kbmWnEjc624kblW3MhcK/41ZLBnWPGCSZzZz0FkeH9YoTY2wqBYAMgnARX1Zb6cGteX92uDEae+qsjIZqnUdBCExF8H1p+wPpMwzWyN1ETaMs2AKLKfTq99eSaBmUMiXBKWD8nN4Jrp4MCXxupBuf+KjoqSRTm59JjbMF0h8T5pg43I9/jSoxbC8F1BSda+5bFHL9alR87BK7UTT87GWnplW8fyR0evyhtsbRVekZ72YghPpUKhPCyvZnH0lD/vOw5ILq7EabNMcrKIvQEoWXhpHhTR6nwuFRTnCtiETidcJInkFzc5UXLmdvkASoILc5H3GEoAKrcFEYJU1QZ7lhBJF10by921LrZauStPT4mzyrLVy3Py9L3iZEvtnFByQTY6Im3jqvwu9PzjVzq13i2IZ0zX2Y9nRNS2Vaz2zcW0gPfSaipVOfHXooDFm679x3HremrZhTw1XGitVPIiaL2PoU8Lp9XKavPL3ONYtux9APP1dGecMgnLXGv5ZSW9hJ8WJmLZJ2Qe7Q25cFTIY/GqwukQo9+G4YslBTqHxfbedKUIFwc9D+504lRs+EfmwTKvF5pwbeFdnwMXIXwULYz6rTzmIUsieghwB9bP+qsikhB45DDCZ+GUPA2rA2KRVkbS0UbC+lvABsB1H2Nug8HWK1KQPDrhSX+zSq3aiurfA4ZqOHAFXE4LSCyHV9EADbg0+gsvHGp+on0Ic/5haHHCIp+IgN8xdrI8ddfGMqehATpKK54DzM8lQPOTE6045f1V4g+1a8IRLxf5Gf6hbnJsABoq6lzxW1Y5K6oKHzhBg6/DeM/ePcdFXp33yJLbhCoYxg34h3szuD/TN7R4u+WerFCOwldu+2tnm4VSZd1WORtCznTIvleFZ7/XWLEzZI+HMDUB52IqxflPTW12irRgADkzOWdK6yAJYeWsQoOnW66DgWfsW+Wsi7dmrJyhr/1vGuuZPbZ0O8ncxWx6pJMF3/dS9izZtjt5qfeT3TTdTNJOzFlx6EqHcvpMK3rXAFxSxu1I63BegOz3rQHwL4YMkDvKc1nfGDI26ZuMwVZdoceOjBvmXD637wSaxWpmsuoq8uCOre77Vmcx663Lh2f99mDFVkXc9+3QxA+MmZGLroRhzoZovevmgCUDOysWSVl15vYdbS5Zmwk7q7Jasvkrd9nRk9tQst4tLLsybVwyTks7enIbuChK7mz6hicjELOuVoYTM61vMQsSTgF0tWd4BdA3GV41r7vSZgUbwvaumnkynR0P+6zRHPWdbYocxgOAnSVSuWz8t75TtJxvhroqGMUuG52N+o6bPTaese2OhEFnQwAg9x7PcMGZ1tE2jdl0PFn0np7J2EQq7MjT5PrWwHnvYfOS9We6Sgk9sVkfrTNz3IrwidunnYQd4XdmxwC3//ysx+pmSSm6kO05I75ATQY4POM0gIo6kDN+juAQPWlL7sxu1IE+43y+assMcB3F4irFyMvZr52YrJIEx5aunAa+zsw9O3U25TLY6GWQ8+aCkzP0fOYjvVfuGFDrLLTYCS71WC3NmTUIscouDFAGKgjka3ntp7MUmsF5/xLxByqjFZQBjbMznjepYkzuELDvKPP95S53TQ58P0PQpnwlLXKGqgTCXLRO601O1qRWzhevjTvxKg6CYfOVovKpEaeeCWqkHoerB54IlgacmEGfvIoK8cwBy4EjQe0sOCm1gdcCLvbzkIXauBQNgcyPn8+1qHKVmIOWzwoqd2jHz2MdXb0QlXrbPwe+qhHIglEAmB81DCsTlq2fX1d0JLj2GA3QMemN0BHe81CVwe9piIpe6eKMDhU1by2+4wV6P/0TgC8RawCf4wPoTMJcoEMolEGEDBtbqhe/ttxOQloW7qHjRWbb1Tt5hbc/2T0Rikm57X8Zs7brczIxp+3+ANbDovViN5ltq5CwJy3tZT+YF0Hh/RdQt2X2l6HoL4FiPVqaELY1dEBM3bq3+NVPwllPZCb6i7lc9wejsfZoprRlzsfHJ0YUpKYDaV2k+BdVwJSZLt1ZP6mAyFUfmCeXu1oaqGNZmmXmel0GFcp0Pc9m0pivlf+Azc6W9b2vO8JVTCavthcdL9vXhi6PjcgYETupYJPqR7SDCfXuWMd/NpbkXk5pMc1sa+vt103SnWzqIVacKuy/mg7kO2aTrRVaet6HA41pGxbAHs1VLmc3N+gloJnMG6e0OJCs+nDU9LqESnUZ7YLLXbvgcNgaW1Bs1N6OnfQRDmwOg+QZu+yB8BbckUBPrOGfbLw/7TwNIBbSt6IjlzsDmq64IvQjAeQZ66DidNNdSBFXGh26k8LfocHnE9Q3aeJrDaxXsfk8FOo4Y70WHLwVtgnuBVGDNT3QM9D/I2frgCGE348cAeEW3isl0b3NAwEfUtbM46nzJru2vUWU9oFLM3B4/Ba4YwXmfrGcGu/8o4/zU5VvqIDDVs9xH2xlxd9RDz/5fdqHBtDDZZHlRCHHXEiptjRQCVRz30w3HnD6aepZD6p+zzJpuRW/G7JW8j5clH+6cKA1BS2TsJz7uS2TSscdVRga/VU/BqiIoOcf5j/VAvmf7zOIUn7Ymh/fe2o8ygx+jq3nz/44PUIzltmP3CZIrRtwgONuhWXvLjqwVYKenPm2a4gSkf9nZffiS/5igPFoFgnExdC2JBbYmfNEKlfofQTKcRfSvC1LCCqZYw/MxSVH1solLREoy0Ql2koYeYUjJkAARN3qiHJ0KjjeuQGoZf62FKaDrXku7W1AZ6sIOKaQCg7cPWoekGN9zwlXmMs9876l0kwP5ouHMWnrrgMQkZPZ3VIsKZN03BbxvQEdf5PCEtxfZuBmbTrFiNemo2pwjD4EpO4NNIYKcrKitYumMZf3dRVUT3DW8O+nvVYdOmHryYMeBcvCXDwgWYYKrCDL8qNjFmkgDKebd4bZXi6AnHIS5BXjvTt5nJS7FL5nRGE8DcqyTMtlEMdhpO9qPDtJHXGPkM+QzZNObgQnjfyjDzmVwRhP8AEW2/NbUmmfcPI1ypArAWGB6uYMnSSD6EOs1d7Wgn+dnN9Yft+96vZPuhejXx2Um0z/Sz3HSNC2YQv3ZwQ3XHXuJ1Q8R3QvGj7Uzq2mMDJI6qs/U7RDhwLJPeuoM9uxbUBdyqC/apVaG92d3rIY64UrV87jI2UTtzYMk+gOPS+5kYvOYRoucP6lzuXTnxHUDujQJMLEKGDjbcgr+oCSK9Z4x3hxpgB4s5a1abhMSiqIwF4gWYN301YL0gKsh3PNJc1qgFrr4nWb60DO7xJizcQapjnyC+p4Wc6s0nxQoewvoyMEwYuCrDKoaJU1628nNNz3WtqmnVFp8IFIqC8bAxM3zZZocyW9JNXcao/F7/AgS1B5CEWuyAoqfltGaNautvpA73x6prDd0POhUf9OhD94SZNr7z0CiOoY9EiFPYCVG0b/DKPzmsbRToHTozh9daBCFLVoAlm9KZZEDh2xLpg+FXSTPsM8G1Tn5g2nCQgbrVaFou5yOlegqoyTmT9P45Drmo8rBycoi2yRyGMkEXv9LpXTpqyRfKWTZD2yL+yws1bEaAH1Od4Mv36RRiUudCVVMip3rIB1wpzYST5b+aZZVL7ZP9W/YG2a/mrmJAA18Q5a1G6qnlJD6M0aA0Ny+rBI3TY36l8dHqBtawEb/fOFXgzeWOu6C8FkfQ81WnuOG9MERiNXQRSqWn+pv1WhjOK6LqzboAOZzvZkDOnOxpt72kB+wfXUfDY3xO0036w7n9YG0qwwnr9ZoE2RtlFodHDN/QQbWmE5f7QrAyRv0hBAha6LVvNyGq5/1jIF62qb8i/6TXfeom34Qp8Wf4oFZKnjck28eH+6TA3Ml/SNy/jjzIbOaVMjhL5WP08yGflBWjgzuhBoEbwfo0WN06dQ9l5dJf/Jurj06jx+9wvBuLMLxx+Yb9wmtJm5N5ewbtyB37QXVppJpwlp/StpaoN0KnqouXSB669r2CxNww576Se7r36jmwivG+2iSr101iybzJxs0onSU6eJ3ZBD5Xlqb8xl3IQkGu2GabnrehzRiq4WoIchOFqWVCqnbqM66gjCiH3lnYsN87VB/7OoA26SlP1Ua22y/TCvqxaiQqb7qDmGXEBNqr3zTR+nOhEV1fn7SSw12uO+GuOk+N//6C9s8qPKXS1Ro4+cH0FzalBwvKrFWM7jvmpPLLNOpxG1oDPqTX0NAZUO2xhV1psOwtI+lALWKRcjlTdq9p4qrelradGrHhtlNaoV8aO6yb4g6NdtXo11QtcdaNzpQIfQUwnVorCoM0XGMndRtrToRDfyX2zm+EOXpu9n/vW960m9uaxSabI2G8+7WSdbe1xScpPAr10+tBHTvjCZPtTyTySfrgiu6NyTVVHpYJu6Ad6sUbBq8j6Kt8J4sFUUg9PG7a83UnPFELiwrIOiMJPqKdHAIUU4Z8Er7ums2SSpuxFjfQlGlXirtf5cbrJkZNGQoWObvRlz2f9Cy+VWP2gq1NvkYWqG0QKprtucBhjzZFz7B6O7IS4DREktFTZymxLTSexoKkgKq3IKNlLW3A8yMrp6791xUELJ+NqICuRkY7aA61n+d6LkTY8UvfhZuzqA5Cc5yf8HKeMWarBzO10AAAAASUVORK5CYII=" alt="Logo HKBP" height="40" class="me-2">
                HKBP Bakkara
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-hover" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-hover" href="#sejarah">Sejarah Gereja</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-hover dropdown-toggle" href="#" id="beritaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Berita Gereja
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="beritaDropdown">
                            <li><a class="dropdown-item" href="#">Berita Terkini</a></li>
                            <li><a class="dropdown-item" href="#">Artikel</a></li>
                            <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-hover" href="#pengurus">Warta Jemaat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-hover" href="#galeri">Struktur Kepengurusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-hover" href="#pengumuman">Galeri Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-hover" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Sidebar (kalau ada) -->
    {{-- @include('partials.sidebar') --}}

    <!-- Konten Utama -->
    <main class="py-4 container">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h4>Tentang HKBP Bakkara</h4>
                    <p>Melayani dengan kasih dan kebersamaan dalam iman kepada Tuhan Yesus Kristus.</p>
                    <div class="social-media mt-3">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-youtube fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <h4>Informasi Kontak</h4>
                    <p>
                        <i class="fas fa-map-marker-alt me-2"></i> Jl. Bakkara No. 123<br>
                        <i class="fas fa-phone me-2"></i> (123) 456-7890<br>
                        <i class="fas fa-envelope me-2"></i> info@hkbpbakkara.org<br>
                        <i class="fab fa-whatsapp me-2"></i> +62 812-3456-7890
                    </p>
                </div>
                <div class="col-md-3 mb-4">
                    <h4>Jadwal Ibadah</h4>
                    <p>
                        <i class="fas fa-church me-2"></i> Minggu: 10:00 WIB<br>
                        <i class="fas fa-child me-2"></i> Sekolah Minggu: 08:00 WIB<br>
                        <i class="fas fa-pray me-2"></i> Ibadah Rabu: 18:00 WIB
                    </p>
                </div>
                <div class="col-md-3 mb-4 text-center">
                    <img src="{{ asset('images/logo-hkbp.png') }}" alt="Logo HKBP" height="100" class="mb-3">
                    <h4 class="fw-bold">HKBP Bakkara</h4>
                    <p class="small">Huria Kristen Batak Protestan</p>
                </div>
            </div>
            
            <hr class="mt-4 mb-4" style="border-color: white;">
            <div class="row">
                <div class="col-md-6 text-md-start text-center">
                    <p class="mb-0">© 2025 HKBP Bakkara. Semua hak dilindungi.</p>
                </div>
                <div class="col-md-6 text-md-end text-center">
                    <p class="mb-0">Developed with <i class="fas fa-heart text-danger"></i> for HKBP Bakkara</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
