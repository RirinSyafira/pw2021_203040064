<?php
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 4 - 26 Februari 2021
Mempelajari Function PHP
*/


// Built-in Function

// Date
// Untuk menampilkan tanggal dengan format tertentu.
    // echo date("l");
    // echo date("d");
    // echo date("m");
    // echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970(waktu yg disepakati untuk komputer)
    // echo time();
    // echo date("l ", time()+172800);
    // echo date("d M Y ", time()+60*60*24*100);
    // echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// (jam, menit, detik, bulan, tanggal, tahun)
    // echo date("l", mktime(0,0,0,8,25,1985));

// strtotime
// memasukkan format tanggal, keluarnya detik
    // echo strtotime("25 aug 1985");

// String
// strlen()
// strcmp()
// explode()
// htmlspecialchars()

// Utility
// vaar_dumo()
// isset()
// empty()
// die()
// sleep()

// User-defined Function: fungsi yang kita buat sendiri

?>