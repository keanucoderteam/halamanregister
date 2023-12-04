<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h2>LOGIN ADMIN PAMALI</h2>

    <?php
    // Menampilkan pesan kesalahan login
    if (isset($_GET['error']) && $_GET['error'] == 'true') {
        echo "<p style='color: red;'>Email atau password salah!</p>";
    }
    ?>

    <form method="post" action="login_process.php">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
