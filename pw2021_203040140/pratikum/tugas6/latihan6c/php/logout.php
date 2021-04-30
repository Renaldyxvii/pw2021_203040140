<?php
//Renaldy Rizky Firdiansyah
    //203040140
   // Prak Pw Hari Jum'at, Jam 13:00
?>

<?php
  session_start();
  session_destroy();

  setcookie('username', '', time() - 3600);
  setcookie('hash', '', time() - 3600);
  header("Location: ../index.php");
  die;
?>