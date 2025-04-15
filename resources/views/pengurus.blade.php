<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Kepengurusan - HKBP Sinambela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/struktur.css') }}" rel="stylesheet">
</head>
<body>

    {{-- Header --}}
    @include('header')

    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="hero-text">
            <h1 class="display-5 fw-bold">Struktur Kepengurusan</h1>
        </div>
    </section>

    {{-- Pendeta --}}
    <div class="section-title">Pendeta</div>
    <div class="sub-section">
        <p class="section-description">
            Pendeta adalah pemimpin rohani dalam jemaat HKBP. Mereka melayani umat Tuhan dalam mengajarkan firman-Nya,
            membaptis, memberkati jemaat, dan memimpin sakramen serta ibadah.
        </p>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 person">
                    <img src="{{ asset('images/pendeta1.jpg') }}" alt="Pendeta Resort">
                    <h5>PDT. MANGARA MANURUNG</h5>
                    <small>Pendeta Resort</small>
                </div>
                <div class="col-12 col-md-4 person">
                    <img src="{{ asset('images/pendeta2.jpg') }}" alt="Pendeta Fungsional">
                    <h5>PDT. MANGARA MANURUNG</h5>
                    <small>Pendeta Fungsional</small>
                </div>
            </div>
        </div>
    </div>

    {{-- Fungsionaris Gereja --}}
    <div class="section-title">Fungsionaris Gereja</div>
    <div class="sub-section">
        <p class="section-description">
            Fungsionaris gereja adalah orang-orang yang memiliki tugas dan tanggung jawab tertentu dalam pelayanan dan kegiatan gereja.
        </p>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-4 col-lg-3 person">
                    <img src="{{ asset('images/niky1.jpg') }}" alt="ST. NICKY MANULLANG">
                    <h5>ST. NICKY MANULLANG</h5>
                    <small>Sekretaris</small>
                </div>
                <div class="col-6 col-md-4 col-lg-3 person">
                    <img src="{{ asset('images/niky2.jpg') }}" alt="ST. NICKY MANULLANG">
                    <h5>ST. NICKY MANULLANG</h5>
                    <small>Anggota</small>
                </div>
                <div class="col-6 col-md-4 col-lg-3 person">
                    <img src="{{ asset('images/pegadian.jpg') }}" alt="ST. PEGADIAN">
                    <h5>ST. PEGADIAN</h5>
                    <small>Ketua Ama</small>
                </div>
                <div class="col-6 col-md-4 col-lg-3 person">
                    <img src="{{ asset('images/niky3.jpg') }}" alt="ST. NICKY MANULLANG">
                    <h5>ST. NICKY MANULLANG</h5>
                    <small>Ama Ronsen</small>
                </div>
                <div class="col-6 col-md-4 col-lg-3 person">
                    <img src="{{ asset('images/saor.jpg') }}" alt="ST. SAOR MANULLANG">
                    <h5>ST. SAOR MANULLANG</h5>
                    <small>Sekretaris Marturia</small>
                </div>
            </div>
        </div>
    </div>

    {{-- Dewan Marturia --}}
    <div class="section-title">Dewan Marturia</div>
    <div class="sub-section">
        <p class="section-description">
            Dewan Marturia adalah organ penting yang bertanggung jawab untuk meneruskan dan melaksanakan kegiatan pemberitaan Injil di tengah jemaat dan masyarakat.
        </p>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-4 col-lg-3 person">
                    <img src="{{ asset('images/simamora.jpg') }}" alt="ST. SIMAMORA">
                    <h5>ST. SIMAMORA</h5>
                    <small>Ketua</small>
                </div>
                <div class="col-6 col-md-4 col-lg-3 person">
                    <img src="{{ asset('images/bonatua.jpg') }}" alt="ST. BONATUA">
                    <h5>ST. BONATUA</h5>
                    <small>Anggota</small>
                </div>
                <div class="col-6 col-md-4 col-lg-3 person">
                    <img src="{{ asset('images/hedrina.jpg') }}" alt="ST. HEDRINA">
                    <h5>ST. HEDRINA</h5>
                    <small>Anggota</small>
                </div>
                <div class="col-6 col-md-4 col-lg-3 person">
                    <img src="{{ asset('images/saut1.jpg') }}" alt="ST. SAUT SIMAMORA">
                    <h5>ST. SAUT SIMAMORA</h5>
                    <small>Anggota</small>
                </div>
                <div class="col-6 col-md-4 col-lg-3 person">
                    <img src="{{ asset('images/saut2.jpg') }}" alt="ST. SAUT SIMAMORA">
                    <h5>ST. SAUT SIMAMORA</h5>
                    <small>Anggota</small>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
