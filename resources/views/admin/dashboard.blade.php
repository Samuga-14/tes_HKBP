@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid px-4 py-6">

    <!-- Welcome Card -->
    <div class="card mb-6">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="card-title mb-2">Selamat Datang, {{ Auth::user()->name }}!</h2>
                    <div>
                        <span class="text-primary">Hari ini: {{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y') }}</span>
                    </div>
                </div>
            </div> 
        </div>        <div class="card-body">
            <p class="text-muted">Semoga harimu menyenangkan 🌟</p>
        </div>
    </div>
    <!-- Ulang Tahun -->
    <div class="space-y-3">
        <!-- Hari Ini + Stats -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-3">
            <!-- Hari Ini -->
            <div class="lg:col-span-1 border border-gray-200 rounded-lg overflow-hidden">
                <div class="px-3 py-2 bg-gray-50 border-b border-gray-200">
                    <h3 class="font-medium text-sm text-gray-800 flex items-center gap-1">
                        <i class="fas fa-birthday-cake text-xs text-yellow-600"></i>
                        <!-- <span>Hari Ini ({{ now()->format('d/m/Y') }})</span> -->
                    </h3>
                </div>
                @include('components.ulang-tahun', [
                    'jemaats' => App\Models\Jemaat::ulangTahunHariIni()->get(),
                    'hariIni' => true
                ])
            </div>
        </div>
        <br>                
        <!-- Bulan Ini -->
        <div class="space-y-3">
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <div class="px-3 py-2 bg-gray-50 border-b border-gray-200">
                    <h3 class="font-medium text-sm text-gray-800 flex items-center gap-1">
                        <i class="fas fa-calendar-alt text-xs text-blue-600"></i>
                        <!-- <span>Bulan {{ now()->format('m/Y') }}</span> -->
                    </h3>
                </div>
                @include('components.ulang-tahun', [
                    'jemaats' => App\Models\Jemaat::ulangTahunBulanIni()->limit(10)->get(),
                    'hariIni' => false
                ])
            </div>
        </div>
    </div>            
    <br><br>
    <!-- Stats Overview -->
    <div class="lg:col-span-2 bg-white border border-gray-200 rounded-lg p-3">
            <h3 class="font-medium text-sm mb-2">📊 Statistik</h3>
            <!-- Isi stats di sini -->
        </div>
    <div class="row mb-4">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="text-muted small">Total KK Jemaat</h3>
                            <p class="h3">{{ \App\Models\Jemaat::count() }}</p>
                        </div>
                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle">
                            <i class="fas fa-users text-primary"></i>
                        </div>
                    </div>
                    <div class="mt-3 small text-muted">
                        Total data KK jemaat terdaftar
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="text-muted small">Total Berita</h3>
                            <p class="h3">{{ \App\Models\Berita::count() }}</p>
                        </div>
                        <div class="bg-success bg-opacity-10 p-3 rounded-circle">
                            <i class="fas fa-newspaper text-success"></i>
                        </div>
                    </div>
                    <div class="mt-3 small text-muted">
                        Total berita yang dipublikasikan
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="text-muted small">Total Galeri</h3>
                            <p class="h3">{{ \App\Models\GaleriKegiatan::count() }}</p>
                        </div>
                        <div class="bg-info bg-opacity-10 p-3 rounded-circle">
                            <i class="fas fa-images text-info"></i>
                        </div>
                    </div>
                    <div class="mt-3 small text-muted">
                        Total foto kegiatan
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="text-muted small">Jumlah Pengurus Gereja</h3>
                            <p class="h3">{{ \App\Models\StrukturKepengurusan::count() }}</p>
                        </div>
                        <div class="bg-info bg-opacity-10 p-3 rounded-circle">
                            <i class="fas fa-images text-info"></i>
                        </div>
                    </div>
                    <div class="mt-3 small text-muted">
                        Total Jumlah pengurus gereja
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