<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

// Fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $connect = mysqli_connect("localhost", "pw20064", "#Akun#203040064#") or die("koneksi ke DB gagal");
    mysqli_select_db($connect, "pw20064_tubes_203040064") or die("Database salah!");

    return $connect;
}

// Fungsi untuk melakukan query dan memasukannya kedalam array
function query($sql)
{
    $connect = koneksi();
    $result = mysqli_query($connect, "$sql");
    $items = [];
    while ($item = mysqli_fetch_assoc($result)) {
        $items[] = $item;
    }
    return $items;
}
