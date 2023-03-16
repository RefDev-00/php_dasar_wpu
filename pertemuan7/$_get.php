<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobal Method $_GET</title>
</head>

<body>
    <?php
    $students = [
        [
            "Nama" => "Refsi Maulana Siregar",
            "Nim" => "8020170342",
            "Jurusan" => "Teknik Informatika"
        ],
        [
            "Nama" => "Cahyoning Saputro",
            "Nim" => "808080808",
            "Jurusan" => "Sistem Informatika"
        ],
        [
            "Nama" => "Rizki Syakur",
            "Nim" => "121231455",
            "Jurusan" => "Sistem Informasi"
        ],
    ];
    ?>
    <h1>Selamat Datang di data siswa</h1>


    <?php
    foreach ($students as $student) : ?>
        <ul>
            <a href="detail_get.php?nama=<?php echo $student["Nama"]; ?>
            &nim=<?php echo $student["Nim"]; ?>
            &jurusan=<?php echo $student["Jurusan"]; ?>">
                <li><?php echo $student["Nama"]; ?></li>
            </a>
        </ul>
    <?php endforeach; ?>

</body>

</html>