<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="/">
            <img src="{{ asset('images/hkbplogo.png') }}" alt="Logo HKBP" width="40" height="40">
            <div class="d-flex flex-column">
                <span style="font-size: 1.2rem;">HKBP</span>
                <span style="font-size: 1rem;">SINAMBELA-SIMANULLANG</span>
            </div>
        </a>        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('sejarah') ? 'active' : '' }}" href="/sejarah">Sejarah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('berita.user') ? 'active' : '' }}" href="{{ route('berita.user') }}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('galeri.user') ? 'active' : '' }}" href="{{ route('galeri.user') }}">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('warta.user') ? 'active' : '' }}" href="{{ route('warta.user') }}">Warta Jemaat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pengurus.user') ? 'active' : '' }}" href="{{ route('pengurus.user') }}">Struktur Kepengurusan</a>
                </li>
            </ul>
            {{-- <div class="d-flex ms-4">
                <a href="{{ route('login') }}" class="btn btn-login">Login</a>
            </div> --}}
        </div>
    </div>
</nav>

<style>
    /* Navbar base style */
    .navbar {
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    /* Navbar link styling */
    .navbar-nav .nav-item .nav-link {
        position: relative;
        font-size: 1rem;
        font-weight: 500;
        padding: 10px 15px;
        color: #333;
        margin-right: 20px;
        transition: color 0.3s ease;
    }

    /* Underline animation */
    .navbar-nav .nav-item .nav-link::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: rgb(8, 38, 69);
        transition: width 0.3s ease;
    }

    .navbar-nav .nav-item .nav-link:hover::after {
        width: 100%;
    }

    .navbar-nav .nav-item .nav-link:hover {
        color: #002147;
    }

    /* Active menu link */
    .navbar-nav .nav-item .nav-link.active {
        color: #002147;
        font-weight: 700;
    }

    .navbar-nav .nav-item .nav-link.active::after {
        width: 100%;
    }

    /* Login button */
    .btn-login {
        background-color: #002147 !important;
        color: white !important;
        border: none !important;
        font-weight: 500;
        padding: 8px 20px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .btn-login:hover {
        background-color: transparent !important;
        color: #002147 !important;
        border: 2px solid #002147 !important;
        transform: scale(1.05);
    }


    @media (max-width: 991.98px) {
    .navbar-collapse {
        text-align: left;
    }

    .navbar-nav {
        align-items: flex-end !important;
    }

    .navbar-nav .nav-item {
        width: 100%;
    }

    .navbar-nav .nav-link {
        display: inline-block;
        width: auto;
    }

    .btn-login {
        margin-right: auto;
    }

    .navbar .d-flex.ms-4 {
        justify-content: flex-end;
        width: 100%;
        margin-top: 10px;
    }
}

</style>
