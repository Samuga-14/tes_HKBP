<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Tidak Ditemukan</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #e0f7fa, #e1bee7);
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;
      padding: 20px;
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    img {
      max-width: 120px;
      margin-bottom: 20px;
    }

    h1 {
      font-size: 7rem;
      margin-bottom: 10px;
      color: #6a1b9a;
      font-weight: 700;
      animation: popIn 0.8s ease-in-out;
    }

    @keyframes popIn {
      0% { transform: scale(0.7); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }

    h2 {
      font-size: 1.6rem;
      color: #00796b;
      margin-bottom: 10px;
    }

    p {
      font-size: 1.2rem;
      color: #444;
      margin-bottom: 30px;
      line-height: 1.6;
    }

    a {
      padding: 12px 30px;
      background-color: #220455;
      color: white;
      text-decoration: none;
      border-radius: 30px;
      font-weight: 600;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    a:hover {
      background-color: #1f0454;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <img src="{{ asset('images/hkbplogo.png') }}" alt="Logo HKBP">
  <h1>404</h1>
  <h2>Yehezkiel 34:16</h2>
  <p>Wah, halaman yang kamu cari tidak ditemukan 😕<br>
     <em>"Yang hilang akan Kucari, yang tersesat akan Kubawa pulang."</em> 🙏</p>
  <a href="{{ url('/') }}">Kembali ke Beranda</a>
</body>
</html>
