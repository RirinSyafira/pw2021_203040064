<?php
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 6 (12 Maret 2021)
Mempelajari Associative Array PHP
Latihan 1
*/

// // Array
// // Membuat array
// $hari = array("Senin", "Selasa", "Rabu");
// $bulan = ["Januari", "Februari", "Maret"];
// $arr = [100, "teks", true];

// // Menampilkan array
// // Versi debugging : versi developer atau programer ketika ingin melihat isi array, bukan untuk user.
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// // print_r lebih ringkas penulisannya daripada var_dump
// // print_r tidak ada tipe data, jumlah karakter dalam elemennya

// // Menampilkan satu elemen pada array
// echo $arr[0];
// 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: #BADA55;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 0.5s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>

    <?php
    $angka = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    ?>
    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $b) : ?>
            <div class="kotak"><?= $b; ?></div>
        <?php endforeach ?>
        <div class="clear"></div>
    <?php endforeach; ?>

</body>

</html>