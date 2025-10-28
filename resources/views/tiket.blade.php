<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tiket Wisata Pantai 🌙</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap');

    body {
      margin: 0;
      height: 100vh;
      overflow: hidden;
      font-family: 'Poppins', sans-serif;
      background: radial-gradient(circle at top, #0b1c3a 0%, #071225 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      color: #fff;
    }

    /* 🌕 Bulan */
    .moon {
      position: absolute;
      top: 60px;
      right: 80px;
      width: 130px;
      height: 130px;
      background: radial-gradient(circle at 40% 35%, #fffbe6, #fef3c7, #d6d3a0 80%);
      border-radius: 50%;
      box-shadow: 0 0 60px 20px rgba(255, 250, 200, 0.3);
      animation: moonGlow 6s ease-in-out infinite alternate;
    }
    @keyframes moonGlow {
      from { box-shadow: 0 0 50px 15px rgba(255, 250, 200, 0.25); }
      to { box-shadow: 0 0 70px 25px rgba(255, 250, 200, 0.4); }
    }

    /* ✨ Bintang */
    .star {
      position: absolute;
      background: white;
      border-radius: 50%;
      opacity: 0.8;
      animation: twinkle 3s infinite ease-in-out;
    }
    @keyframes twinkle {
      0%, 100% { opacity: 0.3; }
      50% { opacity: 1; }
    }
    .star:nth-child(1) { top: 40px; left: 150px; width: 3px; height: 3px; animation-delay: 0s; }
    .star:nth-child(2) { top: 80px; left: 400px; width: 4px; height: 4px; animation-delay: 1s; }
    .star:nth-child(3) { top: 120px; left: 700px; width: 2px; height: 2px; animation-delay: 1.5s; }
    .star:nth-child(4) { top: 200px; left: 250px; width: 3px; height: 3px; animation-delay: 2s; }
    .star:nth-child(5) { top: 60px; right: 300px; width: 4px; height: 4px; animation-delay: 0.5s; }

    /* 🌊 Ombak glowing */
    .wave {
      position: absolute;
      bottom: 0;
      width: 200%;
      height: 180px;
      background: rgba(173, 216, 230, 0.4);
      border-radius: 100% 50%;
      animation: waveMove 6s linear infinite;
      box-shadow: 0 -2px 20px rgba(173, 216, 230, 0.2);
    }
    .wave:nth-child(2) {
      bottom: 25px;
      opacity: 0.5;
      animation-duration: 8s;
    }
    .wave:nth-child(3) {
      bottom: 45px;
      opacity: 0.3;
      animation-duration: 10s;
    }
    @keyframes waveMove {
      from { transform: translateX(0); }
      to { transform: translateX(-50%); }
    }

    /* 🏮 Lentera */
    .lantern {
      position: absolute;
      bottom: 80px;
      right: 100px;
      font-size: 40px;
      animation: floatLantern 6s ease-in-out infinite;
      opacity: 0.8;
    }
    @keyframes floatLantern {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    /* 🎟 Card Tiket */
    .ticket-card {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 25px;
      padding: 50px 80px;
      text-align: center;
      z-index: 10;
      position: relative;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
      animation: popIn 0.8s ease forwards;
      transform: scale(0.9);
    }
    @keyframes popIn {
      to { transform: scale(1); opacity: 1; }
    }

    h1 {
      font-size: 36px;
      color: #a3d8ff;
      margin-bottom: 15px;
    }
    p {
      color: #dbeafe;
      font-size: 18px;
      margin-bottom: 10px;
    }

    .price {
      background: linear-gradient(135deg, #89f7fe, #66a6ff);
      color: white;
      padding: 12px 25px;
      border-radius: 25px;
      display: inline-block;
      font-weight: 700;
      margin-top: 10px;
      box-shadow: 0 5px 15px rgba(102, 166, 255, 0.4);
    }

    a.back {
      display: inline-block;
      margin-top: 35px;
      text-decoration: none;
      color: white;
      background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
      padding: 12px 25px;
      border-radius: 30px;
      font-weight: 600;
      transition: all 0.3s ease-in-out;
      box-shadow: 0 5px 15px rgba(102, 166, 255, 0.4);
    }
    a.back:hover {
      transform: translateY(-5px) scale(1.05);
      box-shadow: 0 10px 25px rgba(102, 166, 255, 0.6);
    }

    footer {
      margin-top: 40px;
      color: #94a3b8;
      font-size: 13px;
    }
    footer span {
      color: #a3d8ff;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <!-- Langit -->
  <div class="moon"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>

  <!-- Ombak -->
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>

  <!-- Lentera -->
  <div class="lantern">🏮</div>

  <!-- Isi Tiket -->
  <div class="ticket-card">
    <h1>🎟 Tiket Wisata Pantai</h1>
    <p>Nama Tempat: <b>{{ $tempat }}</b></p>
    <p>Harga Tiket: <b class="price">Rp {{ number_format($harga, 0, ',', '.') }}</b></p>

    <a href="/" class="back">🏝 Kembali ke Halaman Utama</a>

    <footer>
      Sistem Informasi Tiket Wisata | Tema: <span>Pantai Malam</span>
    </footer>
  </div>
</body>
</html>