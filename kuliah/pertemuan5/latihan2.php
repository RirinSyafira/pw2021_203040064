<?php 
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 5 (12 Maret 2021)
Mempelajari Array PHP
Latihan 2
*/

// Pengulangan pada array
// for / foreach
$angka = [3,2,15,20,11,97,92,45];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both; }
    </style>
</head>
<body>
    <?php for($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach( $angka as $a ) { ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach( $angka as $a ) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
</body>
</html>