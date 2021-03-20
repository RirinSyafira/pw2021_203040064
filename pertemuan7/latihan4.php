<?php
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 7 (20 Maret 2021)
Mempelajari GET & POST PHP
Latihan 4
*/
?>
<?php
if(!isset($_POST["nama"])){
    header("Location: latihan3.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1>Selamat Datang, <?= $_POST["nama"];?></h1>
</body>
</html>