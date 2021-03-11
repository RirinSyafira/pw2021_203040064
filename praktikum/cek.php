<?php
// Leni Setiarini
// 203040047
// Jumat 10.00 - 11.00
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2b</title>
    <style>
    .wrapper {
        border : 2px solid black;
        padding : 10px;
    }
    </style>
</head>
<body>

    <?php 
    
    $jawabanIsset = "Isset adalah = Berfungsi untuk mengecek sebuah variabel apakah sudah dibuat atau belum, dan akan menghasilkan nilai boolean. Fungsi isset juga mengembalikan false jika variabel pengujian berisi nilai NULL.  <br><br>";
    $jawabanEmpty = "Empty adalah = Berfungsi sebagai penanda suatu kondisi. Contohnya yang sering kita temukan adalah dalam pengisian suatu data, apakah data tersebut ada isinya atau tidak.";

    function soal($style)
    {
        global $jawabanIsset, $jawabanEmpty;
        echo $jawabanIsset, $jawabanEmpty;
        return $style;
    }

    ?>

    <div class = "wrapper">
        <?= soal(""); ?>
    <div>

</body>
</html>