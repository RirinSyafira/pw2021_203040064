<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

// Menghubungkan dengan file php lainnya
require 'php/functions.php';
// Melakukan query
$items = query("SELECT * FROM shoes");
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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../css/style.css">
    <title>Tubes PW</title>
</head>
<body>
    <div class="container">
        <a href="php/admin.php" class="waves-effect waves-light btn pink lighten-1">Admin</a>
        <table class="highlight">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Price</th>
                    <th>Color</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item) : ?>
                    <tr>
                        <td><?= $item["id"]; ?></td>
                        <td><img src="assets/img/<?= $item["img"]; ?>"></td>
                        <td><b><?= $item["name"]; ?></td>
                        <td><?= $item["details"]; ?></td>
                        <td><?= $item["price"]; ?></td>
                        <td><?= $item["color"]; ?></td>
                        <td><?= $item["category"]; ?></td>
                        <td>
                            <a href="php/detail.php?id=<?= $item['id'] ?>" <?= $item["name"]?>>View Product</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>