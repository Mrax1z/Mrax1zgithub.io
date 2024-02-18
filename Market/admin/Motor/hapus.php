<?php
include("../../connect.php");
$id = $_GET['id'];
$hapus = mysqli_query($conn, "DELETE FROM motorcycles WHERE MotorcycleID='$id'");
if ($hapus) {
    header("Location: ../tableMotor.php");
    exit();
}
?>
