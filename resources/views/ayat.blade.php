<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Ayat Harian - HKBP Sinambela Simanullang</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/ayat.css') }}" />
</head>
<body>

  {{-- Header --}}
  @include('header')

  <!-- Hero -->
  <section class="hero-ayat">
    <div class="hero-text">
      <h1 class="display-6 fw-bold">Ayat Harian HKBP Sinambela Simanullang</h1>
    </div>
  </section>

  <!-- Section Title -->
  <div class="section-title">
    Firman Tuhan Hari Ini
  </div>

  <!-- Ayat List -->
  <section class="devotional-section">
    <div class="container">
      <div class="ayat-box">
        <h6>Yesaya 41:10</h6>
        <p>"Janganlah takut, sebab Aku menyertai engkau..."</p>
      </div>
      <div class="ayat-box">
        <h6>Mazmur 23:1</h6>
        <p>"Tuhan adalah gembalaku, takkan kekurangan aku."</p>
      </div>
      <div class="ayat-box">
        <h6>Yeremia 29:11</h6>
        <p>"Sebab Aku ini mengetahui rancangan-rancangan apa yang ada pada-Ku mengenai kamu."</p>
      </div>
      <div class="ayat-box">
        <h6>Filipi 4:13</h6>
        <p>"Segala perkara dapat kutanggung di dalam Dia yang memberi kekuatan kepadaku."</p>
      </div>
      <div class="ayat-box">
        <h6>Roma 8:28</h6>
        <p>"Allah turut bekerja dalam segala sesuatu untuk mendatangkan kebaikan..."</p>
      </div>
    </div>
  </section>

  {{-- Footer --}}
  @include('footer')

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
