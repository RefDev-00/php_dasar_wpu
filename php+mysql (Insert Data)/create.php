<?php
// koneksi ke DBMS
require "connect.php";
// cek apakah tombol submit sudah ditekan atau belum

if (isset($_POST["submit"])) {
    // Ambil data dari tiap element dalam form
    $nrp = $_POST['nrp'];
    $nama = $_POST["nama"];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $gambar = $_POST['gambar'];

    // query insert data
    $query = "INSERT INTO mahasiswa
     VALUES
     ('','$nrp','$nama','$email','$jurusan','$gambar')";
    mysqli_query($db_connect, $query);
    
    // cek apakah data berhasil di tambahkan atau tidak 
    var_dump(mysqli_affected_rows($db_connect));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
</head>

<body>
    <h1>Input Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">Nrp :</label>
                <input type="text" id="nrp" name="nrp">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" id="nama" name="nama">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" id="email" name="email">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" id="jurusan" name="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" id="gambar" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Save Data</button>
            </li>
        </ul>
    </form>
</body>

</html>