<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

    function gantiStyle($tulisan, $style1, $style2) {
        return "<div class=\"$style1 $style2\">$tulisan</div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2a</title>
    <style>
        .gantiTulisan{ 
            font-size: 28px;
            font-family: arial;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
        }
        .wrapper{
            border: 1px solid black;
            box-shadow: 0 0 10px grey;
            padding: 7px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php echo gantiStyle("Selamat datang di praktikum pw", "gantiTulisan", "wrapper") ?>
</body>
</html>