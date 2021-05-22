<?php
/*
Ririn Syafira Kirana
203040064
https://github.com/RirinSyafira/pw2021_203040064
Pertemuan 12 (16 Mei 2021)
Mempelajari Login dan Registrasi
Logout
*/
?>
<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
?>