<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sejarah Gereja - HKBP Sinambela Simanullang</title>
    <link rel="icon" href="{{ asset('images/hkbplogo.png') }}" type="image/png" />
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Lora:wght@400;600&display=swap"
      rel="stylesheet"
    />
    
    <!-- GLightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css" rel="stylesheet" />
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/sejarah.css') }}" rel="stylesheet" />
</head>
<body class="bg-light">

    {{-- Header --}}
    @include('header')

    {{-- Hero Section --}}
    <section class="hero-section d-flex align-items-center justify-content-center text-center" style="min-height: 100vh; background: url('{{ asset('images/hero-bg.jpg') }}') center center/cover no-repeat; position: relative;">
    <!-- Gradient overlay -->
    <div class="hero-overlay" style="position: absolute; inset: 0; background: linear-gradient(to bottom right, rgba(10, 43, 92, 0.85), rgba(0, 0, 0, 0.6)); z-index: 1;"></div>

    <!-- Hero content -->
    <div class="hero-content container position-relative text-white px-4" style="z-index: 2;">
        <h1 class="hero-title display-1 fw-bold mb-3 animate-fadeup" style="font-family: 'Cinzel', serif; letter-spacing: 1.5px; text-shadow: 0 3px 8px rgba(0,0,0,0.7);">
            Journey of Faith
        </h1>
        <h2 class="hero-subtitle fs-2 mb-4 animate-fadeup-delay" style="font-family: 'Lora', serif; color: var(--gold-pure);">
            HKBP Sinambela Simanullang
        </h2>
        <p class="hero-desc fs-5 mb-5 animate-fadeup-delay" style="font-family: 'Lora', serif; max-width: 700px; margin: 0 auto; line-height: 1.8;">
            Merayakan warisan iman yang mengakar kuat di Tanah Batak sejak abad ke-19, membawa cahaya Injil ke hati masyarakat.
        </p>
    </div>
</section>

    {{-- History Timeline Section --}}
    <section id="history" class="history-section py-5 bg-white">
        <div class="container px-4">
            <h2 class="section-title text-center mb-5" data-gsap="fade-up" style="font-family: 'Cinzel', serif; font-weight: 700; color: #5a442a;">
                Jejak Sejarah
            </h2>
            <div class="timeline position-relative">
                {{-- Vertical line timeline --}}
                <div class="timeline-line position-absolute top-0 start-50 translate-middle-x bg-gradient" style="width: 4px; height: 100%; border-radius: 2px;"></div>
                
                {{-- Timeline items --}}
                <div class="timeline-item d-flex align-items-start mb-5" data-gsap="fade-up" data-gsap-delay="0.2">
                    <div class="timeline-icon rounded-circle bg-gold d-flex align-items-center justify-content-center me-4 shadow-sm" style="width: 60px; height: 60px; font-size: 1.8rem; color: white;">
                        <i class="bi bi-book"></i>
                    </div>
                    <div class="timeline-content" style="max-width: 600px;">
                        <h3 class="timeline-year fw-bold text-gold mb-1" style="font-family: 'Cinzel', serif;">1861</h3>
                        <h4 class="timeline-title fw-semibold" style="font-family: 'Lora', serif; color: #4a3c1a;">
                            Misi Nommensen ke Tanah Batak
                        </h4>
                        <p style="font-family: 'Lora', serif; color: #6c5e40;">
                            Kedatangan misionaris Jerman, Ingwer Ludwig Nommensen, membawa ajaran Kristen ke Tanah Batak, mendirikan jemaat-jemaat baru di Bakkara dan Sinambela.
                        </p>
                    </div>
                </div>

                <div class="timeline-item d-flex align-items-start mb-5 flex-row-reverse" data-gsap="fade-up" data-gsap-delay="0.4">
                    <div class="timeline-icon rounded-circle bg-gold d-flex align-items-center justify-content-center ms-4 shadow-sm" style="width: 60px; height: 60px; font-size: 1.8rem; color: white;">
                        <i class="bi bi-house-door"></i>
                    </div>
                    <div class="timeline-content text-end" style="max-width: 600px;">
                        <h3 class="timeline-year fw-bold text-gold mb-1" style="font-family: 'Cinzel', serif;">1880</h3>
                        <h4 class="timeline-title fw-semibold" style="font-family: 'Lora', serif; color: #4a3c1a;">
                            Bangunan Gereja Pertama
                        </h4>
                        <p style="font-family: 'Lora', serif; color: #6c5e40;">
                            Gereja pertama dibangun dengan kayu dan ilalang, kemudian direnovasi menjadi bangunan permanen yang kokoh, simbol pertumbuhan iman jemaat.
                        </p>
                    </div>
                </div>

                <div class="timeline-item d-flex align-items-start mb-5" data-gsap="fade-up" data-gsap-delay="0.6">
                    <div class="timeline-icon rounded-circle bg-gold d-flex align-items-center justify-content-center me-4 shadow-sm" style="width: 60px; height: 60px; font-size: 1.8rem; color: white;">
                        <i class="bi bi-star"></i>
                    </div>
                    <div class="timeline-content" style="max-width: 600px;">
                        <h3 class="timeline-year fw-bold text-gold mb-1" style="font-family: 'Cinzel', serif;">2000</h3>
                        <h4 class="timeline-title fw-semibold" style="font-family: 'Lora', serif; color: #4a3c1a;">
                            Perayaan Jubileum
                        </h4>
                        <p style="font-family: 'Lora', serif; color: #6c5e40;">
                            HKBP Sinambela Simanullang merayakan jubileum dengan kegiatan rohani dan sosial, memperkuat ikatan komunitas dan iman.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gallery Section --}}
    

    {{-- Footer --}}
    @include('footer')

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <!-- GLightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js"></script>

    <script>
        // Initialize GLightbox
        const lightbox = GLightbox({
            touchNavigation: true,
            loop: true,
            autoplayVideos: true
        });

        // GSAP Animations
        gsap.registerPlugin(ScrollTrigger);
        document.querySelectorAll('[data-gsap="fade-up"]').forEach((el, index) => {
            gsap.from(el, {
                opacity: 0,
                y: 50,
                duration: 1,
                delay: el.dataset.gsapDelay || index * 0.2,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            });
        });

        // Gallery overlay effect
        document.querySelectorAll('.gallery-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.querySelector('.gallery-overlay').style.opacity = 1;
            });
            card.addEventListener('mouseleave', () => {
                card.querySelector('.gallery-overlay').style.opacity = 0;
            });
        });
    </script>
</body>
</body>
</body>
</html>
