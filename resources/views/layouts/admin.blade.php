<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - HKBP SIN-SIM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            font-family: 'Segoe UI', sans-serif;
            background-color: #F8F9FA;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #1A3960;
            position: fixed;
            top: 0;
            left: 0;
            color: white;
            padding: 20px 0;
            z-index: 100;
        }

        .sidebar h4 {
            text-align: center;
            font-weight: bold;
            color: white;
        }

        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: white;
            text-decoration: none;
            transition: background 0.3s, color 0.3s;
        }

        .sidebar a:hover, .sidebar a.active {
            background-color: #0D2A4A;
            color: #ffffff;
        }

        .layout-wrapper {
            display: flex;
            flex-direction: column;
            margin-left: 250px;
            min-height: 100vh;
            background-color: white;
            flex: 1;
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 10px 20px;
            border-bottom: 2px solid #e0e0e0;
            background-color: #ffffff;
        }

        .topbar h3 {
            font-weight: bold;
            margin-left: 15px;
            margin-right: 0;
            flex-grow: 1;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .profile-icon {
            width: 40px;
            height: 40px;
            background-color: #ddd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hamburger-icon {
            font-size: 24px;
            cursor: pointer;
            display: block;
            margin-right: 10px;
        }

        .main-content {
            flex: 1;
            padding: 20px 40px;
            position: relative;
            padding-bottom: 120px; /* beri ruang agar tombol tidak timpa footer */
        }

        footer {
            font-size: 14px;
            color: #555;
            text-align: center;
            padding: 20px 0;
            background-color: #f8f9fa;
            border-top: 1px solid #ddd;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .layout-wrapper {
                margin-left: 0;
            }

            .main-content {
                padding: 15px;
            }

            .hamburger-icon {
                display: block;
                margin-right: 10px;
            }

            .topbar {
                justify-content: space-between;
                padding: 10px;
            }

            .topbar h3 {
                font-size: 1.2rem;
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar d-flex flex-column">
    <h4>HKBP SIN - SIM</h4>
    <hr style="border-color: #ffffff44;">
    <a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <i class="fas fa-home me-2"></i> Dashboard
    </a>
    <a href="{{ route('admin.berita.index') }}" class="{{ request()->is('admin/berita*') ? 'active' : '' }}">
        <i class="fas fa-newspaper me-2"></i> Berita
    </a>
    <a href="{{ route('admin.galeri.index') }}" class="{{ request()->is('admin/galeri*') ? 'active' : '' }}">
        <i class="fas fa-images me-2"></i> Galeri Kegiatan
    </a>
    <a href="{{ route('admin.jemaat.index') }}" class="{{ request()->is('admin/jemaat*') ? 'active' : '' }}">
        <i class="fas fa-users me-2"></i> Data Jemaat
    </a>
    <a href="{{ route('admin.struktur.index') }}" class="{{ request()->is('admin/struktur*') ? 'active' : '' }}">
        <i class="fas fa-sitemap me-2"></i> Struktur Kepengurusan
    </a>
    <a href="{{ route('admin.warta.index') }}" class="{{ request()->is('admin/warta*') ? 'active' : '' }}">
        <i class="fas fa-book me-2"></i> Warta Jemaat
    </a>

    <form action="{{ route('logout') }}" method="POST" class="mt-auto px-3">
        @csrf
        <button type="submit" class="btn btn-outline-light w-100 mt-4">
            <i class="fas fa-sign-out-alt me-2"></i> Logout
        </button>
    </form>
</div>

<!-- Layout Wrapper -->
<div class="layout-wrapper">
    <div class="topbar">
        <div class="hamburger-icon">
            <i class="fas fa-bars"></i>
        </div>
        <h3>@yield('title')</h3>
        <div class="profile">
            <div class="profile-icon">
                <i class="fas fa-user"></i>
            </div>
            <strong>Admin Hkbp Sin-Sim</strong>
        </div>
    </div>

    <div class="main-content">
        @yield('content')
    </div>

    <footer>
        <strong>Copyright 2025.</strong> Institut Teknologi Del Kelompok PA 1
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
