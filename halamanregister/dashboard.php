<?php
session_start();

// Periksa apakah pengguna telah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login_form.php");
    exit();
}

// Ambil informasi pengguna dari sesi
$user_id = $_SESSION['user_id'];
$user_nama = $_SESSION['user_nama'];
$user_email = $_SESSION['user_email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat datang, <?php echo $user_nama; ?>!</h2>
    <p>Email: <?php echo $user_email; ?></p>

    <a href="logout.php">Logout</a>
</body>
</html>
