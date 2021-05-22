<?php
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 7 (20 Maret 2021)
Mempelajari GET & POST PHP
Latihan 1
*/
?>
<?php 
// Variable Scope / lingkup variabel
$x = 10;
// echo $x;

// function tampilX() {
// $x = 20;
 global $x; // Variabel global untuk mencari $x diluar function
 echo $x;
// }

// tampilX();
// echo $x;

// Variabel Superglobal : tipe array associative
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

// $_GET
// $_GET["nama"] = "Ririn Syafira";
// $_GET["nrp"] = "203040064";
var_dump($_GET);
// Memasukkan data dengan menambahkan string ke URL
// http://localhost/pw2021_203040064/pertemuan7/latihan1.php?nama=Ririn%20Syafira&nrp=203040064
// Tanda tanya (?) di URL: saya memasukkan data ke halaman ini
// Tanda dan (&) di URL: menambahkan data baru
?>
<?php
    $novel = [
        [
            "judul" => "Hujan",
            "penulis" => "Tere Liye",
            "penerbit" => "PT Gramedia Pustaka Umum",
            "tahun" => "2016",
            "cover" => "hujan.jpg"
        ],
        [
            "judul" => "Bumi",
            "penulis" => "Tere Liye",
            "penerbit" => "PT Gramedia Pustaka Umum",
            "tahun" => "2014",
            "cover" => "bumi.jpg"
        ],
        [
            "judul" => "Bulan",
            "penulis" => "Tere Liye",
            "penerbit" => "PT Gramedia Pustaka Umum",
            "tahun" => "2015",
            "cover" => "buln.jpeg"
        ]
    ];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Novel</h1>
    <ul>
    <?php foreach($novel as $nvl) : ?>
        <li>
            <a href="latihan2.php?judul=<?= $nvl["judul"];?>&penulis=
            <?= $nvl["penulis"];?>&penerbit=<?= $nvl["penerbit"]; ?>
            &tahun=<?= $nvl["tahun"]; ?>&cover=<?= $nvl["cover"]; ?>"><?= $nvl["judul"]?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>