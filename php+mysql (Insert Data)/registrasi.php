<?php
require 'connect.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                </script>";
    } else{
        echo mysqli_error($db_connect);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <!-- link CSS Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Link JS Boostsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <h2 style="text-align: center; margin-top: 20px;">Halaman Registrasi</h2>

        <form action="" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username :</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password :</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>

            <div class="mb-3">
                <label for="passwordCheck" class="form-label">Konfirmasi Password:</label>
                <input type="password" class="form-control" name="passwordCheck" id="passwordCheck">
            </div>

            <button type="submit" name="register" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>

</html>