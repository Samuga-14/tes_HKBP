<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Tidak Ditemukan</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f4f4;
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;
      padding: 20px;
    }

    img {
      max-width: 350px;
      margin-bottom: 30px;
    }

    h1 {
      font-size: 6rem;
      margin-bottom: 10px;
      color: #2c3e50;
    }

    p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      color: #555;
    }

    a {
      padding: 12px 25px;
      background-color: #007bff;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <!-- Gambar dari public/images/404.png -->
<img src="{{ asset('images/hkbplogo.png') }}" alt="Logo HKBP" width="100" height="100">
    <h2>Yehezkiel 34:16</h2>
  <p>Wah, halaman yang kamu cari tidak ditemukan 😕<br> "Yang hilang akan Kucari, yang tersesat akan Kubawa pulang" 🙏</p>
  <!-- Tombol kembali ke beranda -->
  <a href="{{ url('/') }}">Kembali ke Beranda</a>
</body>
</html>
