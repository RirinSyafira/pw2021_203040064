<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

session_start();
require 'functions.php';

// Cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // Ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
  $row = mysqli_fetch_assoc($result);

  // Cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

// Pengecekan apakah user sudah melakukan login, jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

// Login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");

  // Mencocokkan username dan password
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      // Jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
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
    <div class="row card" style="margin: 25%; width: 50%;">
      <form action="" method="post">
        <?php if (isset($error)) : ?>
          <p style="color: red; font-style:italic;">Incorrect username or password.</p>
        <?php endif; ?>
        <div class="row">
          <span class="card-title" style="margin-left: 45%;">LOGIN</span>
          <div class="input-field col s12">
            <input id="username" name="username" type="text" class="validate" autocomplete="off">
            <label for="username">Username</label>
          </div>
          <div class="input-field col s12">
            <input id="password" name="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
          <div class="remember" style="margin-left: 15px;">
            <p>
              <label>
                <label for="remember"></label>
                <input type="checkbox" name="remember" />
                <span>Remember me</span>
              </label>
            </p>
          </div>
          <br>
          <button type="submit" name="submit" class="waves-effect waves-light btn">Login</button>
          <br>
          <div class="registrasi" style="margin-left: 30%;">
            <p>Belum punya akun? Registrasi <a href=" registrasi.php">disini.</a></p>
          </div>
        </div>
    </div>
  </div>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>