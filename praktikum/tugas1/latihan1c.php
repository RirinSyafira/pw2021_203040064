<?php 
// Nama: Ririn Syafira Kirana
// NRP : 203040064
// Shift: Jumat 10.00 - 11.00
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1c</title>

    <style>
        h4{
            display: inline-block;
            border: 3px solid black;
            border-radius: 100%;
            margin: 0 7px 10px 0;
            width: 50px;
            height: 50px;
            font-size: 25px;
            line-height: 50px;
            text-align: center;
            background-color: salmon;
        }
    </style>
</head>
<body>
    <?php for ($i = 1; $i <= 3; $i++) : ?>
        <?php for ($y = 1; $y <= $i; $y++) : ?>
            <h4><?= $i ?></h3>
        <?php endfor; ?><br>
    <?php endfor; ?>
</body>
</html>