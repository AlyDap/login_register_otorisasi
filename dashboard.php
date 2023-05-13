<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <div>
        <a href="logout.php">Logout</a>
    </div>


    <h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Ini adalah halaman dashboard yang hanya bisa diakses setelah login.</p>
</body>

</html>