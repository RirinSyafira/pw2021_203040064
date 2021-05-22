<?php 
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 6 (12 Maret 2021)
Mempelajari Associative Array PHP
Latihan 2
*/

// $mahasiswa = [
//     ["Ririn Syafira Kirana", "203040064", "Teknik Informatika", "ririnsyafirak@gmail.com"],
//     ["Siti Komalasari", "203040068", "Teknik Informatika", "sitimala@gmail.com"],
//     ["Leni Setiarini", "203040047", "Teknik Informatika", "lenisetiarini@gmail.com"]
// ];

// Array Associative: sebuah variabel yang memiliki banyak nilai.
// Key-nya adalah string yang kita buat sendiri.
$mahasiswa = [
    [
        "nama" => "Ririn Syafira", 
        "nrp" => "203040064",
        "jurusan" => "Teknik Informatika",
        "email" => "ririnsyafirak@gmail.com",
        "gambar" => "ririn.jpeg"
    ],
    [
        "nama" => "Leni Setiarini", 
        "nrp" => "203040047",
        "jurusan" => "Teknik Informatika",
        "email" => "lenisetiarini@gmail.com",
        "gambar" => "leni.jpeg"
        // "nilai" => [85, 90, 95]
    ],
    [
        "nama" => "Siti Komalasari", 
        "nrp" => "203040068",
        "jurusan" => "Teknik Informatika",
        "email" => "sitimala@gmail.com",
        "gambar" => "mala.jpeg"
    ]
];
// echo $mahasiswa[1]["nilai"][1];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"];?>">
        </li>
        <li>Nama: <?= $mhs["nama"]; ?></li>
        <li>NPM: <?= $mhs["nrp"]; ?></li>
        <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
        <li>Email: <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
