<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

require 'functions.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
              alert('Registrasi Berhasil');
              document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
              alert('Registrasi Gagal')
          </script>;";
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
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
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
    <div class="row card" style="margin: 25%; width: 50%;">
      <form action="" method="post">
        <div class="row">
          <span class="card-title" style="margin-left: 43%;">Registrasi</span>
          <div class="input-field col s12">
            <input id="username" name="username" type="text" class="validate">
            <label for="username">Username</label>
          </div>
          <div class="input-field col s12">
            <input id="password" name="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>

        </div>
        <div class="row" style="margin-left: 15px;">
          <button type="submit" name="register" class="waves-effect waves-light btn grey black-text">Register</button>
        </div>
    </div>
  </div>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>