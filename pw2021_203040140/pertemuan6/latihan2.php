<?php

/*

Renaldy Rizky Firdiansyah

203040140

Teknik Informatika (D)

Rabu, 17 Februari 2021

Pemrograman Web

Pertemuan 6 - Array Associative

*/

?>

<?php 

/* 

Array Associative
Keynya adalah string yang dibuat sendiri

contoh sederhana
$mahasiswa = [
    "nama" => "Renaldy", 
    "nrp" => "203040140",
    "email" => "renaldyaja",
    "jurusan" => "Teknik Informatika"
];
echo $mahasiswa["jurusan"];

contoh multidimensi
$mahasiswa = [
    [
        "nama" => "Renaldy", 
        "nrp" => "203040140", 
        "jurusan" => "Teknik Informatika", 
        "email" => "renaldyaja@gmail.com"
    ],
    [
        "nama" => "Maharani", 
        "nrp" => "203010175", 
        "jurusan" => "Teknik Industri", 
        "email" => "m4haran1@gmail.com"
    ],
    [
        "nama" => "Partii", 
        "nrp" => "202033111", 
        "jurusan" => "Ilmu Komunikasi", 
        "email" => "partic@gmail.com"
    ]
];
            indexnya    indexnya string
                \       |
echo $mahasiswa[1]["nama"];

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

<?php foreach( $films as $film ) : ?>
    <ul>
        <li>
            <img src="gambar/<?= $film["gambar"]; ?>">
        </li>
        <li>Judul : <?= $film["judul"] ?></li>
        <li>Sutradara : <?= $film["sutradara"] ?></li>
        <li>Rilis : <?= $film["rilis"] ?></li>
        <li>Genre : <?= $film["genre"] ?></li>
    </ul>
<?php endforeach ?>
    
</body>
</html>