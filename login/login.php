<?php
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        header("Location: admin.php");
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>
    <h1>Login Kuy!</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username & Password Salah!</p>
    <?php endif; ?>

    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password:</label>
        <input type="text" name="password" id="password">
        <br>
        <button type="submit" name="submit">Login</button>
    </form>
</body>

</html>