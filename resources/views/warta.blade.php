<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warta Jemaat - HKBP Sinambela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/warta.css') }}" rel="stylesheet">
</head>
<body>

    @include('header')

    <section class="hero-warta">
        <div class="hero-text">
            <h1 class="display-5 fw-bold animate__animated animate__fadeInDown">WARTA JEMAAT</h1>
            <p class="lead animate__animated animate__fadeInUp">Informasi & Tata Ibadah HKBP Sinambela Simanullang</p>
        </div>
    </section>

    <div class="section-title">
        Warta Jemaat HKBP Sinambela Simanullang
    </div>

    <div class="quote">
        <i class="bi bi-chat-left-quote-fill text-primary"></i>
        "Melalui Warta Jemaat, kita dipersatukan dalam informasi dan kasih untuk bertumbuh bersama sebagai tubuh Kristus."
    </div>

    <div class="container py-4 warta-list">
        <div class="row g-4">
            @for ($i = 0; $i < 5; $i++)
            <div class="col-md-6">
                <div class="card warta-card shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title">Warta & Tata Ibadah Minggu I</h5>
                            <p class="card-text text-muted mb-2"><i class="bi bi-calendar-event"></i> 4 April 2025</p>
                        </div>
                        <div class="text-end mt-3">
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-download me-1"></i> Unduh Warta
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>

    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
    </nav>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
