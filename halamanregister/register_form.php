<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<body>
    <h2>Form Registrasi</h2>

    <?php
    // Menampilkan pesan sukses setelah registrasi
    if (isset($_GET['success']) && $_GET['success'] == 'true') {
        echo "<p style='color: green;'>Registrasi sukses!</p>";
    }
    ?>

    <form method="post" action="register_process.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="password_confirmation">Konfirmasi Password:</label>
        <input type="password" name="password_confirmation" required><br>

        <input type="checkbox" name="persetujuan" id="persetujuan" required>
        <label for="persetujuan">Saya menyetujui persyaratan dan ketentuan</label><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
