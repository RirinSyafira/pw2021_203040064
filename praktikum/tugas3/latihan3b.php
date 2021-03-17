<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

$pemainBola = [
    "Mohammad Salah",
    "Cristiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3b</title>
</head>
<body>
    <h2>Daftar pemain bola terkenal</h2>
    <ol> 
        <?php foreach($pemainBola as $pemainBaru) : ?>
            <li><?php echo $pemainBaru ?></li>
        <?php endforeach; ?>
    </ol>

    <?php 
        array_push($pemainBola, "Luca Modric", "Sadio Mane");
        sort($pemainBola);
    ?>

    <h2>Daftar pemain bola terkenal baru</h2>
    <ol>
        <?php foreach($pemainBola as $pemainBaru) : ?>
        <li><?php echo $pemainBaru ?></li>
        <?php endforeach; ?>
    </ol>
    
</body>
</html>