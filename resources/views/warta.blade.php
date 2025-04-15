<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warta Jemaat - HKBP Sinambela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Link to external CSS file -->
    <link href="{{ asset('css/warta.css') }}" rel="stylesheet">
</head>
<body>

    {{-- Header --}}
    @include('header')

    {{-- Hero Section --}}
    <section class="hero-warta">
        <div class="hero-text">
            <h1 class="display-5 fw-bold">SELAMAT DATANG DI HKBP SINAMBELA SIMANULLANG</h1>
        </div>
    </section>

    {{-- Section Title --}}
    <div class="section-title">
        Warta Jemaat HKBP Sinambela Simanullang
    </div>

    {{-- Quote --}}
    <div class="quote">
        "Melalui Warta Jemaat, kita dipersatukan dalam informasi dan kasih untuk bertumbuh bersama sebagai tubuh Kristus."
    </div>

    {{-- List of Warta --}}
    <div class="container warta-list">
        @for ($i = 0; $i < 5; $i++)
        <div class="warta-item">
            <div class="warta-date">4 APRIL 2025</div>
            <div class="warta-title">Warta dan Tata Ibadah HKBP SINAMBELA Minggu I</div>
            <div class="warta-download">
                <i class="bi bi-download"></i>
            </div>
        </div>
        @endfor
    </div>

    {{-- Pagination --}}
    <nav>
        <ul class="pagination">
            <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
    </nav>

    {{-- Footer --}}
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
