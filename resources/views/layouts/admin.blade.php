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
            transition: width 0.3s ease-in-out, transform 0.3s ease-in-out;
            width: 240px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .sidebar-mini.sidebar-collapse .main-sidebar {
            width: 4.6rem;
        }
        .brand-link {
            background-color: #102A63;
            text-align: center;
            font-weight: bold;
            font-size: 16px;
            padding: 15px;
            letter-spacing: 0.5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .nav-sidebar {
            padding: 0 8px;
        }
        .nav-sidebar .nav-link {
            color: #fff;
            font-weight: 500;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-size: 14px;
            padding: 12px 15px;
            margin: 4px 0;
            border-radius: 8px;
            display: flex;
            align-items: center;
        }
        .nav-sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .nav-sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.9);
            color: #1778C1;
            transform: translateX(4px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .nav-sidebar .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.7);
            color: #1778C1;
            transform: translateX(8px);
        }
        .nav-sidebar .nav-link:hover i {
            transform: rotate(5deg);
        }
        .main-header {
            background-color: #fff;
            border-bottom: 1px solid #ccc;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        .main-header .user-panel {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .main-header .user-panel img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .content-wrapper {
            background: #fff;
        }
        .main-footer {
            background: #fff;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            border-top: 1px solid #eee;
        }
        .nav-link.logout {
            color: #fff !important;
            background-color: #102A63;
            margin: 15px 15px;
            border-radius: 8px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-align: center;
            font-size: 14px;
            padding: 12px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .nav-link.logout:hover {
            background-color: #1a3a7a;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
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