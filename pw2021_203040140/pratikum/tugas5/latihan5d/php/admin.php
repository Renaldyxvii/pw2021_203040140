<?php
/*
    Renaldy Rizky Firdiansyah
    203040140
    Jum'at, 13:00
*/
?>

<?php
// menghubungkan dengan file php lainnya
require 'function.php';

// melakukan query
$games = query("SELECT * FROM equipment_ml");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Equipment ML</title>
</head>
<body>
    <h1 class="display-4">Equipment ML</h1>
    <div class="add">
        <a href="tambah.php">Tambah Data</a><br><br>
    </div>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr style="background-color: yellow;">
            <th>#</th>
            <th>Opsi</th>
            <th>Picture</th>
            <th>Nama Equipment</th>
            <th>Tipe Equipment</th>
            <th>Penjelasan</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($games as $g) : ?>
            <tr>
                <td style="background-color: yellow;"><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $g["id"]; ?>"><button style="border-color: red" >Ubah</button></a>
                      <a href="hapus.php?id=<?= $g["id"]; ?>" onclick="return confirm('Hapus Data??')"><button style="border-color: blue; background-color: white">Hapus</button></a>
                </td>
                <td><img src="../img/<?= $g['picture']; ?>" alt=""></td>
                <td><?= $g['nama_equipment']; ?></td>
                <td><?= $g['tipe_equipment']; ?></td>
                <td><?= $g['penjelasan']; ?></td>
                <td><?= $g['harga']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>