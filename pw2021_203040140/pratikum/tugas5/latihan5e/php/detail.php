<?php 

// mengecek apakah ada id yang dikirimkan 
// jika tidak maka akan dikembalikan ke halaman index.php 
if (!isset($_GET['id'])) {
    header("localhost: ../index.php");
    exit;
}
require 'function.php';

// mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$games = query("SELECT * FROM equipment_ml WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment Mobile Legends</title>    
</head>
<body>
    <div class="container">
    <h1>Equipment Mobile Legends</h1>
        <div class="gambar">
            <img src="../img/<?= $games["picture"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $games["nama_equipment"]; ?></p>
            <p><?= $games["tipe_equipment"]; ?></p>
            <p><?= $games["penjelasan"]; ?></p>
            <p><?= $games["harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href=" ../index.php">Kembali</a></button>
    </div>
</body>
</html