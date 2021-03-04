<?php

/*

Renaldy Rizky Firdiansyah

203040140

Teknik Informatika (D)

Senin, 15 Februari 2021

Pemrograman Web

Pertemuan 5 - Array

*/

?>

<?php 

/* 

Array numeric
array yang indexnya angka

Array Assosiatif
array yang indexnya string

*/

$mahasiswa = [
    ["Renaldy", "203040140", "Teknik Informatika", "renaldyaja@gmail.com"],
    ["Maharani", "203010175", "Teknik Industri", "m4haran1@gmail.com"],
    ["Partii", "202033111", "Ilmu Komunikasi", "partic@gmail.com"]
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

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0] ?></li>
        <li>NRP : <?= $mhs[1] ?></li>
        <li>Jurusan : <?= $mhs[2] ?></li>
        <li>Email : <?= $mhs[3] ?></li>
    </ul>
<?php endforeach ?>
    
</body>
</html>