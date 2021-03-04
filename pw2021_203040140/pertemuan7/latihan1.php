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

/*

Variabel Scope / Lingkup Variabel
Variabel yang berada diluar function sama yang didalam function itu ruang lingkupnya berbeda
$x = 10; -> variabel lokal untuk halaman
function tampilX() {
    $x = 20; -> variabel lokal untuk function ini saja
    global $x; -> ketika kita ganti dengan baris ini maka akan mencari variabel yang berada diluar function ini
    echo $x;
}
tampilX();
echo "<br>";
echo $x;

Superglobal Variabel PHP 
semuanya array assosiative
$_GET -> datanya akan dikirim melalui url dan ditangkap dengan variabel superglobalnya
$_POST ->
$_REQUEST ->
$_SESSION ->
$_COOKIE ->
$_SERVER ->
$_ENV ->

*/

$films = [
    [
        "judul" => "Crash Landing on You", 
        "sutradara" => "Lee Jung-hyo", 
        "rilis" => "2019", 
        "genre" => " Romantic drama,
                    Romantic comedy[",
        "gambar" => "cloy.jpg"
    ],
    [
        "judul" => "Angel's Last Mission: Love", 
        "sutradara" => "Lee Jung-sub", 
        "rilis" => "2019", 
        "genre" => "Romantic",
        "gambar" => "alm.jpg"
    ],
    [
        "judul" => "Start-Up", 
        "sutradara" => "Oh Choong-hwan", 
        "rilis" => "2020", 
        "genre" => "Drama",
        "gambar" => "startup.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Film</h1>

<!-- <?php foreach( $films as $film ) : ?>
    <ul>
        <li>
            <img src="gambar/<?= $film["gambar"]; ?>">
        </li>
        <li>Judul : <?= $film["judul"] ?></li>
        <li>Sutradara : <?= $film["sutradara"] ?></li>
        <li>Rilis : <?= $film["rilis"] ?></li>
        <li>Genre : <?= $film["genre"] ?></li>
    </ul>
<?php endforeach ?> -->

<ul>
    <?php foreach( $films as $film ) : ?>
        <li>
        <a href="latihan2.php?judul=<?= $film["judul"] ?>&sutradara=<?= $film["sutradara"] ?>&rilis=<?= $film["rilis"] ?>&genre=<?= $film["genre"] ?>&gambar=<?= $film["gambar"]; ?>"><?= $film["judul"] ?></a>
        </li>
    <?php endforeach ?>
</ul>
    
</body>
</html>