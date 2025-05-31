<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sejarah Gereja - HKBP Sinambela Simanullang</title>
    <link rel="icon" href="{{ asset('images/hkbplogo.png') }}" type="image/png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Lora:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- GLightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="{{ asset('css/sejarah.css') }}" rel="stylesheet" />
</head>
<body class="bg-light">

    {{-- Header --}}
    @include('header') {{-- Pastikan file header.blade.php ada dan sesuai --}}

    {{-- Hero Section --}}
    <section class="hero-section d-flex align-items-center justify-content-center text-center">
        <div class="hero-overlay"></div>
        <div class="hero-content container position-relative text-white px-4">
            <h1 class="hero-title display-1 fw-bold mb-3 animate-fadeup">
                Journey of Faith
            </h1>
            <h2 class="hero-subtitle fs-2 mb-4 animate-fadeup-delay">
                HKBP Sinambela Simanullang
            </h2>
            <p class="hero-desc fs-5 animate-fadeup-delay">
                Merayakan warisan iman yang mengakar kuat di Tanah Batak sejak abad ke-19, membawa cahaya Injil ke hati masyarakat.
            </p>
            {{-- <a href="#history" class="btn hero-btn mt-4 animate-fadeup-delay">Jelajahi Sejarah</a> --}}
        </div>
    </section>

                   {{-- History Timeline Section --}}
                <section id="history" class="history-section py-5">
                    <div class="container px-lg-5 px-4">
                        <h2 class="section-title text-center mb-5 fw-bold" data-gsap="fade-up">
                            Jejak Sejarah
                        </h2>
                        <div class="timeline position-relative">

                            {{-- Item 1: Gambar Kiri, Teks Kanan --}}
                            <div class="timeline-item-v2" data-gsap="fade-up" data-gsap-delay="0.1">
                                <div class="timeline-panel-v2 timeline-image-panel">
                                    <img src="{{ asset('images/nommensen.png') }}" alt="Misi Nommensen" class="img-fluid rounded shadow-sm">
                                </div>
                                <div class="timeline-icon-v2 shadow-sm">
                                    <i class="bi bi-book-half"></i>
                                </div>
                                <div class="timeline-panel-v2 timeline-text-panel">
                                    <div class="timeline-content-v2 shadow-lg">
                                        <h3 class="timeline-year fw-bold mb-1">1861</h3>
                                        <h4 class="timeline-title fw-bold mb-2">
                                            Misi Nommensen ke Tanah Batak
                                        </h4>
                                        <p>
                                            Kedatangan misionaris Jerman, Ingwer Ludwig Nommensen, membawa ajaran Kristen ke Tanah Batak, mendirikan jemaat-jemaat baru di Bakkara dan Sinambela. Perjuangan dan dedikasinya menjadi tonggak awal penyebaran Injil di wilayah ini.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Item 2: Teks Kiri, Gambar Kanan --}}
                            <div class="timeline-item-v2" data-gsap="fade-up" data-gsap-delay="0.2">
                                <div class="timeline-panel-v2 timeline-text-panel">
                                    <div class="timeline-content-v2 shadow-lg">
                                        <h3 class="timeline-year fw-bold mb-1">1880</h3>
                                        <h4 class="timeline-title fw-bold mb-2">
                                            Bangunan Gereja Pertama
                                        </h4>
                                        <p>
                                            Gereja pertama dibangun dengan material sederhana seperti kayu dan atap ilalang oleh semangat gotong royong jemaat. Bangunan ini kemudian direnovasi berkali-kali menjadi bangunan permanen yang lebih kokoh, menjadi simbol pertumbuhan iman dan persatuan jemaat.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-icon-v2 shadow-sm">
                                    <i class="bi bi-tools"></i>
                                </div>
                                <div class="timeline-panel-v2 timeline-image-panel">
                                     <img src="{{ asset('images/sejarah/gereja-awal.jpg') }}" alt="Gereja Pertama" class="img-fluid rounded shadow-sm">
                                </div>
                            </div>

                            {{-- Item 3: Gambar Kiri, Teks Kanan (Contoh tanpa gambar, panel gambar kosong) --}}
                            <div class="timeline-item-v2" data-gsap="fade-up" data-gsap-delay="0.3">
                                  <div class="timeline-panel-v2 timeline-image-panel">
                                    <img src="{{ asset('images/image.png') }}" alt="Misi Nommensen" class="img-fluid rounded shadow-sm">
                                </div>
                                <div class="timeline-icon-v2 shadow-sm">
                                    <i class="bi bi-book-half"></i>
                                </div>
                                <div class="timeline-panel-v2 timeline-text-panel">
                                    <div class="timeline-content-v2 shadow-lg">
                                        <h3 class="timeline-year fw-bold mb-1">1950-1970</h3>
                                        <h4 class="timeline-title fw-bold mb-2">
                                            Era Pengembangan dan Pelayanan
                                        </h4>
                                        <p>
                                            Pada periode ini, gereja mengalami perkembangan signifikan dalam hal jumlah jemaat dan perluasan pelayanan. Berbagai program pendidikan agama, kegiatan sosial, dan pemberdayaan masyarakat mulai digalakkan.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Item 4: Teks Kiri, Gambar Kanan --}}
                             <div class="timeline-item-v2" data-gsap="fade-up" data-gsap-delay="0.4">
                                <div class="timeline-panel-v2 timeline-text-panel">
                                    <div class="timeline-content-v2 shadow-lg">
                                        <h3 class="timeline-year fw-bold mb-1">2000</h3>
                                        <h4 class="timeline-title fw-bold mb-2">
                                            Perayaan Jubileum Akbar
                                        </h4>
                                        <p>
                                            HKBP Sinambela Simanullang merayakan jubileumnya dengan penuh sukacita. Rangkaian kegiatan rohani, budaya, dan sosial diselenggarakan untuk mensyukuri perjalanan iman gereja dan memperkuat ikatan persaudaraan.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-icon-v2 shadow-sm">
                                    <i class="bi bi-stars"></i>
                                </div>
                                <div class="timeline-panel-v2 timeline-image-panel">
                                     <img src="{{ asset('images/jubileum.jpg') }}" alt="Perayaan Jubileum" class="img-fluid rounded shadow-sm">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

    {{-- Footer --}}
    @include('footer') {{-- Pastikan file footer.blade.php ada dan sesuai --}}

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <!-- GLightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js"></script>

    <script>
        // Initialize GLightbox
        if (typeof GLightbox === 'function') {
            const lightbox = GLightbox({
                touchNavigation: true,
                loop: true,
                autoplayVideos: true,
                selector: '.glightbox'
            });
        }

        // GSAP Animations
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);

            gsap.from(".animate-fadeup", {
                opacity: 0, y: 40, duration: 1, stagger: 0.2, ease: 'power2.out'
            });
            gsap.from(".animate-fadeup-delay", {
                opacity: 0, y: 40, duration: 1, stagger: 0.2, delay:0.4, ease: 'power2.out'
            });

            document.querySelectorAll('[data-gsap="fade-up"]').forEach((el) => {
                gsap.from(el, {
                    opacity: 0,
                    y: 50,
                    duration: 0.8,
                    delay: parseFloat(el.dataset.gsapDelay) || 0,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 90%',
                        end: 'bottom 10%',
                        toggleActions: 'play none none none',
                        // once: true // Aktifkan jika hanya mau animasi sekali
                    }
                });
            });
        }
    </script>
</body>
</html>