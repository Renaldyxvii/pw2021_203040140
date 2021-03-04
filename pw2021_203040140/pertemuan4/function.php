<?php

/*

Renaldy Rizky Firdiansyah

203040140

Teknik Informatika (D)

Minggu, 14 Februari 2021

Pemrograman Web

Pertemuan 4 - Function

*/

?>

<?php 

/* 

Sebuah function itu biasanya mengembalikan sebuah nilai

ketika pada saat pemanggilan function tidak ada parameter yang dikirim kepada argumen maka akan menggunakan parameter default, tapi kalau di kirimkan maka yang default akan tertimpa

                        ini parameter
                            |
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama";
}

        ini argumen
            |
<h1><?= salam(); ?></h1>

*/

function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>

    <h1><?= salam(); ?></h1>
    
</body>
</html>