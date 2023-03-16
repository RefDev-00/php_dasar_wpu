<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detai halaman post</title>
</head>

<body>
    <h2>Data Pribadi</h2>
    <ul>
        <li>Nama : <?php echo $_POST["nama"]; ?></li>
        <li>Nim : <?php echo $_POST["nim"]; ?></li>
        <li>Jurusan : <?php echo $_POST["jurusan"]; ?></li>
        <li>Email : <?php echo $_POST["email"]; ?></li>
    </ul>
</body>

</html>