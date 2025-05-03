<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <!-- Font dan Icon -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">

    <style>
        :root {
            --primary: #3b82f6;
            --primary-hover: #2563eb;
            --danger: #ef4444;
            --danger-hover: #dc2626;
            --success: #10b981;
            --warning: #f59e0b;
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-700: #374151;
            --gray-900: #111827;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--gray-50);
        }
        
        /* Sidebar Redesign */
        .main-sidebar {
            background-color: white;
            border-right: 1px solid var(--gray-200);
            width: 250px;
            box-shadow: none;
        }
        
        .brand-link {
            background-color: white;
            color: var(--gray-900) !important;
            font-weight: 700;
            font-size: 1.25rem;
            padding: 1.5rem;
            border-bottom: 1px solid var(--gray-200);
            text-transform: none;
            letter-spacing: normal;
        }
        
        .nav-sidebar .nav-link {
            color: var(--gray-700);
            font-weight: 500;
            font-size: 0.875rem;
            padding: 0.75rem 1rem;
            margin: 0.25rem 0;
            border-radius: 0.375rem;
            display: flex;
            align-items: center;
            transition: all 0.2s ease;
        }
        
        .nav-sidebar .nav-link:hover {
            background-color: var(--gray-100);
            color: var(--primary);
            transform: none;
        }
        
        .nav-sidebar .nav-link.active {
            background-color: var(--primary);
            color: white;
            box-shadow: none;
            transform: none;
        }
        
        .nav-sidebar .nav-link i {
            margin-right: 0.75rem;
            width: 1.25rem;
            text-align: center;
            transition: none;
        }
        
        /* Header Redesign */
        .main-header {
            background-color: white;
            border-bottom: 1px solid var(--gray-200);
            padding: 0.75rem 1.5rem;
            box-shadow: none;
        }
        
        .main-header .user-panel {
            gap: 0.75rem;
        }
        
        .main-header .user-panel img {
            width: 36px;
            height: 36px;
            border: 2px solid var(--gray-200);
        }
        
        /* Content Area */
        .content-wrapper {
            background-color: var(--gray-50);
        }
        
        /* Card Styles */
        .filament-card {
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            border: 1px solid var(--gray-200);
            margin-bottom: 1.5rem;
        }
        
        .card-header {
            padding: 1rem 1.5rem;
            border-bottom: 1px solid var(--gray-200);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .card-title {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--gray-900);
            margin: 0;
        }
        
        /* Button Styles */
        .filament-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-weight: 500;
            font-size: 0.875rem;
            transition: all 0.2s;
            cursor: pointer;
            border: none;
        }
        
        .button-primary {
            background-color: var(--primary);
            color: white;
        }
        
        .button-primary:hover {
            background-color: var(--primary-hover);
        }
        
        /* Table Styles */
        .filament-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .filament-table thead tr {
            background-color: var(--gray-50);
            border-bottom: 1px solid var(--gray-200);
        }
        
        .filament-table th {
            padding: 0.75rem 1rem;
            text-align: left;
            font-weight: 600;
            color: var(--gray-700);
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        .filament-table td {
            padding: 1rem;
            border-bottom: 1px solid var(--gray-200);
            vertical-align: middle;
        }
        
        /* Form Styles */
        .filament-form-input {
            width: 100%;
            padding: 0.5rem 0.75rem;
            border-radius: 0.375rem;
            border: 1px solid var(--gray-300);
            background-color: white;
            transition: all 0.2s;
        }
        
        .filament-form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 1px var(--primary);
        }
        
        /* Pagination */
        .filament-pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1.5rem;
        }
        
        .pagination-info {
            font-size: 0.875rem;
            color: var(--gray-700);
        }
        
        .pagination-links {
            display: flex;
            gap: 0.5rem;
        }
        
        .page-link {
            padding: 0.5rem 0.75rem;
            border-radius: 0.375rem;
            background-color: white;
            border: 1px solid var(--gray-200);
            color: var(--gray-700);
            text-decoration: none;
            font-size: 0.875rem;
        }
        
        .page-link.active {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }
        
        /* Logout Button */
        .nav-link.logout {
            background-color: var(--gray-100);
            color: var(--gray-700) !important;
            margin: 0.5rem;
            border-radius: 0.375rem;
            transition: all 0.2s ease;
        }
        
        .nav-link.logout:hover {
            background-color: var(--gray-200);
            color: var(--gray-900) !important;
            transform: none;
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
        <h4 class="mb-0" style="font-weight: 600;">@yield('title', 'Dashboard')</h4>
        <div class="user-panel">
            <img src="https://ui-avatars.com/api/?name=Admin&background=random" alt="User Image">
            <span style="font-weight:500;">Admin HKBP</span>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar elevation-4">
        <a href="#" class="brand-link">
            <i class="fas fa-church mr-2"></i>
            <span>HKBP SIN-SIM</span>
        </a>

        <div class="sidebar">
            <nav class="mt-2">
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
                    <li class="nav-item mt-3">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" class="nav-link logout">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </form>
                    </li>                  
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content -->
    <div class="content-wrapper">
        <section class="content pt-4">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="main-footer" style="background-color: white; border-top: 1px solid var(--gray-200);">
        <strong>Copyright © 2025</strong> Institut Teknologi Del | Kelompok PA 1
    </footer>

</div>

<!-- Script -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>