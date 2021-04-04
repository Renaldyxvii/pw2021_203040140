<?php 
/*
Renaldy Rizky Firdiansyah
203040140
Praktikum PW SHIFT JUMAT JAM 13:00
*/
?>

<?php
// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "");

// Memilih database
mysqli_select_db($conn, "pw2021_tubes_203040140");

// if ($conn) {
// echo "Terhubung";
// } else {
// echo "gagal Terhubung";
// }

// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM equipment_ml");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment Mobile Legend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="float-md-start">
<table class="table table-bordered table-striped table-hover">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Picture</th>
      <th scope="col">Nama Equipment</th>
      <th scope="col">Tipe Equipment</th>
      <th scope="col">Penjelasan</th>
      <th scope="col">Harga</th>
    </tr>
    <?php $i = 1 ?>
    <?php while($row =mysqli_fetch_assoc($result)) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><img src="img/<?= $row["picture"]; ?>"></td>
      <td><?= $row["nama_equipment"] ?></td>
      <td><?= $row["tipe_equipment"] ?></td>
      <td><?= $row["penjelasan"] ?></td>
      <td><?= $row["harga"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endwhile; ?>
</table>
<footer class="bg-dark" style="color:white">
        <div class="container">
          <div class="row pt-3">
            <div class="col text-center">
              <p>Renn. Copyright 2020.</p>
            </div>
          </div>
</div>
</footer>
</body>
</html>