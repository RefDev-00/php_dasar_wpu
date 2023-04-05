<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// koneksi ke database melalui file connect
require "connect.php";


// pagination
// konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

// query function
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC LIMIT $awalData, $jumlahDataPerHalaman");

// Ketika tombol cari di tekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Entry</title>

    <!-- link CSS Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Link JS Boostsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <a href="logout.php">Logout</a>
    <div class="container-sm">
        <h2 style="text-align: center; margin-top: 20px;">Entry Data</h2>
        <a href="create.php">Tambah Data</a>
        <form action="" method="post">
            <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan Pencarian..." autocomplete="off">
            <button type="submi" name="cari">Cari</button>
        </form>

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
                    <td><?php echo $number + $awalData; ?></td>
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


        <!-- Button Navigasi -->
        <?php if ($halamanAktif > 1) : ?>
            <a href="?page= <?= $halamanAktif - 1 ?>">&laquo;</a>
        <?php endif; ?>


        <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
            <?php if ($i == $halamanAktif) : ?>
                <a href="?page= <?php echo $i; ?>" style="font-weight: bold;"><?php echo $i; ?></a>
            <?php else : ?>
                <a href="?page= <?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if ($halamanAktif < $jumlahHalaman) : ?>
            <a href="?page= <?= $halamanAktif + 1 ?>">&raquo;</a>
        <?php endif; ?>
        <br></br>
    </div>
</body>

</html>