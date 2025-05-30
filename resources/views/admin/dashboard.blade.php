@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid py-5">
    
    {{-- Welcome --}}
    <div class="card shadow-lg border-0 rounded-4 mb-5 bg-gradient bg-light">
        <div class="card-body py-5 px-4 d-flex flex-column gap-2">
            <h2 class="fw-bold text-dark mb-1">
                👋 Selamat Datang, {{ Auth::user()->name }}!
            </h2>
            <p class="text-muted">Hari ini: <strong class="text-primary">{{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y') }}</strong></p>
            <p class="text-secondary">Semoga harimu menyenangkan 🌟</p>
        </div>
    </div>

    {{-- Ulang Tahun --}}
    <div class="row g-4 mb-4 justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-md rounded-4 h-100">
                <div class="card-header bg-warning bg-opacity-10 border-0 rounded-top-4">
                    <h6 class="m-0 text-warning fw-semibold"><i class="fas fa-birthday-cake me-2"></i> Ulang Tahun Hari Ini</h6>
                </div>
                <div class="card-body">
                    @include('components.ulang-tahun', [
                        'jemaats' => App\Models\Jemaat::ulangTahunHariIni()->get(),
                        'hariIni' => true
                    ])
                </div>
            </div>
        </div>
    </div>
    {{-- Statistik --}}
    <div class="mb-5">
        <h5 class="fw-bold mb-3 text-dark">📊 Statistik Gerejawi </h5>
        <div class="row g-4">
            @php
                $stats = [
                    ['label' => 'Total Jumlah Jemaat', 'icon' => 'fa-users', 'color' => 'success', 'count' => \App\Models\Jemaat::count()],
                    ['label' => 'Jemaat Laki-laki', 'icon' => 'fa-male', 'color' => 'primary', 'count' => \App\Models\Jemaat::where('jenis_kelamin', 'L')->count()],
                    ['label' => 'Jemaat Perempuan', 'icon' => 'fa-female', 'color' => 'danger', 'count' => \App\Models\Jemaat::where('jenis_kelamin', 'P')->count()],
                    ['label' => 'Jumlah Pengurus Gereja', 'icon' => 'fa-sitemap', 'color' => 'warning', 'count' => \App\Models\StrukturKepengurusan::count()],
                ];
            @endphp

            @foreach($stats as $stat)
            <div class="col-md-3">
                <div class="card shadow-sm border-0 rounded-4 h-100 hover-grow">
                    <div class="card-body d-flex justify-content-between align-items-center p-4">
                        <div>
                            <p class="text-muted small mb-1">{{ $stat['label'] }}</p>
                            <h3 class="fw-semibold mb-0">{{ $stat['count'] }}</h3>
                        </div>
                        <div class="bg-{{ $stat['color'] }} bg-opacity-10 p-3 rounded-circle">
                            <i class="fas {{ $stat['icon'] }} text-{{ $stat['color'] }} fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- Menu Cepat --}}
     <h5 class="fw-bold mb-3 text-dark">☄️ Navigasi Cepat </h5>
    <div class="row g-4">
        @php
            $menus = [
                ['route' => 'admin.dashboard', 'icon' => 'fa-tachometer-alt', 'color' => 'primary', 'title' => 'Dashboard', 'desc' => 'Menu Utama'],
                ['route' => 'admin.berita.index', 'icon' => 'fa-newspaper', 'color' => 'success', 'title' => 'Berita', 'desc' => 'Informasi jemaat'],
                ['route' => 'admin.galeri.index', 'icon' => 'fa-images', 'color' => 'info', 'title' => 'Galeri Kegiatan', 'desc' => 'Dokumentasi'],
                ['route' => 'admin.jemaat.index', 'icon' => 'fa-users', 'color' => 'warning', 'title' => 'Data Jemaat', 'desc' => 'Anggota Gereja'],
                ['route' => 'admin.struktur.index', 'icon' => 'fa-sitemap', 'color' => 'danger', 'title' => 'Struktur Kepengurusan', 'desc' => 'Organisasi'],
                ['route' => 'admin.warta.index', 'icon' => 'fa-church', 'color' => 'secondary', 'title' => 'Warta Jemaat', 'desc' => 'Pengumuman'],
            ];
        @endphp

        @foreach($menus as $menu)
        <div class="col-md-4">
            <a href="{{ route($menu['route']) }}" class="text-decoration-none">
                <div class="card border-0 shadow-md rounded-4 hover-glow h-100">
                    <div class="card-body d-flex align-items-center gap-3 p-4">
                        <div class="bg-{{ $menu['color'] }} bg-opacity-10 p-3 rounded-circle">
                            <i class="fas {{ $menu['icon'] }} text-{{ $menu['color'] }} fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold text-dark mb-1">{{ $menu['title'] }}</h6>
                            <p class="text-muted small mb-0">{{ $menu['desc'] }}</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

{{-- Tambahan style --}}
<style>
.hover-glow:hover {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08) !important;
    transform: translateY(-2px);
    transition: all 0.3s ease;
}
.hover-grow {
    transition: all 0.2s ease-in-out;
}
.hover-grow:hover {
    transform: scale(1.02);
}
</style>
@endsection
