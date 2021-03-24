<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

// Connect ke database
$connect = mysqli_connect("localhost", "root", "");

// Memiih database yang digunakan
mysqli_select_db($connect, "pw_tubes_203040064");

// Mengambil data dari database (query)
$result = mysqli_query($connect, "SELECT * FROM shoes");
if (!$result) {
    echo mysqli_error($connect);
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
    <link type="text/css" rel="stylesheet" href="..css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Tubes PW</title>
</head>
<body>
    <div class="container">
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
                <?php while($items = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                    <td><?= $items["id"]; ?></td>
                        <td><img src="assets/img/<?= $items["img"]; ?>"></td>
                        <td><b><?= $items["name"]; ?></td>
                        <td><?= $items["details"]; ?></td>
                        <td><?= $items["price"]; ?></td>
                        <td><?= $items["color"]; ?></td>
                        <td><?= $items["category"]; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>