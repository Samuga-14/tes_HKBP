<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warta Jemaat - HKBP Sinambela</title>
    <link rel="  website icon" href="{{ asset('images/hkbplogo.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/warta.css') }}" rel="stylesheet">
</head>
<body>

    @include('header')

    <section class="hero">
        <div class="hero-content">
          <h1 class="hero-title">Warta Gereja<br>HKBP Sinambela Simanullang</h1><br><br>
          <p>Melalui Warta Jemaat, kita dipersatukan dalam informasi dan kasih untuk bertumbuh bersama sebagai tubuh Kristus </p>
        </div>
    </section>
    
    <div class="section-title text-center mt-4 fw-semibold fs-5">
        Warta Jemaat HKBP Sinambela Simanullang
    </div>

   <div class="container py-4 warta-list">
    @foreach ($wartas as $item)
        <div class="warta-item d-flex justify-content-between align-items-center py-3 border-bottom">
            <!-- TANGGAL -->
            <div class="tanggal text-muted text-uppercase small" style="min-width: 120px;">
                {{ \Carbon\Carbon::parse($item->tanggal_terbit)->translatedFormat('d F Y') }}
            </div>

            <!-- JUDUL & DESKRIPSI -->
            <div class="judul flex-grow-1 px-3">
                <h5 class="fw-semibold">{{ $item->judul }}</h5>
                <p class="text-muted small">{{ Str::limit(strip_tags($item->deskripsi), 100) }}</p>
            </div>

            <!-- IKON DOWNLOAD & LIHAT -->
            <div class="aksi-buttons d-flex gap-2">
                @if ($item->file_pdf)
                    <a href="{{ asset('storage/' . $item->file_pdf) }}" class="btn btn-sm btn-outline btn-lihat" target="_blank">
                        <i class="fas fa-eye me-1"></i> Lihat
                    </a>
                    <a href="{{ asset('storage/' . $item->file_pdf) }}" class="btn btn-sm btn-outline-sm" target="_blank">
                        <i class="fas fa-file-pdf"></i> 
                        <i class="fas fa-download"></i>
                    </a>
                @endif
            </div>
        </div>       
    @endforeach
</div>

<!-- PAGINATION -->
<div class="d-flex justify-content-center my-4 pagination-custom">
    {{ $wartas->links() }}
</div>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
