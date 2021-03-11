<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2b</title>
    <style>
        .style {
            border: 3px solid black;
            padding: 10px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <?php 
    $jawabanIsset = "Isset adalah = function PHP yang memeriksa apakah sebuah variabel di set, yang berarti variabel tersebut harus dideklarasikan dan bukan NULL.<br><br>";
    $jawabanEmpty = "Empty adalah = function PHP yang memeriksa apakah variabel kosong atau tidak.";

    function soal($style){
    global $jawabanIsset, $jawabanEmpty;
    echo $jawabanIsset, $jawabanEmpty;
    return $style;
    }

    ?>

    <div class="style">
        <?= soal(""); ?>
    </div>
        

</body>
</html>