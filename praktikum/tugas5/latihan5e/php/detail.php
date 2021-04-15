<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

// Mengecek apakah ada id yang dikirimkan
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];
// Melakukan query dengan parameter id yang diambil dari url
$items = query("SELECT * FROM shoes WHERE id = $id")[0];
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="..css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      <div class="container">
        <div class="row">
            <div class="col s12 m7">
                <div class="card">
                    <div class="card-image">
                        <img src="../assets/img/<?= $items["img"]; ?>">
                        <br>
                        <span class="card-title teal"><?= $items["name"]; ?></span>
                    </div>
                    <div class="card-content">
                        <p><?= $items["details"]; ?></p>
                    </div>
                    <div class="card-tabs">
                        <ul class="tabs tabs-fixed-width">
                            <li class="tab"><a href="#test4">Price</a></li>
                            <li class="tab"><a class="active" href="#test5">Color</a></li>
                            <li class="tab"><a href="#test6">Category</a></li>
                        </ul>
                    </div>
                    <div class="card-content grey lighten-4">
                        <div id="test4"><?= $items["price"]; ?></div>
                        <div id="test5"><?= $items["color"]; ?></div>
                        <div id="test6"><?= $items["category"]; ?></div>
                    </div>
                </div>
            </div>
        </div>
        <button class="waves-effect waves-light btn"><a href="../index.php">Back</a></button>

        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            var el = document.querySelector('.tabs');
            var instance = M.Tabs.init(el, {});
        </script>
    </body>
  </html>