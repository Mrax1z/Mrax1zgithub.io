<?php
include("../../connect.php");

// Check if form fields are set
if(isset($_POST['brand'], $_POST['model'], $_POST['tahun'], $_POST['harga'], $_POST['code'])) {
    // Sanitize input data
    $bre = $_POST['brand'];
    $mod = $_POST['model'];
    $year = $_POST['tahun'];
    $harga = $_POST['harga'];
    $code = $_POST['code'];

    // Update data in the database
    $simpan = mysqli_query($conn, "UPDATE motorcycles SET Brand='$bre',
    Model='$mod', YEAR='$year', Price='$harga' WHERE MotorcycleID='$code'");

    // Check if the query was successful
    if ($simpan) {
        header("Location: ../tableMotor.php");
        exit();
    } else {
        // If the query fails, display an error message
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // If form fields are not set, display an error message
    echo "All fields are required";
}
?>
