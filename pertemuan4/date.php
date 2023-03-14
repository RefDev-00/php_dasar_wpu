<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
echo date("l, d-m-y");
echo date("l");

// Time
// Unix Timestamp / EPOCH time
// Detik yang sudah berlau sejak 1 januari 1970
echo time();

// Menggabungkan 2 fungsi date dan time.
echo date("l", time() + 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik
// mktime()
// jam, menit, detik, bulan, tanggal, tahun 

echo date("l", mktime(0, 0, 0, 29, 4, 2001));

// strtotime
echo date("l", strtotime("29 april 2001"));

// Terdapat fungsi lain
/* 
String
    - strlen()
    - strcmp()
    - explode()
    - htmlspecialchars()

Utility
    - var_dump()
    - isset()
    - empty()
    - die()
    - sleep()
    
*/