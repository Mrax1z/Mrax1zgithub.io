<?php
include("../../connect.php");
$user = $_POST['username'];
$nama = $_POST['nama'];
$pass = $_POST['password'];
$level = $_POST['level'];
$email = $_POST['email'];
$jenkel = $_POST['jenkel'];

$simpan = mysqli_query($conn, "INSERT INTO login(nama, username, password, level, email, jenkel)
                    VALUES ('$nama', '$user', '$pass', '$level', '$email', '$jenkel')");

if ($simpan) {
    header("Location:../tableUser.php");
    exit();
}