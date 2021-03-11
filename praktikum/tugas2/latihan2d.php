<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00
?>
<?php 
    function hitungDeterminan($a, $b, $c, $d) {
        $determinan = ($a * $d) - ($b * $c);

        echo "<table style='border-left: 3px solid black; border-right: 3px solid black;' cellspacing='5' cellpadding='5'>
                <tr>
                    <td>$a</td>
                    <td>$b</td>
                </tr>
                <tr>
                    <td>$c</td>
                    <td>$d</td>
                </tr>
            </table>";
        echo "Hasil determinan matriks tersebut adalah $determinan </b> ";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2d</title>
</head>
<body>
    <?php hitungDeterminan(2, 4, 6, 8); ?>
</body>
</html>