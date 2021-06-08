<?php
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 12 (14 Mei 2021)
Mempelajari Login dan Registrasi
Halaman Login
*/

session_start();


if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

// ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
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
  <title>Login</title>
  <style>
    button {
      margin-left: 45%;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row card" style="margin-left: 28%; margin-top: 20%; width: 45%;">
      <form action="" method="POST">
        <?php if (isset($login['error'])) : ?>
          <p style="color: red; font-style:italic; text-align: center;"><?= $login['pesan']; ?></p>
        <?php endif; ?>
        <div class=" row">
          <span class="card-title" style="margin-left: 45%;">LOGIN</span>
          <div class="input-field col s12">
            <input id="username" name="username" type="text" class="validate" autofocus autocomplete="off" required>
            <label for="username">Username</label>
          </div>
          <div class="input-field col s12">
            <input id="password" name="password" type="password" class="validate" required>
            <label for="password">Password</label>
          </div>
          <br>
          <button type="submit" name="login" class="waves-effect waves-light btn">Login</button>
          <br>
          <div class="registrasi" style="text-align: center;">
            <p>Belum punya akun? Registrasi <a href="registrasi.php">disini.</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>

  </form>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>