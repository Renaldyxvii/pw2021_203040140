<?php 
/*
Renaldy Rizky Firdiansyah
203040140
Praktikum PW SHIFT JUMAT JAM 13:00
*/
?>

<?php 
require 'php/function.php';

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

<body style="margin: auto 100px;">
    <div class="add">
        <a href="php/admin.php">Ke Halaman Admin</a>
    </div>
    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>Picture</th>
                <th>Nama Equipment</th>
                <th>Tipe Equipment</th>
                <th>Penjelasan</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($games as $g) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img width="220px" src="img/<?= $g['picture']; ?>" alt=""></td>
                <td>
                    <a href="php/detail.php?id=<?= $g['id']; ?>">
                        <?= $g["nama_equipment"]; ?>
                    </a>
                </td>
                <td><?= $g['tipe_equipment']; ?></td>
                <td><?= $g['penjelasan']; ?></td>
                <td><?= $g['harga']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>