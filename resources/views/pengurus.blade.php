<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Struktur Kepengurusan - HKBP Sinambela</title>
  <link rel="website icon" href="{{ asset('images/hkbplogo.png') }}" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/struktur.css') }}" />
</head>
<body>

  @include('header')

  <section class="hero-section">
    <div class="radial-lines"></div>
    <div class="hero-text">
      <p class="subtitle">STRUKTUR</p>
      <h1>KEPENGURUSAN</h1>
      <p class="tagline">Menjadi pelayan yang setia dalam tubuh Kristus</p>
    </div>
  </section>

  @php
    $data = [
      'Pendeta' => $pendeta,
      'Fungsionaris Gereja' => $fungsionaris,
      'Dewan Marturia' => $marturia,
      'Dewan Diakonia' => $diakonia,
      'Dewan Koinonia' => $koinonia,
      'Calon Sintua' => $calonsintua,
    ];

    $descriptions = [
      'Pendeta' => 'Pemimpin rohani yang membimbing jemaat dalam firman dan sakramen.',
      'Fungsionaris Gereja' => 'Orang-orang yang melayani dalam bidang administratif dan liturgi gereja.',
      'Dewan Marturia' => 'Melayani dan menyebarkan Injil Kristus di tengah jemaat dan masyarakat.',
      'Dewan Diakonia' => 'Bertugas dalam pelayanan sosial dan kemanusiaan.',
      'Dewan Koinonia' => 'Mempererat hubungan persaudaraan dan persekutuan umat.',
      'Calon Sintua' => 'Jemaat yang sedang dibina untuk menjadi penatua.',
    ];
  @endphp

  @foreach ($data as $section => $items)
    <section class="section-wrapper">
      <div class="section-title">{{ $section }}</div>
      <p class="section-description">{{ $descriptions[$section] }}</p>
      <div class="container person-grid">
        @foreach ($items as $item)
          <div class="person-card">
            <img src="{{ asset('images/struktur/' . $item->gambar) }}" alt="{{ $item->nama }}">
            <div class="card-content">
              <h5>{{ $item->nama }}</h5>
              <span>{{ $item->jabatan }}</span>
            </div>
          </div>
        @endforeach
      </div>
    </section>
  @endforeach

  @include('footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
