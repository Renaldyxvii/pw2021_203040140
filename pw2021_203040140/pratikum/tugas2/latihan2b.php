<!-- 
 Renaldy Rizky Firdiansyah
 203040140
 PRAKTIKUM PW, Shift Hari Jum'at Jam 13:00  
 -->

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Latihan 2 B</title>

     <style>
         .kotak {
             border: 2px solid black;
             padding: 10px;
         }
     </style>
 </head>

 <body>

     <?php

     $jawabanIsset = "Fungsi Isset = Untuk menghindari error undefined variable (variabel tidak didefinisi). Selain itu fungsi isset juga bisa digunakan untuk mengecek variabel pada PHP apakah variabel tersebut sudah dibuat atau belum. <br><br>";
     $jawabanEmpty = "Empty adalah = Berfungsi sebagai penanda suatu kondisi. Contohnya sepeti pengisian suatu data, apakah data tersebut ada isinya atau tidak. Jika datanya kosong, maka akan dimunculkan peringatan atau sebagainya";

     function soal($style)
     {
         global $jawabanIsset, $jawabanEmpty;
         echo $jawabanIsset, $jawabanEmpty;
         return $style;
     }

     ?>

     <div class="kotak">
         <?= soal("  "); ?>
     </div>

 </body>

 </html>