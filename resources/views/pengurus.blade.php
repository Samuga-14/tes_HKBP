<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Kepengurusan - HKBP Sinambela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .hero-section {
            background-image: url('{{ asset('images/gambar12.jpg') }}');
            background-size: cover;
            background-position: center;
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            color: white;
            text-align: center;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-text {
            position: relative;
            z-index: 2;
        }

        .section-title {
            background-color: #005fa3;
            color: white;
            text-align: center;
            padding: 2rem 1rem;
            font-weight: bold;
            font-size: 2rem;
        }

        .sub-section {
            padding: 2rem 1rem;
            text-align: center;
        }

        .person {
            text-align: center;
            margin-bottom: 2rem;
        }

        .person img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #ddd;
        }

        .person h5 {
            margin-top: 1rem;
            font-weight: 600;
            font-size: 1rem;
        }

        .person small {
            color: #666;
        }

        .section-description {
            max-width: 800px;
            margin: 0 auto 2rem;
            color: #666;
            font-size: 0.95rem;
        }
    </style>
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
                @foreach ([
                    ['img' => 'niky1.jpg', 'nama' => 'ST. NICKY MANULLANG', 'jabatan' => 'Sekretaris'],
                    ['img' => 'niky2.jpg', 'nama' => 'ST. NICKY MANULLANG', 'jabatan' => 'Anggota'],
                    ['img' => 'pegadian.jpg', 'nama' => 'ST. PEGADIAN', 'jabatan' => 'Ketua Ama'],
                    ['img' => 'niky3.jpg', 'nama' => 'ST. NICKY MANULLANG', 'jabatan' => 'Ama Ronsen'],
                    ['img' => 'saor.jpg', 'nama' => 'ST. SAOR MANULLANG', 'jabatan' => 'Sekretaris Marturia'],
                ] as $fungsionaris)
                <div class="col-6 col-md-4 col-lg-3 person">
                    <img src="{{ asset('images/' . $fungsionaris['img']) }}" alt="{{ $fungsionaris['nama'] }}">
                    <h5>{{ $fungsionaris['nama'] }}</h5>
                    <small>{{ $fungsionaris['jabatan'] }}</small>
                </div>
                @endforeach
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
                @foreach ([
                    ['img' => 'simamora.jpg', 'nama' => 'ST. SIMAMORA', 'jabatan' => 'Ketua'],
                    ['img' => 'bonatua.jpg', 'nama' => 'ST. BONATUA', 'jabatan' => 'Anggota'],
                    ['img' => 'hedrina.jpg', 'nama' => 'ST. HEDRINA', 'jabatan' => 'Anggota'],
                    ['img' => 'saut1.jpg', 'nama' => 'ST. SAUT SIMAMORA', 'jabatan' => 'Anggota'],
                    ['img' => 'saut2.jpg', 'nama' => 'ST. SAUT SIMAMORA', 'jabatan' => 'Anggota'],
                ] as $marturia)
                <div class="col-6 col-md-4 col-lg-3 person">
                    <img src="{{ asset('images/' . $marturia['img']) }}" alt="{{ $marturia['nama'] }}">
                    <h5>{{ $marturia['nama'] }}</h5>
                    <small>{{ $marturia['jabatan'] }}</small>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
