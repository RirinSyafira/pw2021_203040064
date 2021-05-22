<?php
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 10 (21 Maret 2021)
Mempelajari Koneksi DB
Halaman Detail Mahasiswa
*/
?>

<?php
require 'functions.php';

// Ambil id dari URL
$id = $_GET['id'];

// Query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h2>Detail Mahasiswa</h2>
  <ul>
    <li><img src="img/<?= $mhs['gambar']; ?>" alt=""></li>
    <li>NRP: <?= $mhs['nrp']; ?></li>
    <li>Nama: <?= $mhs['nama']; ?></li>
    <li>Email: <?= $mhs['email']; ?></li>
    <li>Jurusan: <?= $mhs['jurusan']; ?></li>
    <li><a href="">Ubah</a> <a href="">Hapus</a></li>
    <li><a href="latihan3.php">Kembali</a></li>
  </ul>
</body>

</html>