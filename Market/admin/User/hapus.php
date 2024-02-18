<?php
include("../../connect.php");
$id = $_GET['id'];
$hapus = mysqli_query($conn, "DELETE FROM login WHERE UserID='$id'");
if ($hapus) {
    header("Location: ../tableUser.php");
    exit();
}
?>