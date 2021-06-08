<?php
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 6 (12 Maret 2021)
Mempelajari Associative Array PHP
Latihan 3 - Membuat data menggunakan associative array
*/


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
    ],
    [
        "judul" => "Matahari",
        "penulis" => "Tere Liye",
        "penerbit" => "PT Gramedia Pustaka Umum",
        "tahun" => "2016",
        "cover" => "matahri.jpeg"
    ],
    [
        "judul" => "Bintang",
        "penulis" => "Tere Liye",
        "penerbit" => "PT Gramedia Pustaka Umum",
        "tahun" => "2017",
        "cover" => "bintang.jpg"
    ],
    [
        "judul" => "Pergi",
        "penulis" => "Tere Liye",
        "penerbit" => "Republika Penerbit",
        "tahun" => "2018",
        "cover" => "pergi.jpg"
    ],
    [
        "judul" => "Hello Salma",
        "penulis" => "Erisca Febriani",
        "penerbit" => "Coconut Books",
        "tahun" => "2018",
        "cover" => "hellosalma.jpeg"
    ],
    [
        "judul" => "Mozachiko",
        "penulis" => "Poppi Pertiwi",
        "penerbit" => "Loveable",
        "tahun" => "2018",
        "cover" => "mozachiko.jpeg"
    ],
    [
        "judul" => " Secret Admirer; Sincerely Affection",
        "penulis" => "Faradita ",
        "penerbit" => "Kubus Media",
        "tahun" => "2017",
        "cover" => "secret.jpg"
    ],
    [
        "judul" => "Dignitate",
        "penulis" => "Hana Margaretha",
        "penerbit" => "Loveable",
        "tahun" => "2017",
        "cover" => "dignitate.jpg"
    ]
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Novel</title>
</head>

<body>
    <h1>Daftar Novel</h1>
    <?php foreach ($novel as $nvl) : ?>
        <ul>
            <li><img src="img/<?= $nvl["cover"] ?>"></li>
            <li>Judul : <?= $nvl["judul"]; ?></li>
            <li>Penulis : <?= $nvl["penulis"]; ?></li>
            <li>Penerbit : <?= $nvl["penerbit"]; ?></li>
            <li>Tahun : <?= $nvl["tahun"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>