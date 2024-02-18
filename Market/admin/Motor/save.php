<?php
include("../../connect.php");

// Check if form fields are set
if(isset($_POST['brand'], $_POST['model'], $_POST['tahun'], $_POST['harga'])) {
    $bre = $_POST['brand'];
    $mod = $_POST['model'];
    $year = $_POST['tahun'];
    $harga = $_POST['harga'];

    // Insert data into the database
    $simpan = mysqli_query($conn, "INSERT INTO motorcycles(Brand, Model, YEAR, Price)
    VALUES ('$bre', '$mod', '$year', '$harga')");

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
