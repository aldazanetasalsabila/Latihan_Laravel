<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Harga | by Alda 🌇</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:linear-gradient(120deg,#ffe5d9,#fddbb0);font-family:Poppins;">
<div class="container mt-5 col-md-5">
  <div class="card shadow-lg border-0 p-4 rounded-5" style="background:rgba(255,255,255,0.5);backdrop-filter:blur(10px);">
    <h3 class="text-center fw-bold text-warning mb-4">💰 Edit Harga Produk</h3>

    @if(session('error'))
    <div class="alert alert-warning text-center">{{ session('error') }}</div>
    @endif

    <form action="/produk/update-harga" method="POST">
      @csrf
      @method('PATCH')
      <label class="form-label">Harga Baru</label>
      <input type="number" name="harga" value="7500000" class="form-control mb-3" placeholder="Masukkan harga baru">
      <button class="btn btn-warning text-white w-100 rounded-pill">Update Harga</button>
    </form>

    <footer class="text-center text-secondary mt-4">
      <hr><small>Made with 💖 by Alda</small>
    </footer>
  </div>
</div>
</body>
</html>
