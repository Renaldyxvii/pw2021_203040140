<?php
/*
    Renaldy Rizky Firdiansyah
    203040140
    Jum'at, 13:00
*/
?>

<?php

require 'function.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo   "<script>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'admin.php';
            </script>";
} else {
    echo    "<script>
                alert('Data Gagal Dihapus!');
                document.location.href = 'admin.php';
            </script>";
}
?>