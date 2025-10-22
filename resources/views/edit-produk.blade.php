<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Produk | by Alda 🌇</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:linear-gradient(120deg,#ffd7ba,#ff9a76);font-family:Poppins;">
<div class="container mt-5 col-md-6">
  <div class="card shadow-lg border-0 p-4 rounded-5" style="background:rgba(255,255,255,0.5);backdrop-filter:blur(10px);">
    <h3 class="text-center fw-bold text-danger mb-4">✏️ Edit Produk</h3>

    <form action="/produk/update" method="POST">
      @csrf
      @method('PUT')
      <label class="form-label">Nama Produk</label>
      <input type="text" name="nama" value="Kamera Canon" class="form-control mb-3">
      <label class="form-label">Harga</label>
      <input type="number" name="harga" value="7500000" class="form-control mb-3">
      <label class="form-label">Kategori</label>
      <select name="kategori" class="form-select mb-3">
        <option>Elektronik</option>
        <option>Makanan</option>
        <option>Minuman</option>
      </select>
      <button class="btn btn-danger text-white w-100 rounded-pill">Update Produk</button>
    </form>

    <footer class="text-center text-secondary mt-4">
      <hr><small>Made with 💖 by Alda</small>
    </footer>
  </div>
</div>
</body>
</html>
