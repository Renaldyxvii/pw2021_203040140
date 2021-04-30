<?php
/* 
Renaldy Rizky Firdiansyah
203040140
https://github.com/Renaldyxvii/pw2021_203040140
Pertemuan 13 (24 April 2021)
AJAX Live Search
*/
?>
<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus');
          document.location.href = 'index.php';
       </script>";
} else {
  echo "data gagal ditambahkan!";
}