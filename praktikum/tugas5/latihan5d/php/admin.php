<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

// Menghubungkan dengan file php lainnya
require 'functions.php';

// Melakukan query
$items = query("SELECT * FROM shoes");
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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Tubes PW</title>
</head>

<body>
    <div class="container">
        <div class="add">
            <a href="tambah.php" class="waves-effect waves-light btn pink lighten-1">Add Data</a>
        </div>
        <table class="highlight">
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
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item) : ?>
                    <tr>
                        <td><?= $item["id"]; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $item['id']?>" class="waves-effect waves-light btn">Edit</a>
                            <a href="delete.php?id=<?= $item['id']?>" onclick="return confirm('Delete data?')" class="waves-effect waves-light btn">Delete</a>
                        </td>
                        <td><img src="..assets/img/<?= $item["img"]; ?>"></td>
                        <td><b><?= $item["name"]; ?></td>
                        <td><?= $item["details"]; ?></td>
                        <td><?= $item["price"]; ?></td>
                        <td><?= $item["color"]; ?></td>
                        <td><?= $item["category"]; ?></td>
                        <td>
                            <a href="..php/detail.php?id=<?= $item['id'] ?>" <?= $item["name"]?>>View Product</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>