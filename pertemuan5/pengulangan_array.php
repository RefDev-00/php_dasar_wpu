<?php

// Pengulangan pada Array
// for / foreach
$angka = [1, 3, 2, 4, 5, 6, 2, 3];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan pada array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <!-- Pengulangan Array Pertama menggunakan for -->
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- Pengulangan Array Kedua menggunakan foreach-->
    <?php foreach ($angka as $row) { ?>
        <div class="kotak"> <?php echo $row; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- Pengulangan Array Kedua menggunakan foreach-->

    <?php foreach ($angka as $row) : ?>
        <div class="kotak"><?php echo $row; ?></div>
    <?php endforeach ?>
</body>

</html>