<?php
include("../../connect.php");

// Check if form fields are set
if(isset($_POST['brand'], $_POST['model'], $_POST['email'], $_POST['nomor'], $_POST['harga'], $_POST['nama'], $_POST['code'])) {
    // Sanitize input data
    $bre = $_POST['brand'];
    $mod = $_POST['model'];
    $email = $_POST['email'];
    $nomor = $_POST['nomor'];
    $harga = $_POST['harga'];
    $nama = $_POST['nama'];
    $code = $_POST['code'];

    // Update data in the database
    $simpan = mysqli_query($conn, "UPDATE transactions SET email='$email',
    nama='$nama', nomor='$nomor', harga='$harga', Brand='$bre', model='$mod' WHERE TransactionID='$code'");

    // Check if the query was successful
    if ($simpan) {
        header("Location: ../tableRiwayat.php");
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
