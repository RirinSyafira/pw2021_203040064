<?php
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 11 (07 Mei 2021)
Mempelajari Delete dan Update Data
Form Tambah Data
*/

require 'functions.php';

// cek tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>";
  } else {
    echo "<script>
                    alert('Data gagal ditambahkan!');
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
  <title>Tambah Data Mahasiswa</title>
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
    <h4 style="text-align: center;">Form Tambah Data Mahasiswa</h4>
    <div class="row card">
      <form action="" method="POST" class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="nrp" id="nrp" class="validate" autofocus required>
            <label for="nrp">NRP</label>
          </div>
          <div class="input-field col s12">
            <input type="text" name="nama" id="nama" class="validate" required>
            <label for="nama">Nama</label>
          </div>
          <div class="input-field col s12">
            <input type="text" name="email" id="email" class="validate" required>
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12">
            <input type="text" name="jurusan" id="jurusan" class="validate" required>
            <label for="jurusan">Jurusan</label>
          </div>
          <div class="input-field col s12">
            <input type="text" name="gambar" id="gambar" class="validate" required>
            <label for="gambar">Gambar</label>
          </div>
          <br>
          <button type="submit" name="tambah" class="waves-effect waves-light btn">Tambah Data</button>
          <button type="submit" class="waves-effect waves-light btn" style="text-decoration: none; color: white;"><a class="link" href="index.php">Kembali</a></button>

        </div>
      </form>
    </div>
  </div>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>