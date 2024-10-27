<?php

require 'config.php';

session_start();

// Cek apakah user yang login adalah admin
if ($_SESSION['user_role'] === 'user') {
    // Jika admin mencoba mengakses halaman absensi, redirect ke halaman admin
    header("Location: user_dashboard.php");
    exit;
}
if (isset($_POST["registrasi"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
        alert ('data berhasil ditambahkan');
        </script>";
    } else {
        echo "
        <script>
                    alert('data tidak berhasil ditambahkan!');
                    document.location.href = 'index.php';
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="./style/login.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman daftar karyawan</title>
    <
        <style>
        label {
        display: block;
        }
        </style>
</head>

<body>

    <form action="" method="post">
        <h1>Halaman daftar karyawan</h1>
        <ul>
            <li>
                <label for="full_name">Nama lengkap : </label>
                <input type="text" name="full_name" id="full_name" required>
            </li>
            <li>
                <label for="nik">nik : </label>
                <input type="text" name="nik" id="nik" required>
            </li>
            <li>
                <label for="jabatan">jabatan : </label>
                <input type="text" name="jabatan" id="jabatan" required>
            </li>
            <li>
                <label for="password">password : </label>
                <input type="password" name="password" id="password" required>
            </li>
            <li>
                <label for="password2">confirm password : </label>
                <input type="password" name="password2" id="password2" required>
            </li>

            <input type="hidden" name="user_role" value="user"><br>
            <button type="submit" name="registrasi">Register!</button>
            <h3><a href="daftar_karyawan.php">Back to halaman daftar karyawan</a></h3>
        </ul>



    </form>
</body>

</html>