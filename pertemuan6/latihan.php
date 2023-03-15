<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Asosiatif</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: #BADA55;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php
    $numbers = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    ?>

    <h2>Pengulangan Array Asosiatif</h2>
    <?php foreach ($numbers as $number) : ?>
        <?php foreach ($number as $row) : ?>
            <div class="kotak"><?= $row; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>

</body>

</html>