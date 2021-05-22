<?php
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 10 (21 Maret 2021)
Mempelajari Koneksi DB
Latihan 3
*/
?>
<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_203040064');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // Jika hasilnya hanya satu data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nrp = htmlspecialchars($data['nrp']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
              mahasiswa
            VALUES
            (null, '$nrp', '$nama', '$email', '$jurusan', '$gambar');
  ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
?>