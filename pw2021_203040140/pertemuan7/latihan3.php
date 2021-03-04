<?php

/*

Renaldy Rizky Firdiansyah

203040140

Teknik Informatika (D)

Rabu, 17 Februari 2021

Pemrograman Web

Pertemuan 7 - GET & POST

*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<?php if( isset($_POST["submit"]) ) : ?>
    <h1>Selamat Datang <?= $_POST["judul"]; ?></h1>
<?php endif; ?>

<form action="" method="post">
    Masukan Judul Film:
    <input type="text" name="judul">
    <br>
    <button type="submit" name="submit">Kirim</button>
</form>

    
</body>
</html>