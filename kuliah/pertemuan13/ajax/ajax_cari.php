<?php
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 13 (20 Mei 2021)
Mempelajari AJAX Live Search dan Upload Gambar
*/
?>
<?php
require '../functions.php';
$mahasiswa = cari($_GET['keyword']);
?>
<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Aksi</th>
  </tr>

  <?php if (empty($mahasiswa)) : ?>
    <tr>
      <td colspan="4">
        <p style="color: red; font-style: italic;">Data mahasiswa tidak ditemukan!</p>
      </td>
    </tr>
  <?php endif; ?>

  <?php $i = 1;
  foreach ($mahasiswa as $mhs) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $mhs['gambar']; ?>" width="80"></td>
      <td><?= $mhs['nama']; ?></td>
      <td>
        <a href="detail.php?id=<?= $mhs['id']; ?>">Lihat Detail</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>