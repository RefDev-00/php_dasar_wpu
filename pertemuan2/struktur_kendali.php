<?php
// perulangan
// for
// while
// do..while
// foreach : Pengulangan Khusus array

echo "=============for============== <br>";

// Perulangan menggunakan for
for ($i = 0; $i < 5; $i++) {
  echo "Hello World <br>";
}

echo "=============while============== <br>";

// Perulangan mengsgunakan while
$i = 0;
while ($i < 5) {
  echo "Hello World <br>";
  $i++;
}

echo "=============do while============== <br>";

$j = 0;
do {
  echo "Hello World <br>";
  $j++;
} while ($j < 5);
