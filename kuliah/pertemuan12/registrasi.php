<?php
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 12 (16 Mei 2021)
Mempelajari Login dan Registrasi
Halaman Registrasi
*/

require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
          alert('User baru berhasil ditambahkan, silahkan login!');
          document.location.href = 'login.php';
          </script>";
  } else {
    echo 'User gagal ditambahkan!';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>Registrasi</title>
  <style>
    button {
      margin-left: 40%;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row card" style="margin-left: 28%; margin-top: 20%; width: 45%;">
      <form action="" method="POST">
        <div class="row">
          <span class="card-title" style="margin-left: 40%;">REGISTRASI</span>
          <div class="input-field col s12">
            <input id="username" name="username" type="text" class="validate" autofocus autocomplete="off" required>
            <label for="username">Username</label>
          </div>
          <div class="input-field col s12">
            <input id="password" name="password1" type="password" class="validate" required>
            <label for="password">Password</label>
          </div>
          <div class="input-field col s12">
            <input id="password" name="password2" type="password" class="validate" required>
            <label for="password">Konfirmasi Password</label>
          </div>
          <br>
          <button type="submit" name="registrasi" class="waves-effect waves-light btn">Registrasi</button>
          <br>
        </div>
      </form>
    </div>
  </div>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>