<?php
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 11 (07 Mei 2021)
Mempelajari Delete dan Update Data
Form Ubah Data
*/

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

// cek tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>";
  } else {
    echo "<script>
                    alert('Data gagal diubah!');
                    document.location.href = 'index.php';
                </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>Ubah Data Mahasiswa</title>
  <style>
    button {
      margin-left: 10px;
    }

    button:hover {
      color: teal;
    }

    .link {
      color: white;
    }

    .link:hover {
      color: teal;
    }
  </style>
</head>

<body>

  <div class="container">
    <h4 style="text-align: center;">Form Ubah Data Mahasiswa</h4>
    <div class="row card">
      <form action="" method="POST" class="col s12">
        <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="nrp" id="nrp" class="validate" autofocus required value="<?= $mhs['nrp']; ?>">
            <label for="nrp">NRP</label>
          </div>
          <div class="input-field col s12">
            <input type="text" name="nama" id="nama" class="validate" required value="<?= $mhs['nama']; ?>">
            <label for=" nama">Nama</label>
          </div>
          <div class="input-field col s12">
            <input type="text" name="email" id="email" class="validate" required value="<?= $mhs['email']; ?>">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12">
            <input type="text" name="jurusan" id="jurusan" class="validate" required value="<?= $mhs['jurusan']; ?>">
            <label for="jurusan">Jurusan</label>
          </div>
          <div class="input-field col s12">
            <input type="text" name="gambar" id="gambar" class="validate" required value="<?= $mhs['gambar']; ?>">
            <label for="gambar">Gambar</label>
          </div>
          <br>
          <button type="submit" name="ubah" class="waves-effect waves-light btn">Ubah Data</button>
          <button type="submit" class="waves-effect waves-light btn" style="text-decoration: none; color: white;"><a class="link" href="index.php">Kembali</a></button>

        </div>
      </form>
    </div>
  </div>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>