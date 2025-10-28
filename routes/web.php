<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route 1: Route profil (1 parameter)
Route::get('/profil/{nama}', function ($nama) {
    return view('profil', ['nama' => $nama]);
});

// Route 2: Route produk (2 parameter)
Route::get('/produk/{kategori}/{id}', function ($kategori, $id) {
    return "Kategori: <b>$kategori</b> <br> ID Produk: <b>$id</b>";
});

// Route 3: Route tiket (untuk tugas)
Route::get('/tiket/{tempat}/{harga}', function ($tempat, $harga) {
    return view('tiket', ['tempat' => $tempat, 'harga' => $harga]);
});