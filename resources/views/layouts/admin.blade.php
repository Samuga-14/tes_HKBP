<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - HKBP SIN-SIM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #F8F9FA;
            margin: 0;
            padding: 0;
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
            cursor: pointer;
        }

        .sidebar a:hover, .sidebar a.active {
            background-color: #0D2A4A;
            color: #ffffff;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px 40px;
            min-height: 100vh;
            background-color: white;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #e0e0e0;
        }

        .topbar h3 {
            font-weight: bold;
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
        }

        footer {
            font-size: 14px;
            color: #555;
            text-align: center;
            padding: 20px 0;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-content {
                margin-left: 0;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
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
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="topbar">
            <h3>@yield('title')</h3>
            <div class="profile">
                <div class="profile-icon d-flex align-items-center justify-content-center">
                    <i class="fas fa-user"></i>
                </div>
                <strong>Admin Hkbp Sin-Sim</strong>
            </div>
        </div>

        <!-- Content -->
        @yield('content')

        <!-- Footer -->
        <footer class="mt-5">
            <strong>Copyright 2025.</strong> Institut Teknologi Del Kelompok PA 1
        </footer>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
