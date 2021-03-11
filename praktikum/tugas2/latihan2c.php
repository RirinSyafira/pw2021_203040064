<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00
?>

<?php 
    function tumpukanBola($tumpukan) {
        for ($i = 1; $i <= $tumpukan; $i++) {
            for ($m = 1; $m <= $i; $m++) {
                echo "<div class = 'bola'>" . $i . "</div>";
            }
            echo "<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2c</title>
    <style>
        .bola {
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
    <?php tumpukanBola(5)  ?>
</body>
</html>