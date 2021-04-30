<?php
/*
    Renaldy Rizky Firdiansyah
    203040140
    Jum'at, 13:00
*/
?>

<?php
require 'function.php';
$id = $_GET['id'];
$g = query("SELECT * FROM equipment_ml WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['ubah'])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
				alert('data berhasil diubah!');
				document.location.href = 'admin.php';
			</script>";
    } else {
        echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'admin.php';
			</script>
		";
    }
}
?>


<h2>Form Ubah Data Equipment</h2>
<form action="" method="post">
    <ul>
        <input type="hidden" name="id" id="id" value="<?= $g['id']; ?>">
        <li>
            <label for="picture">Picture  :</label><br>
            <input type="file" name="picture" id="picture" required value="<?= $g['picture'] ?>"><br><br>
        </li>
        <li>
            <label for="nama_equipment">Nama Equipment :</label><br>
            <input type="text" name="nama_equipment" id="nama_equipment" required value="<?= $g['nama_equipment']; ?>"><br><br>
        </li>
        <li>
            <label for="tipe_equipment">Tipe Equipment :</label><br>
            <input type="text" name="tipe_equipment" id="tipe_equipment" required value="<?= $g['tipe_equipment'] ?>"><br><br>
        </li>
        <li>
            <label for="penjelasan">Penjelasan :</label><br>
            <input type="text" name="penjelasan" id="penjelasan" required value="<?= $g['penjelasan'] ?>"><br><br>
        </li>
        <li>
            <label for="harga">Harga :</label><br>
            <input type="text" name="harga" id="harga" required value="<?= $g['harga'] ?>"><br><br>
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data!</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black">Kembali</a>
        </button>
    </ul>
</form>