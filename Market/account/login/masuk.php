<?php
session_start();
include "../../connect.php";

$email = $_POST['email'];
$pass = $_POST['Password'];

$cek = mysqli_query($conn, "SELECT * FROM login WHERE email='$email' AND password='$pass'") or die(mysqli_error($connect));
$data = mysqli_fetch_array($cek);
$banyak = mysqli_num_rows($cek);

if ($banyak >= 1) {
    $_SESSION['email'] = $data['email'];
    $_SESSION['UserID'] = $data['UserID'];
    $_SESSION['level'] = $data['level'];
    header("Location: ../../index.php");
    exit();
} else { ?>
    <script type="text/javascript">
        alert("Username atau password masih salah");
    </script>
    <?php
    header("Location: ../sign-in.php");
    exit();
}
?>
