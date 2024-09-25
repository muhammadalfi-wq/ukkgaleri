<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB GALERI FOTO</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <style>
        .content {
            height: calc(100vh - 56px - 40px); /* Menghitung tinggi agar bisa ditempatkan di tengah */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .footer-text {
            position: absolute;
            bottom: 20px; /* Jarak dari bawah */
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            font-size: 1.2em; /* Sesuaikan ukuran font sesuai kebutuhan */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-white bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">GALERI FOTO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto"></div>
      <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
      <a href="login.php" class="btn btn-outline-primary m-1">Masuk</a>
    </div>
  </div>
</nav>

<div class="container content">
    <h1 class="dark-text">Selamat Datang di Galeri Foto</h1>
    <p class="dark-text">Jelajahi koleksi foto kami yang menakjubkan!</p>
</div>

<style>
    .brown-text {
        color: dark; /* Mengatur warna teks menjadi coklat */
        font-size: 1.em; /* Sesuaikan ukuran font sesuai kebutuhan */
    }
</style>


<div class="footer-text">
    <p>&copy; GALERI2024</p>
</div>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
