@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid px-4 py-6">

    <!-- Welcome Card -->
    <div class="card mb-6">
        < class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="card-title">Selamat Datang, {{ Auth::user()->name }}!</h2>
                <span class="text-primary">Hari ini: {{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y') }}</span>
            </div> 
        <div class="card-body">
            <p class="text-muted">Semoga harimu menyenangkan 🌟</p>
        </div>
    </div>

    <!-- Stats Overview -->
    <div class="row mb-4">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="text-muted small">Total Jemaat</h3>
                            <p class="h3">1,248</p>
                        </div>
                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle">
                            <i class="fas fa-users text-primary"></i>
                        </div>
                    </div>
                    <div class="mt-3 small text-muted">
                        <span class="text-success">+12%</span> dari bulan lalu
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="text-muted small">Berita Terbit</h3>
                            <p class="h3">24</p>
                        </div>
                        <div class="bg-success bg-opacity-10 p-3 rounded-circle">
                            <i class="fas fa-newspaper text-success"></i>
                        </div>
                    </div>
                    <div class="mt-3 small text-muted">
                        <span class="text-success">+3 baru</span> minggu ini
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="text-muted small">Kegiatan Terakhir</h3>
                            <p class="h3">5</p>
                        </div>
                        <div class="bg-info bg-opacity-10 p-3 rounded-circle">
                            <i class="fas fa-calendar-check text-info"></i>
                        </div>
                    </div>
                    <div class="mt-3 small text-muted">
                        <span class="text-success">2 aktif</span> saat ini
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Access Cards -->
    <div class="row mb-4">
        <div class="col-md-4 mb-4">
            <a href="{{ route('admin.dashboard') }}" class="card text-decoration-none h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                        <i class="fas fa-tachometer-alt text-primary"></i>
                    </div>
                    <div>
                        <h3 class="card-title mb-1">Dashboard</h3>
                        <p class="text-muted small mb-0">Menu Utama</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4 mb-4">
            <a href="{{ route('admin.berita.index') }}" class="card text-decoration-none h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-success bg-opacity-10 p-3 rounded-circle me-3">
                        <i class="fas fa-newspaper text-success"></i>
                    </div>
                    <div>
                        <h3 class="card-title mb-1">Berita</h3>
                        <p class="text-muted small mb-0">Informasi<br>jemaat</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4 mb-4">
            <a href="{{ route('admin.galeri.index') }}" class="card text-decoration-none h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-info bg-opacity-10 p-3 rounded-circle me-3">
                        <i class="fas fa-images text-info"></i>
                    </div>
                    <div>
                        <h3 class="card-title mb-1">Galeri Kegiatan</h3>
                        <p class="text-muted small mb-0">Dokumentasi</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4 mb-4">
            <a href="{{ route('admin.jemaat.index') }}" class="card text-decoration-none h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-warning bg-opacity-10 p-3 rounded-circle me-3">
                        <i class="fas fa-users text-warning"></i>
                    </div>
                    <div>
                        <h3 class="card-title mb-1">Data Jemaat</h3>
                        <p class="text-muted small mb-0">Anggota Gereja</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4 mb-4">
            <a href="{{ route('admin.struktur.index') }}" class="card text-decoration-none h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-danger bg-opacity-10 p-3 rounded-circle me-3">
                        <i class="fas fa-sitemap text-danger"></i>
                    </div>
                    <div>
                        <h3 class="card-title mb-1">Struktur Kepengurusan</h3>
                        <p class="text-muted small mb-0">Organisasi</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4 mb-4">
            <a href="{{ route('admin.warta.index') }}" class="card text-decoration-none h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-purple bg-opacity-10 p-3 rounded-circle me-3">
                        <i class="fas fa-church text-purple"></i>
                    </div>
                    <div>
                        <h3 class="card-title mb-1">Warta Jemaat</h3>
                        <p class="text-muted small mb-0">Pengumuman</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Aktivitas Terkini</h2>
        </div>
        <div class="card-body">
            <div class="d-flex align-items-start mb-4">
                <div class="bg-primary bg-opacity-10 p-2 rounded-circle me-3">
                    <i class="fas fa-user-plus text-primary"></i>
                </div>
                <div>
                    <h4 class="mb-1">Pengguna baru mendaftar</h4>
                    <p class="text-muted small mb-0">5 menit yang lalu</p>
                </div>
            </div>

            <div class="d-flex align-items-start mb-4">
                <div class="bg-success bg-opacity-10 p-2 rounded-circle me-3">
                    <i class="fas fa-check-circle text-success"></i>
                </div>
                <div>
                    <h4 class="mb-1">Transaksi berhasil</h4>
                    <p class="text-muted small mb-0">1 jam yang lalu</p>
                </div>
            </div>

            <div class="d-flex align-items-start mb-4">
                <div class="bg-warning bg-opacity-10 p-2 rounded-circle me-3">
                    <i class="fas fa-sync-alt text-warning"></i>
                </div>
                <div>
                    <h4 class="mb-1">Pembaruan sistem</h4>
                    <p class="text-muted small mb-0">2 jam yang lalu</p>
                </div>
            </div>

            <div class="d-flex align-items-start">
                <div class="bg-info bg-opacity-10 p-2 rounded-circle me-3">
                    <i class="fas fa-edit text-info"></i>
                </div>
                <div>
                    <h4 class="mb-1">Berita diperbarui</h4>
                    <p class="text-muted small mb-0">3 jam yang lalu</p>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
.card {
    border: 1px solid rgba(0,0,0,.125);
    transition: box-shadow 0.2s ease;
}

.card:hover {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

.card-title {
    margin-bottom: 0;
    font-size: 1.25rem;
}

.text-purple {
    color: #6f42c1;
}

.bg-purple {
    background-color: #6f42c1;
}

.rounded-circle {
    border-radius: 50%!important;
}
</style>
@endsection