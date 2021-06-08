<?php
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 7 (20 Maret 2021)
Mempelajari GET & POST PHP
Latihan 2
*/


// cek apakah tidak ada data di $_GET
// isset: untuk mengecek apakah sebuah variabel sudah pernah dibikin atau belum
if (!isset($_GET["judul"]) || !isset($_GET["penulis"]) || !isset($_GET["penerbit"]) || !isset($_GET["tahun"]) || !isset($_GET["cover"])) {
    // redirect : memindahkan user dari sebuah halaman ke halaman lain
    header("Location: latihan1.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Novel</title>
</head>

<body>
    <ul>
        <li><img src="img/<?= $_GET["cover"] ?>"></li>
        <li><?= $_GET["judul"]; ?></li>
        <li><?= $_GET["penulis"]; ?></li>
        <li><?= $_GET["penerbit"]; ?></li>
        <li><?= $_GET["tahun"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke Daftar Novel</a>
</body>

</html>