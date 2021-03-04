<?php 
// Nama: Ririn Syafira Kirana
// NRP : 203040064
// Shift: Jumat 10.00 - 11.00
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas 1</title>

    <style>
        .kotak {
            width: 50px;
            height: 50px;
            border: 3px solid black;
            display: inline-block;
        }
        .lightblue {
            background-color: lightblue;
        }
        .salmon {
            background-color: salmon;
        }
    </style>
</head>
<body>
    <?php for ($kolom = 1; $kolom <= 6; $kolom++) : 
        for ($baris = 1; $baris <= 6; $baris++) :
            if ($kolom%2==!0) : 
                if ($baris%2==!0) : ?> 
                    <div class="kotak lightblue"></div>
                <?php else: ?>
                    <div class="kotak salmon"></div>  
                <?php endif; ?>

            <?php else: 
                if($baris%2==!0) : ?>
                    <div class="kotak salmon"></div>
                <?php else: ?>
                    <div class="kotak lightblue"></div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html>