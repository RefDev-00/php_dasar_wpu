<?php
// koneksi ke database melalui file connect
require "connect.php";

// query function
$mahasiswa = query('SELECT * FROM mahasiswa');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Mahasiswa</title>

    <!-- link CSS Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Link JS Boostsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-sm">
        <h2 style="text-align: center; margin-top: 20px;">Halaman Data Mahasiswa</h2>
        <a href="create.php">Tambah Data</a>
        <br></br>
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NRP</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>

            <?php
            $number = 1;
            ?>
            <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                    <td><?php echo $number; ?></td>
                    <td><?php echo $row["nama"]; ?></td>
                    <td><?php echo $row["nrp"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["jurusan"]; ?></td>
                    <td><img src="img/<?php echo $row["gambar"]; ?>" alt="refsi" width="50px"></td>
                    <td>
                        <a href="edit.php?id=<?= $row["id"]; ?>">Ubah</a>
                        <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah yakin ingin dihapus?')">Hapus</a>
                    </td>
                </tr>
                <?php $number++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>