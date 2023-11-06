<?php
include "dbconnect.php";
session_start();

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mencari pengguna dalam tabel login
    $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Login berhasil, atur sesi pengguna
        $_SESSION['username'] = $username;
        header('Location: index.php'); // Ganti ini dengan halaman setelah login
        exit();
    } else {
        echo "<script>alert('Username atau Password salah!'); window.location='login.html';</script>";
    }
}

// Tutup koneksi database
$conn->close();
?>