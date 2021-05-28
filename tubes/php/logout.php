<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

session_start();
session_destroy();

setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);
header("Location: ../index.php");
die;
