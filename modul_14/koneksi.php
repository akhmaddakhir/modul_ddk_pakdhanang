<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_biodata";
$koneksi = mysqli_connect($host, $username, $password, $database);
if (!$koneksi) {
    die("koneksi gagal: " . mysqli_connect_error());
} else {
    echo "koneksi berhasil";
}
?>