<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'connect.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "<script>
        alert('Yakin berhasil di hapus!');
        document.location.href = 'index.php';
        </script>";
} else {
    echo "<scriData gagal di hapus!');
        document.location.href = 'index.php';
        </script>";
}
