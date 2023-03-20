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
</head>

<body>
  <h1>Halaman Data Mahasiswa</h1>
  <table border="1" cellpadding="10" cellspacing="0">
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
    <?php foreach($mahasiswa as $row) : ?>
      <tr>
        <td><?php echo $number; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["nrp"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["jurusan"]; ?></td>
        <td><img src="img/<?php echo $row["gambar"]; ?>" alt="refsi" width="50px"></td>
        <td>
          <a href="#">Ubah</a>
          <a href="#">Hapus</a>
        </td>
      </tr>
      <?php $number++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>