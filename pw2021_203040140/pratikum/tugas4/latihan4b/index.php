<?php 
/*
Renaldy Rizky Firdiansyah
203040140
Praktikum PW SHIFT JUMAT JAM 13:00
*/
?>

<?php

// Menghubungkan dengan file php lainya 
require 'php/function.php';


$games = query("SELECT * FROM equipment_ml");

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
    <?php foreach($games as $g) : ?>
    <tr>
      <th scope="games"><?= $i ?></th>
      <td><img src="img/<?= $g["picture"]; ?>"></td>
      <td><?= $g["nama_equipment"] ?></td>
      <td><?= $g["tipe_equipment"] ?></td>
      <td><?= $g["penjelasan"] ?></td>
      <td><?= $g["harga"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
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
