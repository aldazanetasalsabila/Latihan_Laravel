<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Laravel Routing – by Alda 🌇 Premium Sunset Edition
|--------------------------------------------------------------------------
| Tampilan web aesthetic + glassmorphism + animasi + elemen mini 🍰📱
| Dibuat biar keliatan WAH & modern 🤍
*/

Route::get('/', function () {
    return '
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Routing | by Alda 🌇</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body {
                background: linear-gradient(115deg, #ffecd2, #fcb69f, #ffb4a2);
                font-family: "Poppins", sans-serif;
                color: #3e2723;
                min-height: 100vh;
                overflow-x: hidden;
            }
            /* Navbar Glass */
            .navbar {
                backdrop-filter: blur(10px);
                background: rgba(255, 255, 255, 0.25);
                box-shadow: 0 4px 30px rgba(0,0,0,0.1);
                border-bottom: 1px solid rgba(255,255,255,0.3);
            }

            /* Card Glass Effect */
            .card {
                background: rgba(255, 255, 255, 0.45);
                backdrop-filter: blur(18px);
                border-radius: 25px;
                border: 1px solid rgba(255,255,255,0.4);
                box-shadow: 0 15px 40px rgba(0,0,0,0.15);
                transition: all 0.4s ease;
            }
            .card:hover {
                transform: scale(1.03);
                box-shadow: 0 20px 60px rgba(0,0,0,0.25);
            }

            /* Tombol aesthetic */
            .btn-custom {
                border-radius: 40px;
                padding: 12px 35px;
                font-weight: 600;
                letter-spacing: 0.4px;
                transition: all 0.3s ease;
                background: linear-gradient(45deg, #fcb69f, #ff9a76);
                border: none;
                color: white;
            }
            .btn-custom:hover {
                background: linear-gradient(45deg, #ff9a76, #fcb69f);
                transform: scale(1.08);
                box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            }

            /* Elemen kecil */
            .icon {
                position: absolute;
                width: 70px;
                opacity: 0.5;
                animation: float 5s ease-in-out infinite;
            }
            .icon.food { top: 12%; left: 8%; }
            .icon.electro { bottom: 10%; right: 10%; animation-delay: 2s; }
            .icon.drink { top: 20%; right: 12%; animation-delay: 1s; }

            @keyframes float {
                0%,100% { transform: translateY(0); }
                50% { transform: translateY(-15px); }
            }

            /* Animasi fade */
            .fade-in {
                animation: fadeIn 1.5s ease forwards;
            }
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(40px); }
                to { opacity: 1; transform: translateY(0); }
            }

            footer {
                margin-top: 60px;
                color: #6d4c41;
                font-size: 15px;
                opacity: 0.9;
            }

            .gradient-text {
                background: linear-gradient(90deg, #e76f51, #f4a261, #fcbf49);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                font-weight: 800;
            }
        </style>
    </head>
    <body>
        <!-- NAVBAR -->
        <nav class="navbar navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold text-dark" href="/">🌇 Alda Routing Project</a>
            </div>
        </nav>

        <!-- ICONS FLOAT -->
        <img src="https://cdn-icons-png.flaticon.com/512/857/857681.png" class="icon food" alt="food">
        <img src="https://cdn-icons-png.flaticon.com/512/4341/4341139.png" class="icon electro" alt="electronic">
        <img src="https://cdn-icons-png.flaticon.com/512/4150/4150916.png" class="icon drink" alt="drink">

        <!-- MAIN CONTENT -->
        <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
            <div class="card text-center p-5 col-md-6 fade-in">
                <h1 class="gradient-text mb-3">Laravel Routing 🍰</h1>
                <p class="text-muted">Premium Sunset Edition — <b>by Alda</b> 💖</p>

                <div class="mt-4">
                    <a href="/form-produk" class="btn btn-custom m-2">🛍️ Form Produk</a>
                    <a href="/produk/edit" class="btn btn-custom m-2">✏️ Edit Produk</a>
                    <a href="/produk/edit-harga" class="btn btn-custom m-2">💰 Edit Harga</a>
                </div>

                <footer>
                    <hr class="mt-4" style="border-color:rgba(255,255,255,0.4);">
                    <p>Made with 💖 by Alda</p>
                </footer>
            </div>
        </div>
    </body>
    </html>';
});

Route::get('/form-produk', fn() => view('form-produk'));
Route::get('/produk/edit', fn() => view('edit-produk'));
Route::get('/produk/edit-harga', fn() => view('edit-harga'));

Route::post('/kirim-produk', fn(Request $r) =>
"<body style='font-family:Poppins;text-align:center;background:#fff5f0;margin-top:100px'>
<h2 style='color:#d84315;'>✅ Produk Dikirim!</h2>
<p><b>{$r->nama}</b> — Rp{$r->harga} ({$r->kategori})</p>
<img src='https://cdn-icons-png.flaticon.com/512/3081/3081935.png' width='80'><br>
<p style='margin-top:50px;color:#a77e67;'>Made with 💖 by Alda</p>
<a href=\"/\" style='color:#d84315;'>← Kembali ke Home</a></body>"
);

Route::put('/produk/update', fn(Request $r) =>
"<body style='font-family:Poppins;text-align:center;background:#fff8f3;margin-top:100px'>
<h2 style='color:#e76f51;'>🧩 Data Produk Diperbarui!</h2>
<p>Nama: {$r->nama}</p><p>Harga: Rp{$r->harga}</p><p>Kategori: {$r->kategori}</p>
<img src='https://cdn-icons-png.flaticon.com/512/4341/4341139.png' width='80'><br>
<p style='margin-top:50px;color:#a77e67;'>Made with 💖 by Alda</p>
<a href=\"/\" style='color:#d84315;'>← Kembali ke Home</a></body>"
);

Route::patch('/produk/update-harga', fn(Request $r) =>
"<body style='font-family:Poppins;text-align:center;background:#fff7f2;margin-top:100px'>
<h2 style='color:#e67e22;'>💸 Harga Diperbarui!</h2>
<p>Harga baru: <b>Rp{$r->harga}</b></p>
<img src='https://cdn-icons-png.flaticon.com/512/3330/3330317.png' width='75'><br>
<p style='margin-top:50px;color:#a77e67;'>Made with 💖 by Alda</p>
<a href=\"/\" style='color:#d84315;'>← Kembali ke Home</a></body>"
);
