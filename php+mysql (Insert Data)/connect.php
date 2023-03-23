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
    $gambar = htmlspecialchars($data['gambar']);

    // query insert data
    $query = "INSERT INTO mahasiswa
     VALUES
     ('','$nama','$nrp','$email','$jurusan','$gambar')";
    mysqli_query($db_connect, $query);

    return mysqli_affected_rows($db_connect);
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
    $gambar = htmlspecialchars($data['gambar']);

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
