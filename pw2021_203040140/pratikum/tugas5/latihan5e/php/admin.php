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
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $games = query("SELECT * FROM equipment_ml WHERE 
                nama_equipment LIKE '%$keyword%' OR
                tipe_equipment LIKE '%$keyword%' OR
                penjelasan LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' ");
} else {
    $games = query("SELECT * FROM equipment_ml");
}
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
        <a href="tambah.php" style="text-decoration:none; color:#000;">Tambah Data</a>
    </div>
    <form action="" method="get" style="float: right;">
                    <input type="text" name="keyword" size="30" placeholder="Cari Di Sini!" autofocus>
                    <button type="submit" name="cari" class="btn"><span>Cari!</span></button><br><br>
                </form>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr style="background-color: yellow;">
            <th>#</th>
            <th>Opsi</th>
            <th>Picture</th>
            <th>Nama Equipment</th>
            <th>Tipe Equipment</th>
            <th>Penjelasan</th>
            <th>Harga</th>
        </tr>
    </thead>
        <tbody>
              <?php if (empty($games)) : ?>
                        <tr>
                          <td colspan="9"> 
                            <h1>Data tidak ditemukan</h1>
                          </td>
                        </tr>
                      <?php else : ?>
                        <?php $i = 1; ?>
                        <?php foreach ($games as $g) : ?>
                          <tr>
                            <td ><?= $i; ?></td>
                            <td>
                              <a href="ubah.php?id=<?= $g["id"]; ?>"><button class="btn">Ubah</button></a>
                              <a href="hapus.php?id=<?= $g["id"]; ?>" onclick="return confirm('Hapus Data??')"><button class="btn">Hapus</button></a>
                            </td>
                            <td><img src="../img/<?= $g['picture']; ?>" alt=""></td>
                            <td><?= $g['nama_equipment']; ?></td>
                <td><?= $g['tipe_equipment']; ?></td>
                <td><?= $g['penjelasan']; ?></td>
                <td><?= $g['harga']; ?></td>
                          </tr>
                          <?php $i++; ?>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
</html>