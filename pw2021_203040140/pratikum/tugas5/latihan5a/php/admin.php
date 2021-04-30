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
    <title>Equipment ML</title>
</head>
<body>
    <h1 class="display-4">Equipment ML</h1>
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
                    <a href=""><button style=" border-color: red">Ubah</button></a>
                    <a href=""><button style=" border-color: blue">Hapus</button></a>
                </td>
                <td><img  src="../img/<?= $g['picture']; ?>" alt=""></td>
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
