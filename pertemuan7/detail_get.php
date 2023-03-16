<?php
// Cek apakah tidak ada data di $_GET

if (
    !isset($_GET["Nama"]) ||
    !isset($_GET["Nim"]) ||
    !isset($_GET["nama"])
) {
    // redirect
    header("Location: detail_get.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail $_GET</title>
</head>

<body>
    <h2>Detail Data Siswa</h2>
    <ul>
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["nim"]; ?></li>
        <li><?php echo $_GET["jurusan"]; ?></li>
    </ul>

    <a href="$_get.php">Back</a>
</body>

</html>