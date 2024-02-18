<?php
include("../../connect.php");
$id = $_GET['id'];
$hapus = mysqli_query($conn, "DELETE FROM transactions WHERE TransactionID='$id'");
if ($hapus) {
    header("Location: ../tableRiwayat.php");
    exit();
}
?>