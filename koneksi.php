<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_rumah_makan";

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// echo "Koneksi berhasil!";
?>