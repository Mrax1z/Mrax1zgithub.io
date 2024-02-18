<?php
include("../../connect.php");
$nama = $_POST['nama'];
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$jenkel = $_POST['jenkel'];

$simpan = mysqli_query($conn, "INSERT INTO login(nama, username, password, level, email, jenkel)
                    VALUES ('$nama', '$user', '$pass', 'user', '$email', '$jenkel')");

if ($simpan) {
    header("Location:../sign-in.php");
    exit();
}