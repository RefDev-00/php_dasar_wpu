<?php
// Pengkondisian / Percabangan
// if else
// if else if else
// ternary
// switch

$i = 10;

if ($i == 20) {
  echo "Benar";
} else if ($i == 10) {
  echo "Sama Banget";
} else {
  echo "Salah";
}

echo (($i < 20) ? "<br>Benar" : "<br>Salah");


// Switch Case
$color = "red";
switch ($color) {
  case 'red':
    echo "<br> Color is Red";
    break;
  case 'yellow':
    echo "<br> Color is Yellow";
    break;
  case 'green':
    echo "<br> Color is Green";
    break;
  case 'blur':
    echo "<br> Color is Blue";
    break;

  default:
    echo "<br> No Color";
    break;
}
