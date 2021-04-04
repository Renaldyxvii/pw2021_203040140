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

//melakukan query biasa ke table hijab
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
<div class="container">
<table class="table table-bordered table-striped table-hover">   
    <?php foreach($games as $g) : ?>
    <p class="nama_equipment">
                <a href="php/detail.php?id=<?= $g['id'] ?>">
                    <?= $g["nama_equipment"] ?>
                  </a>
            </p>
    <?php endforeach; ?>
  </div>
</body>
</html>