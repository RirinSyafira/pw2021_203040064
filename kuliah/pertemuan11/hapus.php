<?php
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 11 (07 Mei 2021)
Mempelajari Delete dan Update Data
Halaman Hapus
*/

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
                    alert('Data berhasil dihapus!');
                    document.location.href = 'index.php';
                </script>";
} else {
  echo "<script>
                    alert('Data gagal dihapus!');
                    document.location.href = 'index.php';
                </script>";
}
