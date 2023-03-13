<?php
/* Pertemuan 2 - PHP Dasar
Sintaks PHP

// Note 1
- Standart Output
- echo, print
- print_r
- var_dump

// Note 2
Penulisan Sintaks PHP
- PHP di dalam HTML
- HTML di dalam PHP 

//Note 3
variabel & Tipe Data
Variabel
tidak boleh diawali dengan angka, tapi boleh mengandung angka

// Note 4
Operator
- Aritmatika
- + - * / %

// Note 5
Penggabungan string / concatenation / concat
menggunakan titik (.)

// Note 6
Assignment
=, +=, -=, /=, %=, .= 

// Note 7
Operator Perbandingan
>, <, <=, >=, ==

// Note 8
Identitas
-  ===, !==

// Note 9
Logika
|| (OR) , && (AND)
*/

// Note 1
echo "Hello World sekarang hari jum'at";
print('Hello World');
?>

<!-- Note 3 -->
<?php
$nama = "Refsi Maulana Siregar"
?>

<!-- Note 4 -->
<?php
$x = 10;
$y = 5;

$result = $x * $y;
echo $result;

// Note 5
$nama_depan = "Refsi Maulana";
$nama_belakang = "Siregar";
$result = "$nama_depan" . " " . $nama_belakang;
echo $result;

// Note 6
$x = 1;
$x *= 5;
echo $x;

$nama = "refsi";
$nama .= " ";
$nama .= "Maulana";
echo $nama;

// Note 7
var_dump(1 == "1");


// Note 8
var_dump(1 === "1");

// Note 9
$angka = 10;

var_dump($angka < 20 && $angka % 2 == 0);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic-WPU</title>
</head>

<body>
    <!-- Note 2 -->
    <!-- PHP di dalam HTML -->
    <h1>Hello Selamat datang <?php echo $nama; ?></h1>

    <!-- HTML di dalam PHP -->
    <?php
    echo "<h1>Hello Selamat datang Refsi Maulana</h1>"
    ?>
</body>

</html>