<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
//  pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// Membuat Array
// Cara lama
$hari = array("Senin", "selasa", "Rabu");

// Cara Baru
$bulan = ["Januari", "Februari", "Maret", "April"];

// contoh elemen tipe data yang berbeda
$arr1 = [123, "Text", false];

// Menampilkan Array
// var_dump() / print_r()

var_dump($hari);
echo "<br>";
print_r($bulan);

// Menampilkan 1 elemen pada array
echo $arr1[1];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
var_dump($hari);
