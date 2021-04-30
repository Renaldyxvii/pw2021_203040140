<?php
/*
    Renaldy Rizky Firdiansyah
    203040140
    Jum'at, 13:00
*/
?>

<?php
// fungsi untuk melakukan koneksi ke database 
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw2021_tubes_203040140");

    return $conn;
}

// function untuk melkukan query dan memasukkannya kedalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row  = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();
    
    $picture = htmlspecialchars($data['picture']);
    $nama_equipment = htmlspecialchars($data['nama_equipment']);
    $tipe_equipment  = htmlspecialchars($data['tipe_equipment']);
    $penjelasan = htmlspecialchars($data['penjelasan']);
    $harga = htmlspecialchars($data['harga']);
    

    $query = "INSERT INTO equipment_ml
                VALUES 
                ('', '$picture', '$nama_equipment', '$tipe_equipment', '$penjelasan', '$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM equipment_ml WHERE id = $id");

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
$conn = koneksi();
    
    $picture = htmlspecialchars($data['picture']);
    $nama_equipment = htmlspecialchars($data['nama_equipment']);
    $tipe_equipment  = htmlspecialchars($data['tipe_equipment']);
    $penjelasan = htmlspecialchars($data['penjelasan']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE equipment_ml SET
                picture = '$picture',
                nama_equipment = '$nama_equipment',
                tipe_equipment = '$tipe_equipment',
                penjelasan = '$penjelasan',
                harga = '$harga',
                WHERE id = '$id'
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('username sudah digunakan!');
            </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan userbaru ke database
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>