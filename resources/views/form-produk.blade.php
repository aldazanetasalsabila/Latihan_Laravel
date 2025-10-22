<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Form Produk | by Alda 🌇</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:linear-gradient(120deg,#ffecd2,#fcb69f);font-family:Poppins;">
<div class="container mt-5 col-md-6">
  <div class="card shadow-lg border-0 p-4 rounded-5" style="background:rgba(255,255,255,0.5);backdrop-filter:blur(10px);">
    <h3 class="text-center fw-bold text-warning mb-4">🛍️ Tambah Produk</h3>

    <form action="/kirim-produk" method="POST">
      @csrf
      <label class="form-label">Nama Produk</label>
      <input type="text" name="nama" class="form-control mb-3" placeholder="Masukkan nama produk" required>
      <label class="form-label">Harga</label>
      <input type="number" name="harga" class="form-control mb-3" placeholder="Masukkan harga" required>
      <label class="form-label">Kategori</label>
      <select name="kategori" class="form-select mb-3">
        <option>Makanan</option>
        <option>Minuman</option>
        <option>Elektronik</option>
      </select>
      <button class="btn btn-warning text-white w-100 rounded-pill">Kirim Produk</button>
    </form>

    <footer class="text-center text-secondary mt-4">
      <hr><small>Made with 💖 by Alda</small>
    </footer>
  </div>
</div>
</body>
</html>
