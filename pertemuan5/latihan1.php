<?php
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 5 (12 Maret 2021)
Mempelajari Array PHP
Latihan 1
*/

// Array = sebuah variabel yang dapat menampung banyak nilai
// Elemen pada array boleh memiliki tipe data yang berbeda
// Pasangan antara key dan value
// Keynya adalah index, yang dimulai dari 0

// Membuat Array
// Cara Lama
$hari = array("Senin", "Selasa", "Rabu");
// Cara Baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
var_dump ($hari);
echo "<br>";
print_r($bulan);

// Menampilakan satu elemen pada array
echo $arr1[0];
echo "<br>";
echo $bulan[1];

// Menampilkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);
?>