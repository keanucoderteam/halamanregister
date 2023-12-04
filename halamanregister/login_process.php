<?php
include_once "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    $stmt = $conn->prepare("SELECT id, nama, email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $nama, $email, $hashed_password);
        $stmt->fetch();

        // Verifikasi password
        if (password_verify($password, $hashed_password)) {
            // Login sukses
            session_start();
            $_SESSION['user_id'] = $id;
            $_SESSION['user_nama'] = $nama;
            $_SESSION['user_email'] = $email;

            header("Location: dashboard.php");
            exit();
        } else {
            // Password salah
            header("Location: login_form.php?error=true");
            exit();
        }
    } else {
        // Email tidak ditemukan
        header("Location: login_form.php?error=true");
        exit();
    }


}

$conn->close();
?>
