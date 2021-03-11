<?php
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 5 (12 Maret 2021)
Mempelajari Array PHP
Latihan 3
*/

$mahasiswa = [
    ["Ririn Syafira", "203040064", "Teknik Informatika", "ririnsyafirak@gmail.com"],
    ["Siti Komalasari", "203040068", "Teknik Informatika", "sitimala@gmail.com"],
    ["Leni Setiarini", "203040047", "Teknik Informatika", "lenisetiarini@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <!-- <li>Ririn Syafira</li>
        <li>203040064</li>
        <li>Teknik Informatika</li>
        <li>ririnsyafirak@gmail.com</li> -->

        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    
    </ul>
    <?php endforeach; ?>
</body>
</html>