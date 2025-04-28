@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">

    <!-- Selamat Datang Admin -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm text-center p-4 bg-light">
            <h1 class="display-5 font-weight-bold mb-2">Selamat Datang, {{ Auth::user()->name }}!</h1>
            <p class="lead text-muted">Semoga harimu menyenangkan 🌟</p>
            </div>
        </div>
    </div>

    <!-- Kartu Statistik -->
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card bg-primary text-white text-center shadow-sm hover-scale transition-all">
                <div class="card-body">
                    <i class="fas fa-user-shield fa-3x mb-3 floating-icon"></i>
                    <h5 class="card-title">Total Pengguna</h5>
                    <h2 class="card-text counter-animation">150</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card bg-success text-white text-center shadow-sm hover-scale transition-all">
                <div class="card-body">
                    <i class="fas fa-shopping-cart fa-3x mb-3 pulse-animation"></i>
                    <h5 class="card-title">Total Transaksi</h5>
                    <h2 class="card-text counter-animation">50</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card bg-info text-white text-center shadow-sm hover-scale transition-all">
                <div class="card-body">
                    <i class="fas fa-chart-line fa-3x mb-3"></i>
                    <h5 class="card-title">Statistik Kunjungan</h5>
                    <h2 class="card-text counter-animation">75%</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Aktivitas Terkini -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow-lg hover-lift">
                <div class="card-header bg-white border-0">
                    <h5 class="card-title mb-0 font-weight-bold">
                        <i class="fas fa-history text-primary me-2"></i>
                        Aktivitas Terkini
                    </h5>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="timeline-item fade-in-up">
                            <i class="fas fa-circle text-primary pulse"></i>
                            <p class="mb-2 font-weight-bold">Pengguna baru mendaftar</p>
                            <small class="text-muted"><i class="fas fa-clock me-1"></i>5 menit yang lalu</small>
                        </div>
                        <div class="timeline-item fade-in-up" style="animation-delay: 0.2s;">
                            <i class="fas fa-circle text-success pulse"></i>
                            <p class="mb-2 font-weight-bold">Transaksi berhasil</p>
                            <small class="text-muted"><i class="fas fa-clock me-1"></i>1 jam yang lalu</small>
                        </div>
                        <div class="timeline-item fade-in-up" style="animation-delay: 0.4s;">
                            <i class="fas fa-circle text-warning pulse"></i>
                            <p class="mb-2 font-weight-bold">Pembaruan sistem</p>
                            <small class="text-muted"><i class="fas fa-clock me-1"></i>2 jam yang lalu</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Style animasi sama kayak sebelumnya -->
<style>
.hover-scale:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease;
}

.hover-lift:hover {
    transform: translateY(-5px);
    transition: transform 0.3s ease;
}

.transition-all {
    transition: all 0.3s ease;
}

.floating-icon {
    animation: float 3s ease-in-out infinite;
}

.pulse-animation {
    animation: pulse 2s infinite;
}

.counter-animation {
    opacity: 0;
    animation: countUp 1s forwards;
}

.fade-in-up {
    opacity: 0;
    animation: fadeInUp 0.5s forwards;
}

.pulse {
    animation: pulse 2s infinite;
}

@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

@keyframes countUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.timeline-item {
    position: relative;
    padding-left: 30px;
    margin-bottom: 20px;
}

.timeline-item i.fas.fa-circle {
    position: absolute;
    left: 0;
    top: 5px;
    font-size: 12px;
}

.card {
    border: none;
    border-radius: 15px;
    overflow: hidden;
}
</style>
@endsection
