<?php

/*

Renaldy Rizky Firdiansyah

203040140

Teknik Informatika (D)

Rabu, 17 Februari 2021

Pemrograman Web

Pertemuan 7 - GET & POST

*/

?>

<?php 

if( !isset($_GET["judul"]) ||
    !isset($_GET["sutradara"]) ||
    !isset($_GET["rilis"]) ||
    !isset($_GET["genre"]) ||
    !isset($_GET["gambar"]) ) {
    // redirect -> memindahkan user ke halaman lain
    header("Location: latihan1.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Fim</title>
</head>
<body>

<ul>
    <li><img src="gambar/<?= $_GET["gambar"]; ?>"></li>
    <li>Judul : <?= $_GET["judul"] ?></li>
    <li>Sutradara : <?= $_GET["sutradara"] ?></li>
    <li>Rilis : <?= $_GET["rilis"] ?></li>
    <li>Genre : <?= $_GET["genre"] ?></li>
</ul>
    
<a href="latihan1.php">Kembali ke daftar film</a>

</body>
</html>