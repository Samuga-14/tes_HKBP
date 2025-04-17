<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Struktur Kepengurusan - HKBP Sinambela</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/struktur.css') }}" />
</head>
<body>

  @include('header')

  <section class="hero-section">
    <div class="hero-text">
      <h1>Struktur Kepengurusan</h1>
      <p>Menjadi pelayan yang setia dalam tubuh Kristus</p>
    </div>
  </section>

  <section class="section-wrapper">
    <div class="section-title">Pendeta</div>
    <p class="section-description">Pendeta adalah pemimpin rohani yang membimbing jemaat dalam firman dan pelayanan sakramen.</p>
    <div class="container person-grid">
      <div class="person-card">
        <img src="{{ asset('images/sinsim2.png') }}" alt="PDT. Tony Nainggolan">
        <h5>PDT. TONY NAINGGOLAN</h5>
        <span>Pendeta Resort</span>
      </div>
      <div class="person-card">
        <img src="{{ asset('images/sinsim2.png') }}" alt="PDT. Imanuel Sitorus">
        <h5>PDT. IMANUEL D. SITORUS</h5>
        <span>Pendeta Fungsional</span>
      </div>
    </div>
  </section>

  <section class="section-wrapper">
    <div class="section-title">Fungsionaris Gereja</div>
    <p class="section-description">Orang-orang yang mendedikasikan diri dalam tugas administratif dan pelayanan gereja.</p>
    <div class="container person-grid">
      <div class="person-card">
        <img src="{{ asset('images/sinsim2.png') }}" alt="Sekretaris">
        <h5>ST. NICKY MANULLANG</h5>
        <span>Sekretaris</span>
      </div>
      <div class="person-card">
        <img src="{{ asset('images/sinsim2.png') }}" alt="Anggota">
        <h5>ST. NICKY MANULLANG</h5>
        <span>Anggota</span>
      </div>
      <div class="person-card">
        <img src="{{ asset('images/sinsim2.png') }}" alt="Ketua Ama">
        <h5>ST. PEGADIAN</h5>
        <span>Ketua Ama</span>
      </div>
      <div class="person-card">
        <img src="{{ asset('images/sinsim2.png') }}" alt="Ama Ronsen">
        <h5>ST. NICKY MANULLANG</h5>
        <span>Ama Ronsen</span>
      </div>
      <div class="person-card">
        <img src="{{ asset('images/sinsim2.png') }}" alt="Sekretaris Marturia">
        <h5>ST. SAOR MANULLANG</h5>
        <span>Sekretaris Marturia</span>
      </div>
    </div>
  </section>

  <section class="section-wrapper">
    <div class="section-title">Dewan Marturia</div>
    <p class="section-description">Dewan yang bertugas untuk melayani dan menyebarkan Injil Kristus di tengah jemaat dan masyarakat.</p>
    <div class="container person-grid">
      <div class="person-card">
        <img src="{{ asset('images/sinsim2.png') }}" alt="Ketua Marturia">
        <h5>ST. SIMAMORA</h5>
        <span>Ketua</span>
      </div>
      <div class="person-card">
        <img src="{{ asset('images/sinsim2.png') }}" alt="Anggota">
        <h5>ST. BONATUA</h5>
        <span>Anggota</span>
      </div>
      <div class="person-card">
        <img src="{{ asset('images/sinsim2.png') }}" alt="Anggota">
        <h5>ST. HEDRINA</h5>
        <span>Anggota</span>
      </div>
      <div class="person-card">
        <img src="{{ asset('images/sinsim2.png') }}" alt="Anggota">
        <h5>ST. SAUT SIMAMORA</h5>
        <span>Anggota</span>
      </div>
    </div>
  </section>

  @include('footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
