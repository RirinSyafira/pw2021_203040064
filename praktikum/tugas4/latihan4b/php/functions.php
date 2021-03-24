<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

// Fungsi untuk melakukan koneksi ke database
function koneksi() {
    $connect = mysqli_connect("localhost", "root", "");
    mysqli_select_db($connect, "pw_tubes_203040064");

    return $connect;
}

// Fungsi untuk melakukan query dan memasukannya kedalam array
function query($sql) {
    $connect = koneksi();
    $result = mysqli_query($connect, "$sql");
    $items = [];
    while ($item = mysqli_fetch_assoc($result)) {
        $items[] = $item;
    }
    return $items;
}