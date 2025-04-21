<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        /* Previous styles remain the same */
        .navbar-nav .nav-link.logout-btn {
            background: rgba(220, 53, 69, 0.1);
            color: #dc3545;
            padding: 12px 25px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        
        .navbar-nav .nav-link.logout-btn:hover {
            background: #dc3545;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(220, 53, 69, 0.3);
        }
        
        .navbar-nav .nav-link.logout-btn i {
            font-size: 1.1rem;
            transition: transform 0.3s ease;
        }
        
        .navbar-nav .nav-link.logout-btn:hover i {
            transform: translateX(3px);
        }
        
        .navbar-nav .nav-link.logout-btn span {
            font-weight: 500;
            display: none;
        }
        
        @media (min-width: 768px) {
            .navbar-nav .nav-link.logout-btn span {
                display: inline;
            }
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{ route('logout') }}"
                   class="nav-link logout-btn"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>

    <!-- Rest of the code remains the same -->
    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="admin/dashboard" class="brand-link">
            <span class="brand-text">HKBP SIN - SIM</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item" style="--item-index: 1">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item" style="--item-index: 2">
                        <a href="{{ route('admin.berita.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>Berita</p>
                        </a>
                    </li>
                    <li class="nav-item" style="--item-index: 3">
                        <a href="{{ route('admin.galeri.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-images"></i>
                            <p>Galeri Kegiatan</p>
                        </a>
                    </li>
                    <li class="nav-item" style="--item-index: 4">
                        <a href="{{ route('admin.jemaat.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Data Jemaat</p>
                        </a>
                    </li>
                    <li class="nav-item" style="--item-index: 5">
                        <a href="{{ route('admin.struktur.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-bullhorn"></i>
                            <p>Struktur Kepengurusan</p>
                        </a>
                    </li>
                    <li class="nav-item" style="--item-index: 6">
                        <a href="{{ route('admin.warta.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>Warta</p>
                        </a>
                    </li>
                    <li class="nav-item" style="--item-index: 7">
                        <a href="{{ route('logout') }}"
                           class="nav-link"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
        </div>  
    </aside>

    <!-- Content -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <h1 class="m-0">@yield('title')</h1>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="main-footer">
        <strong>Copyright © 2025.</strong> All rights reserved.
    </footer>
</div>

<!-- Tambahan JS agar pushmenu aktif -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>