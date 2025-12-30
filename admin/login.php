<?php
session_start();
include "koneksi.php";

$namaakun  = mysqli_real_escape_string($conn, $_POST['namaakun']);
$katasandi = mysqli_real_escape_string($conn, $_POST['katasandi']);

$query  = "SELECT * FROM akun WHERE namaakun = '$namaakun' AND katasandi = '$katasandi'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) === 1) {
    $_SESSION['admin'] = $namaakun;

    // Redirect ke index.html di root
    header("Location: ../index.html");
    exit;
} else {
    echo "<script>
        alert('Login gagal! Username atau password salah');
        window.location='login.html';
    </script>";
}


include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['namaakun'];
    $pass = $_POST['katasandi'];

    $query = mysqli_query($conn, "SELECT * FROM akun WHERE namaakun='$user' AND katasandi='$pass'");

    if (mysqli_num_rows($query) == 1) {
        // Login sukses → arahkan ke index.html
        header("Location: index.html");
        exit();
    } else {
        echo "<script>alert('Login gagal! Username atau Password salah'); window.location='login.html';</script>";
    }
}

?>
