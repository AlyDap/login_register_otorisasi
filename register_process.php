<?php
require_once 'functions.php';
require_once 'db.php';

$username = $_POST['username'];
$keterangan = $_POST['keterangan'];
$password = md5($_POST['password']); // Hash password menggunakan md5

// Periksa apakah username dan email sudah digunakan
$query = "SELECT * FROM users WHERE username='$username' ";
$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) > 0) {
    $error = "Username  sudah digunakan";
    header("Location: register.php?error=$error");
    exit();
}

// Tambahkan user baru ke database
$query = "INSERT INTO users (username, password, keterangan) VALUES ('$username', '$password', '$email')";
mysqli_query($db, $query);

// Redirect user ke halaman login
header("Location: login.php?register=success");
exit();
