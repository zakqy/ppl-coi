<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin - Bens Burger</title>
    <style>
        body {
            font-family: "Montserrat", sans-serif;
            background:#f7f7f7;
            padding:40px;
        }
        .box {
            background:white;
            padding:20px;
            border-radius:12px;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
            max-width:500px;
        }
        a {
            display:inline-block;
            margin-top:15px;
            background:black;
            color:white;
            padding:8px 16px;
            border-radius:8px;
            text-decoration:none;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Selamat datang, Admin!</h2>
    <p>Kamu berhasil login ke panel admin Bens Burger.</p>
    <a href="logout.php">Logout</a>
</div>

</body>
</html>
