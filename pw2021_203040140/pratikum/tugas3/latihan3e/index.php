* ----------------
 Renaldy Rizky Firdiansyah
 203040140
 Praktikum PW SHIFT JUMAT JAM 13:00
 ----------------- */

<?php
    $game = [
        ["1.png", "Blade of Despair", "Physical Attack", "Menambahkan 160 Physical Attack dan 5% Movement Speed. Pasif Unik-Despair: Menyerang unit lawan  yang memiliki HP di bawah 50% akan meningkatkan Physical Attack Hero sebesar 25%.", "3010 Gold"],
        ["2.jpg", "Haas's Claws", "Physical Lifesteal", "Menambahkan 70 Physical Attack, menambahkan 20% Physical Lifesteal, dan Jika HP berada dibawah 40%, Hero akan memperoleh 10% Physical Lifesteal tambahan.", "1810 Gold"],
        ["3.jpg", "Necklace of  Durance", "Healing Reduction", "Menambahkan 60 Magic Power, 5% Cooldown Reduction, Menambahkan 10% Magical Lifesteal, dan Mengurangi efek Regen dari lawan dengan skill Damage sebesar 50% selama 3 detik.", "2010 Gold"],
        ["4.jpg", "Blood Wings", "High Damage Magic", "Menambahkan 150 Magic Power,500 HP, dan meningkatkan 1.5 HP untuk setiap peningkatan Magic Power", "3000 Gold"],
        ["5.jpg", "Blade Armor", "Counter Attack", "Menambahkan 90 Physical Defense, dan memberikan 25% dari Physical Attack lawan sebagai Physical Damage kepada lawan yang menyerang anda dengan menggunakan Basic attack", "1660 Gold"]
    ];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Equipment Mobile Legend</title>
  </head>
  <body class="bg-dark">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
     
    <table class="table table-dark table-hover table-striped">
        <thead>
            <tr>
                <th></th>
                <th>NAMA EQUIPMENT</th>
                <th>TIPE EQUIPMENT</th>
                <th>PENJELASAN</th>
                <th>HARGA</th>
            </tr>
        </thead>
        <tbody>
             <?php $i = 1; ?>
            <?php foreach ($game as $g) : ?>
            <tr>
                <td width = "200px"><img width="200px" src="img/<?= $g[0] ?>"></td>
                <td width = "100px"><?= $g[1]; ?></td>
                <td width = "100px"><?= $g[2]; ?></td>
                <td width = "500px"><?= $g[3]; ?></td>
                <td width = "100px"><?= $g[4]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </tbody>
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