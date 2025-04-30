<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <!-- Font dan Icon -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .main-sidebar {
            background-color: #1778C1;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            width: 250px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .sidebar-mini.sidebar-collapse .main-sidebar {
            width: 4.6rem;
            transform: translateX(0);
        }
        .brand-link {
            background-color: #102A63;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            padding: 18px;
            letter-spacing: 0.8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            color: #ffffff !important;
            text-transform: uppercase;
        }
        .nav-sidebar {
            padding: 0 12px;
        }
        .nav-sidebar .nav-link {
            color: #fff;
            font-weight: 500;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            font-size: 14.5px;
            padding: 14px 16px;
            margin: 5px 0;
            border-radius: 10px;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        .nav-sidebar .nav-link::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(-100%);
            transition: transform 0.4s ease;
        }
        .nav-sidebar .nav-link:hover::before {
            transform: translateX(0);
        }
        .nav-sidebar .nav-link i {
            margin-right: 12px;
            width: 22px;
            text-align: center;
            transition: all 0.4s ease;
        }
        .nav-sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.95);
            color:rgb(8, 13, 157);
            transform: translateX(4px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        .nav-sidebar .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.8);
            color: #1778C1;
            transform: translateX(8px);
        }
        .nav-sidebar .nav-link:hover i {
            transform: rotate(8deg) scale(1.1);
        }
        .main-header {
            background-color: #fff;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 25px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        .main-header .user-panel {
            display: flex;
            align-items: center;
            gap: 12px;
            transition: all 0.3s ease;
        }
        .main-header .user-panel:hover {
            transform: translateY(-2px);
        }
        .main-header .user-panel img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.15);
            border: 2px solid #1778C1;
            transition: all 0.3s ease;
        }
        .main-header .user-panel img:hover {
            transform: rotate(360deg);
        }
        .content-wrapper {
            background: #f8f9fa;
            transition: all 0.3s ease;
        }
        .main-footer {
            background: #fff;
            text-align: center;
            padding: 18px;
            font-size: 14px;
            border-top: 1px solid #eee;
            transition: all 0.3s ease;
        }
        .nav-link.logout {
            color: #fff !important;
            background-color: #102A63;
            margin: 15px 15px;
            border-radius: 10px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            text-align: center;
            font-size: 14px;
            padding: 14px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
        }
        .nav-link.logout:hover {
            background-color: #1a3a7a;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <h4 class="mb-0">Dashboard</h4>
        <div class="user-panel">
            <img src="https://ui-avatars.com/api/?name=Admin&background=random" alt="User Image">
            <span style="font-weight:600;">Admin Hkbp Sin-Sim</span>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar elevation-4">
        <a href="#" class="brand-link">
            HKBP SIN - SIM
        </a>

        <div class="sidebar">
            <nav class="mt-3">
                <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th-large"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.berita.index') }}" class="nav-link {{ request()->routeIs('admin.berita.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>Berita</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.galeri.index') }}" class="nav-link {{ request()->routeIs('admin.galeri.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-image"></i>
                            <p>Galeri Kegiatan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.jemaat.index') }}" class="nav-link {{ request()->routeIs('admin.jemaat.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Data Jemaat</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.struktur.index') }}" class="nav-link {{ request()->routeIs('admin.struktur.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-sitemap"></i>
                            <p>Struktur Kepengurusan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.warta.index') }}" class="nav-link {{ request()->routeIs('admin.warta.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>Warta Jemaat</p>
                        </a>
                    </li>
                    <div>
                    <li class="nav-item mt-auto">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </form>
                    </li>
                    </div>                    
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content -->
    <div class="content-wrapper">
        <section class="content pt-3">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="main-footer">
        <strong>Copyright 2025</strong> Institut Teknologi Del | Kelompok PA 1
    </footer>

</div>

<!-- Script -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>