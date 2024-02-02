<?php
$servername = "localhost";
$username = "dbadmin"; // Ganti dengan nama pengguna MySQL Anda
$password = "dbadmin"; // Ganti dengan kata sandi MySQL Anda
$database = "competency_assessment"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>