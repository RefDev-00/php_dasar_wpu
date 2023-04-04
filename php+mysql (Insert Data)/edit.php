<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
// koneksi ke DBMS
require "connect.php";

// ambil id di URL
$id = $_GET["id"];

// Query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // cek apakah data berhasil di edit atau tidak 
    if (edit($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Diupdate!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "<script>
        alert('Data Gagal Diupdate!');
        document.location.href = 'index.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <!-- link CSS Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Link JS Boostsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h2 style="text-align: center; margin-top: 20px;">Edit Data Mahasiswa</h2>

        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
            <div>
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
            </div>
            <div>
                <label for="nrp" class="form-label">Nrp :</label>
                <input type="text" class="form-control" name="nrp" id="nrp" value="<?= $mhs["nrp"]; ?>">
            </div>
            <div>
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control" name="email" id="email" value="<?= $mhs["email"]; ?>">
            </div>
            <div>
                <label for="jurusan" class="form-label">Jurusan :</label>
                <input type="text" class="form-control" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar :</label>
                <img src="img/<?php echo $mhs["gambar"]; ?>" alt="" style="width: 50px;, height: 50px;">
                <input type="file" class="form-control" name="gambar" id="gambar">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>