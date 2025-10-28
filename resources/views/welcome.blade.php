<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Sistem Tiket Wisata Pantai 🌙</title>
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
    /* posisi acak bintang */
    .star:nth-child(1) { top: 40px; left: 150px; width: 3px; height: 3px; animation-delay: 0s; }
    .star:nth-child(2) { top: 80px; left: 400px; width: 4px; height: 4px; animation-delay: 1s; }
    .star:nth-child(3) { top: 120px; left: 700px; width: 2px; height: 2px; animation-delay: 1.5s; }
    .star:nth-child(4) { top: 200px; left: 250px; width: 3px; height: 3px; animation-delay: 2s; }
    .star:nth-child(5) { top: 60px; right: 300px; width: 4px; height: 4px; animation-delay: 0.5s; }
    .star:nth-child(6) { top: 180px; right: 150px; width: 3px; height: 3px; animation-delay: 1.2s; }

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

    /* ⛵ Perahu */
    .boat {
      position: absolute;
      bottom: 150px;
      left: -100px;
      font-size: 55px;
      opacity: 0.9;
      animation: boatFloat 4s ease-in-out infinite, boatMove 50s linear infinite;
    }
    @keyframes boatFloat {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
    @keyframes boatMove {
      from { left: -150px; }
      to { left: 110%; }
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

    /* 🏝 Card utama */
    .card {
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
      font-size: 38px;
      color: #a3d8ff;
      margin-bottom: 10px;
    }
    p {
      color: #dbeafe;
      font-size: 16px;
      margin-bottom: 30px;
    }

    /* Tombol */
    .btn-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
    }
    a {
      text-decoration: none;
      background: linear-gradient(135deg, #89f7fe, #66a6ff);
      padding: 14px 30px;
      border-radius: 40px;
      color: #fff;
      font-weight: 600;
      font-size: 16px;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: all 0.25s ease-in-out;
      box-shadow: 0 5px 15px rgba(102, 166, 255, 0.4);
      position: relative;
      overflow: hidden;
    }
    a:hover {
      transform: translateY(-6px) rotate(-2deg);
      box-shadow: 0 10px 25px rgba(102, 166, 255, 0.6);
    }

    a::before {
      content: "";
      position: absolute;
      top: 0;
      left: -75%;
      width: 50%;
      height: 100%;
      background: rgba(255, 255, 255, 0.25);
      transform: skewX(-25deg);
      transition: left 0.5s;
    }
    a:hover::before {
      left: 125%;
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
  <!-- Elemen langit -->
  <div class="moon"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>

  <!-- Ombak -->
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>

  <!-- Dekorasi -->
  <div class="boat">⛵</div>
  <div class="lantern">🏮</div>

  <!-- Konten utama -->
  <div class="card">
    <h1>🌙 Sistem Tiket Wisata Pantai</h1>
    <p>Selamat datang di halaman utama sistem tiket wisata.  
       Silakan pilih destinasi pantai yang ingin Anda kunjungi. 🌊</p>

    <div class="btn-container">
      <a href="/tiket/Papuma/20000">🏝 Pantai Papuma</a>
      <a href="/tiket/WatuUlo/15000">🐬 Pantai Watu Ulo</a>
      <a href="/tiket/PancerPuger/10000">🍹 Pantai Pancer Puger</a>
    </div>

    <footer>
      Sistem Informasi Tiket Wisata | Tema: <span>Pantai Malam</span>
    </footer>
  </div>
</body>
</html>