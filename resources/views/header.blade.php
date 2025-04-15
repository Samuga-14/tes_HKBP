<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="/">
            <img src="{{ asset('images/hkbplogo.png') }}" alt="Logo HKBP" width="40" height="40">
            HKBP Sinambela Simanullang
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="/sejarah">Sejarah</a></li>
                <li class="nav-item"><a class="nav-link" href="/berita">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="/galeri">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="/warta">Warta Jemaat</a></li>
                <li class="nav-item"><a class="nav-link" href="/pengurus">Struktur Kepengurusan</a></li>
            </ul>
            <a href="{{ route('login') }}" class="btn btn-primary ms-3">Login</a>
        </div>
    </div>
</nav>
<div style="height: 70px;"></div> 
