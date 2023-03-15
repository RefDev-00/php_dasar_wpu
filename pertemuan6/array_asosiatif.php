<!-- Array Associative
 Definisinya sama seperti array numerik, kecuali
 key-nya adalah sting yang kita buat sendiri -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $students = [
        [
            "nama" => "Refsi Maulana Siregar",
            "jurusan" => "Teknik Informatika",
            "email" => "refsimaulana@gmail.com",
            "gambar" => "refsi.jpg"
        ],
        [
            "nama" => "Audi Noor",
            "jurusan" => "Teknik Kimia",
            "email" => "audi@gmail.com",
            "gambar" => "audi.jpg"
        ],
        [
            "nama" => "Cahyoning Saputro",
            "jurusan" => "Teknik Biologi",
            "email" => "cahyoning@gmail.com",
            "gambar" => "cahyo.jpg"
        ]
    ];
    ?>

    <h2>Daftar Nama Mahasiswa</h2>
    <?php foreach ($students as $student) : ?>
        <ul>
            <li>Nama :<?= $student["nama"]; ?></li>
            <li>Jurusan :<?= $student["jurusan"]; ?></li>
            <li>Email :<?= $student["email"]; ?></li>
            <!-- <li>Photo :<img src="img/<?= $student["gambar"]; ?>" alt=""></li> -->
        </ul>
    <?php endforeach; ?>
</body>

</html>