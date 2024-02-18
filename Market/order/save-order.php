<?php
session_start(); // Mulai sesi jika belum dimulai
include("../connect.php");

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['UserID'])) {
    // Jika tidak, arahkan pengguna kembali ke halaman login atau lakukan penanganan sesuai kebutuhan aplikasi Anda
    header("Location: ../account/sign-in.php");
    exit();
}

// Dapatkan id_user dari sesi
$userID = $_SESSION['UserID'];

// Dapatkan nilai-nilai form lainnya
$model = $_POST['model'];
$brand = $_POST['brand'];
$harga = $_POST['price'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$nomor = $_POST['nomor'];

// Lakukan query untuk mendapatkan id_mobil berdasarkan merek yang dipilih
$query = "SELECT MotorcycleID FROM Motorcycles WHERE Brand = '$brand'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$id_motor = $row['MotorcycleID'];

// Lakukan query untuk menyimpan data pembelian ke dalam tabel beli
$simpan = mysqli_query($conn, "INSERT INTO transactions(UserID, MotorcycleID, email, nama, nomor, harga, Brand, model)
VALUES ('$userID', '$id_motor','$email','$nama','$nomor','$harga','$brand','$model')");

if ($simpan) {
    // Jika berhasil disimpan, arahkan pengguna ke halaman yang sesuai
    header("Location: riwayat.php");
    exit();
} else {
    // Jika terjadi kesalahan, tampilkan pesan error
    echo "Error: " . mysqli_error($conn);
}
?>
