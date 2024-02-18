<?php
$host = "localhost"; // sesuaikan dengan host database Anda
$username = "root"; // sesuaikan dengan username database Anda
$password = ""; // sesuaikan dengan password database Anda
$dbname = "db_motor_mart"; // sesuaikan dengan nama database Anda

// Buat koneksi ke database menggunakan mysqli
$conn = mysqli_connect($host, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>