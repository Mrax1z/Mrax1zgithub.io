<?php
include("../../connect.php");
$code = $_POST['code'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$email = $_POST['email'];
$jenkel = $_POST['jenkel'];

$simpan = mysqli_query($conn, "update login set nama='$nama', username='$username', password='$password', level='$level', email='$email', jenkel='$jenkel' where UserID='$code'");

if ($simpan) {
    header("Location: ../tableUser.php");
    exit();
}
