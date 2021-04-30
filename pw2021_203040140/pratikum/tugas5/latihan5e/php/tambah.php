<?php
/*
    Renaldy Rizky Firdiansyah
    203040140
    Jum'at, 13:00
*/
?>

<?php
require 'function.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['tambah'])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'admin.php';
			</script>";
    } else {
        echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'admin.php';
			</script>
		";
    }
}
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
    <h3>Form Tambah Data Equipment</h3>
    <form action="" method="post">
    <ul>
	<li>
            <label for="name">Picture :</label><br>
            <input type="file" name="picture" id="picture" required><br><br>
        </li>
        <li>
            <label for="name">Nama Equipment :</label><br>
            <input type="text" name="name" id="name" required><br><br>
        </li>
        <li>
            <label for="name">Tipe Equipment :</label><br>
            <input type="text" name="brand" id="brand" required><br><br>
        </li>
        <li>
            <label for="name">Penjelasan :</label><br>
            <input type="text" name="description" id="description" required><br><br>
        </li>
        <li>
            <label for="name">Harga :</label><br>
            <input type="text" name="price" id="price" required><br><br>
        </li>
        <br>
        <button type="submit" name="tambah">Tambah Data!</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
    </form>
</body>
</html>