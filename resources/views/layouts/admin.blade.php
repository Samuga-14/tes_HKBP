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
        body {
            font-family: 'Poppins', sans-serif;
        }
        .main-sidebar {
            background: linear-gradient(180deg, #4267B2 0%, #364F88 100%);
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .nav-link {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 8px;
            margin: 6px 12px;
            padding: 12px 15px;
            position: relative;
            overflow: hidden;
        }
        .nav-link:before {
            content: '';
            position: absolute;
            left: -100%;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .nav-link:hover:before {
            left: 0;
        }
        .nav-link:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateX(8px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }
        .brand-link {
            background: rgba(255, 255, 255, 0.08);
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            padding: 20px;
            text-align: center;
            font-size: 1.4rem;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .content-wrapper {
            background: #f8f9fa;
        }
        .main-header {
            background: #ffffff;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        }
        .nav-item i {
            margin-right: 12px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            font-size: 1.1rem;
        }
        .nav-link:hover i {
            transform: scale(1.2) rotate(10deg);
            color: #E7F0FF;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
        }
        .sidebar .nav-link:hover {
            color: white !important;
            letter-spacing: 1px;
        }
        .sidebar .nav-link p {
            margin: 0;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .navbar-nav {
            display: flex;
            align-items: center;
        }
        .navbar-nav .nav-link {
            padding: 10px 15px;
            border-radius: 8px;
            margin: 0 5px;
            color: #4267B2;
            font-weight: 500;
        }
        .navbar-nav .nav-link:hover {
            background: rgba(66, 103, 178, 0.1);
            color: #2d4373;
        }
        .main-header .nav-link[data-widget="pushmenu"] {
            font-size: 1.2rem;
            padding: 12px;
            background: rgba(66, 103, 178, 0.05);
            border-radius: 50%;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .main-header .nav-link[data-widget="pushmenu"]:hover {
            background: rgba(66, 103, 178, 0.1);
            transform: rotate(180deg);
        }
        .sidebar {
            padding-top: 10px;
        }
        .nav-sidebar {
            margin-top: 15px;
        }
        .nav-sidebar .nav-item {
            margin-bottom: 5px;
            transform-origin: left;
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .nav-sidebar .nav-item:hover {
            transform: scale(1.02);
        }
        .brand-link .brand-text {
            color: white;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
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
            <li class="nav-item">
                <a href="{{ route('logout') }}"
                   class="nav-link"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="admin/dashboard" class="brand-link">
            <span class="brand-text">HKBP SIN - SIM</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.berita.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>Berita</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.galeri.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-images"></i>
                            <p>Galeri Kegiatan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.jemaat.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Data Jemaat</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.kepengurusan.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-bullhorn"></i>
                            <p>Struktur Kepengurusan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.warta.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>Warta</p>
                        </a>
                    </li>
                    <li class="nav-item">
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