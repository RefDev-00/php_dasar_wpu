<?php
// Koneksi ke Database
// format : ("nama localhost", "username", "password", "nama database");
$db_connect = mysqli_connect("localhost", "root", "", "db_php-dasar");

// function query
function query($query)
{
    global $db_connect;
    $result = mysqli_query($db_connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $db_connect;
    // Ambil data dari tiap element dalam form
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data['nrp']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);

    // Upload Gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO mahasiswa
     VALUES
     ('','$nama','$nrp','$email','$jurusan','$gambar')";
    mysqli_query($db_connect, $query);

    return mysqli_affected_rows($db_connect);
}

function upload()
{
    // Mengambil data dari $_files
    $namafile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang di upload
    if ($error === 4) {
        echo "<script>
            alert('Pilih Gambar terlebih dahulu');
            </script>";

        return false;
    }

    // cek apakah yang di upload adalah gambar
    $extensiGambarValid = ['jpg', 'jpeg', ' png'];
    $extensiGambar = explode('.', $namafile);
    $extensiGambar = strtolower(end($extensiGambar));

    if (!in_array($extensiGambar, $extensiGambarValid)) {
        echo "<script>
            alert('Yang anda upload bukan gambar');
            </script>";

        return false;
    }

    // cek Jika ukuran gambar terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
            alert('Ukuran gambar terlalu besar');
            </script>";

        return false;
    }


    // generate nama gambar baru menjadi uniqid
    $namafileBaru =  uniqid();
    $namafileBaru .= '.';
    $namafileBaru .= $extensiGambar;

    // Loloskan gambar jika seteleh melewati pengecekan.
    move_uploaded_file($tmpName, 'img/' . $namafileBaru);

    return $namafileBaru;
}

function hapus($id)
{
    global $db_connect;

    mysqli_query($db_connect, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($db_connect);
}

function edit($data)
{
    global $db_connect;
    // Ambil data dari tiap element dalam form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data['nrp']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);

    $gambarLama = htmlspecialchars($data['gambarLama']);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    // query insert data
    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nrp = '$nrp',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar' 
            WHERE id = $id
                ";
    mysqli_query($db_connect, $query);

    return mysqli_affected_rows($db_connect);
}

function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa 
                WHERE 
                nama LIKE '%$keyword%' 
                OR
                nrp LIKE '%$keyword%' 
                ";

    return query($query);
}
