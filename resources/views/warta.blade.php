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

    <section class="hero-warta text-center py-5 bg-light">
        <div class="container">
            <h1 class="display-5 fw-bold">WARTA JEMAAT</h1>
            <p class="lead">Informasi & Tata Ibadah HKBP Sinambela Simanullang</p>
        </div>
    </section>

    <div class="section-title text-center mt-4 fw-semibold fs-5">
        Warta Jemaat HKBP Sinambela Simanullang
    </div>

    <div class="quote text-center mb-4 px-3 text-muted">
        <i class="bi bi-chat-left-quote-fill text-primary"></i>
        "Melalui Warta Jemaat, kita dipersatukan dalam informasi dan kasih untuk bertumbuh bersama sebagai tubuh Kristus."
    </div>

    <div class="container py-4 warta-list">
        @foreach ($wartas as $item)
        <div class="warta-item d-flex justify-content-between align-items-center py-3 border-bottom">
            <div class="tanggal text-muted text-uppercase small" style="min-width: 120px;">
                {{ \Carbon\Carbon::parse($item->tanggal_terbit)->translatedFormat('d F Y') }}
            </div>
            <div class="judul flex-grow-1 px-3">
                <h5 class="fw-semibold">{{$item->judul}}</h5>
                <p class="text-muted small">{{ Str::limit(strip_tags($item->deskripsi), 100) }}</p>
            </div>
            <div class="download-icon">
                @if ($item->file_pdf)
                    <a href="{{ asset('storage/' . $item->file_pdf) }}" class="btn btn-sm btn-info" target="_blank">
                        <i class="fas fa-file-pdf"></i> Lihat PDF
                    </a>
                @endif
            </div>
        </div>        @endforeach
    </div>

    <div class="d-flex justify-content-center my-4 pagination-custom">
        {{ $wartas->links() }}
    </div>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
