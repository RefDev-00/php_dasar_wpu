<?php
// Koneksi ke Database
// format : ("nama localhost", "username", "password", "nama database");
$db_connect = mysqli_connect("localhost", "root", "", "db_php-dasar");

// function query
function query($query)
{
    global $db_connect;
    $result = mysqli_query($db_connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
