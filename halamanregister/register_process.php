<?php
include_once "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $password_confirmation = htmlspecialchars($_POST["password_confirmation"]);
    $persetujuan = isset($_POST["persetujuan"]);

    $errors = [];

    if (empty($nama)) {
        $errors[] = "Nama tidak boleh kosong";
    }

    if (empty($email)) {
        $errors[] = "Email tidak boleh kosong";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid";
    }

    if (empty($password)) {
        $errors[] = "Password tidak boleh kosong";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password minimal harus 6 karakter";
    }

    if ($password != $password_confirmation) {
        $errors[] = "Konfirmasi password tidak sesuai";
    }

    if (!$persetujuan) {
        $errors[] = "Anda harus menyetujui persyaratan dan ketentuan";
    }

    if (empty($errors)) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (nama, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nama, $email, $password_hash);

        if ($stmt->execute()) {
            header("Location: register_form.php?success=true");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        // Menampilkan pesan kesalahan
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}

$conn->close();
?>
