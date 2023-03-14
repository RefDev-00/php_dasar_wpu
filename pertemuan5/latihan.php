<?php

$students = [
    ["Refsi Maulana", "8020170342", "Teknik Informatika"],
    ["Rizki Maulana", "8020170342", "Teknik Informatika"],
    ["Audi Maulana", "8020170342", "Teknik Informatika"],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan Perulangan di kasus nyata</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($students as $student) : ?>
        <ul>
            <li><?= $student[0]; ?></li>
            <li><?= $student[1]; ?></li>
            <li><?= $student[2]; ?></li>
        </ul>
    <?php endforeach ?>
</body>

</html>