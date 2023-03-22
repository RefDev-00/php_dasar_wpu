<?php
// Koneksi ke Database
// format : ("nama localhost", "username", "password", "nama database");
$db_connect = mysqli_connect("localhost", "root", "", "db_php-dasar");

// Mengambil data dari tabel mahasiswa / Query data mahasiswa
$result = mysqli_query($db_connect, "SELECT * FROM mahasiswa");

// Ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya (numerik & String)
// mysqli_fetch_object() // mengembalikan nilai object

// untuk melakukan pengambilan data berulang
// while ($mhs = mysqli_fetch_assoc($result)) {
//   var_dump($mhs);
// }
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