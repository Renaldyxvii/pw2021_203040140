<?php
/* 
Renaldy Rizky Firdiansyah
203040140
https://github.com/Renaldyxvii/pw2021_203040140
Pertemuan 12 (24 April 2021)
Login dan Registrasi
*/
?>
<?php

session_start();
session_destroy();

header("Location: login.php");
exit;