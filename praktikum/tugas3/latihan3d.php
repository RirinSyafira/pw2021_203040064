<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

$pemainBola = [
    [
        "nama" => "Cristiano Ronaldo",
        "club" => "Juventus",
        "main" => "100",
        "gol" => "76",
        "assist" => "30"
    ],
    [
        "nama" => "Lionel Messi",
        "club" => "Barcelona",
        "main" => "120",
        "gol" => "80",
        "assist" => "12"
    ],
    [
        "nama" => "Luca Modric",
        "club" => "Real Madrid",
        "main" => "87",
        "gol" => "12",
        "assist" => "48"
    ],
    [
        "nama" => "Mohammad Salah",
        "club" => "Liverpool",
        "main" => "90",
        "gol" => "103",
        "assist" => "8"
    ],
    [
        "nama" => "Neymar Jr",
        "club" => "Paris Saint Germain",
        "main" => "109",
        "gol" => "56",
        "assist" => "15"
    ],
    [
        "nama" => "Sadio Mane",
        "club" => "Liverpool",
        "main" => "63",
        "gol" => "30",
        "assist" => "70"
    ],
    [
        "nama" => "Zlatan Ibrahimovic",
        "club" => "Ac Milan",
        "main" => "100",
        "gol" => "10",
        "assist" => "12"
    ]
];
$totalMain = 0;
$totalGol = 0;
$totalAssist = 0;

foreach($pemainBola as $pBola => $total) {
    $totalMain += $total['main'];
    $totalGol += $total['gol'];
    $totalAssist += $total['assist'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3d</title>
    <style>
        table {
            width: 35%;
            font-family: arial;
            text-align: left;
        }
    </style>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="0">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>
        <?php foreach($pemainBola as $no => $pBola) : ?>
            <tr>
                <td><?= $no+1; ?></td>
                <td><?= $pBola["nama"];?></td>
                <td><?= $pBola["club"];?></td>
                <td><?= $pBola["main"];?></td>
                <td><?= $pBola["gol"];?></td>
                <td><?= $pBola["assist"];?></td>
            </tr>
            
        <?php endforeach;?>
        <tr>
            <td><b>#</td>
            <td colspan="2" style="text-align: center;"><b>Jumlah</td>
            <td><?= $totalMain; ?></td>
            <td><?= $totalGol; ?></td>
            <td><?= $totalAssist; ?></td>
        </tr>


    </table>
</body>
</html>