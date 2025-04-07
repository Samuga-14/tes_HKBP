@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card bg-gradient-primary text-white hover-scale transition-all">
            <div class="card-body" style="border-radius: 15px;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="mb-0 font-weight-bold">Selamat Datang</h3>
                        <p class="mb-0 opacity-75">Admin Dashboard</p>
                    </div>
                    <i class="fas fa-user-shield fa-3x opacity-50 floating-icon"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card bg-gradient-success text-white hover-scale transition-all">
            <div class="card-body" style="border-radius: 15px;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="mb-0">Total Pengguna</h4>
                        <h2 class="mb-0 counter-animation">150</h2>
                    </div>
                    <i class="fas fa-users fa-3x opacity-50 pulse-animation"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card bg-gradient-info text-white hover-scale transition-all">
            <div class="card-body" style="border-radius: 15px;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="mb-0">Total Transaksi</h4>
                        <h2 class="mb-0 counter-animation">50</h2>
                    </div>
                    <i class="fas fa-shopping-cart fa-3x opacity-50 shake-animation"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 mb-4">
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
    <div class="col-lg-4 mb-4">
        <div class="card shadow-lg hover-lift">
            <div class="card-header bg-white border-0">
                <h5 class="card-title mb-0 font-weight-bold">
                    <i class="fas fa-chart-line text-success me-2"></i>
                    Statistik
                </h5>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3 align-items-center">
                    <span class="font-weight-bold">Pengunjung</span>
                    <span class="badge bg-success">+24%</span>
                </div>
                <div class="progress mb-4" style="height: 10px; border-radius: 10px;">
                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 75%"></div>
                </div>
                <div class="d-flex justify-content-between mb-3 align-items-center">
                    <span class="font-weight-bold">Penjualan</span>
                    <span class="badge bg-primary">+15%</span>
                </div>
                <div class="progress" style="height: 10px; border-radius: 10px;">
                    <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width: 60%"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.hover-scale:hover {
    transform: scale(1.03);
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

.shake-animation:hover {
    animation: shake 0.5s ease-in-out;
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

@keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(5px); }
    50% { transform: translateX(-5px); }
    75% { transform: translateX(5px); }
    100% { transform: translateX(0); }
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