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
                <li class="nav-item">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sejarah">Sejarah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('berita.user')}}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('galeri.user')}}">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('warta.user')}}">Warta Jemaat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('pengurus.user')}}">Struktur Kepengurusan</a>
                </li>
            </ul>
            <div class="d-flex ms-auto">
                <a href="{{ route('login') }}" class="btn btn-login ms-0">Login</a>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Hover effect on navbar items */
    .navbar-nav .nav-item .nav-link {
        position: relative;
        font-size: 1rem;
        font-weight: 500;
        padding: 10px 15px;
        color: #333;
        transition: color 0.3s ease;
    }

    /* Underline animation on hover */
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
        width: 100%; /* Underline animation on hover */
    }

    .navbar-nav .nav-item .nav-link:hover {
        color: #007bff; /* Color change on hover */
    }

    /* Login button style */
    .btn-login {
        background-color: #002147; /* Set the desired color */
        color: white; /* Set text color to white */
        border: none; /* Remove border */
        font-weight: 500;
        padding: 8px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-login:hover {
        background-color: #00182c; /* Slightly darker shade on hover */
        transform: scale(1.05); /* Slight zoom on hover */
    }
</style>
