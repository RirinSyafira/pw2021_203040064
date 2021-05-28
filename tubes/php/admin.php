<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// Menghubungkan dengan file php lainnya
require 'functions.php';

// Melakukan query
$items = query("SELECT * FROM shoes");

// Pencarian
if (isset($_GET['search'])) {
    $items = cari($_GET['keyword']);
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
    <link rel="stylesheet" href="../css/style.css">
    <title>Tubes PW</title>
</head>

<body class="grey lighten-4">
    <div class="section">
        <div class="container center-align black-text">
            <img src="../assets/img/logo.png" alt="">
        </div>
    </div>
    <div class="container">
        <div class="add center">
            <a href="tambah.php" class="waves-effect waves-light btn grey darken-2">Add Data</a>
        </div>
        <form action="" method="get">
            <input type="text" name="keyword" autofocus autocomplete="off">
            <button type="submit" name="search" class="waves-effect waves-light btn grey darken-2">Search</button>
        </form>
        <div class="livesearch">
            <table class="highlight responsive-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Opsi</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Price</th>
                        <th>Color</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($items)) : ?>
                        <tr>
                            <td colspan="7">
                                <h3>The requested data was not found.</h3>
                            </td>
                        </tr>
                    <?php else : ?>
                        <?php $i = 1; ?>
                        <?php foreach ($items as $item) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $item['id'] ?>" class="waves-effect waves-light btn grey darken-2">Edit</a>
                                    <a href="delete.php?id=<?= $item['id'] ?>" onclick="return confirm('Delete data?')" class="waves-effect waves-light btn grey darken-2">Delete</a>
                                </td>
                                <td><img src="../assets/img/<?= $item["img"]; ?>"></td>
                                <td><b><?= $item["name"]; ?></td>
                                <td><?= $item["details"]; ?></td>
                                <td><?= $item["price"]; ?></td>
                                <td><?= $item["color"]; ?></td>
                                <td><?= $item["category"]; ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <div class="logout">
                        <a href="logout.php" class="waves-effect waves-light btn right grey darken-4">Logout</a>
                    </div>
                </tbody>
            </table>
        </div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type=" text/javascript" src="js/materialize.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>