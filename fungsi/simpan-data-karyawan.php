<?php
require('../modul/koneksi.php');
session_start();

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendapatkan data dari formulir registrasi
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$tanggal = $_POST['tanggal'];
$jabatan = $_POST['jabatan']; // Tambahkan baris ini untuk mendapatkan jabatan dari formulir
$departemen = $_POST['departemen'];

// Pastikan ada kata sandi yang diberikan sebelum mencoba mengaksesnya
$kata_sandi = isset($_POST['kata_sandi']) ? password_hash($_POST['kata_sandi'], PASSWORD_DEFAULT) : '';

// Persiapkan pernyataan SQL
$sql = "INSERT INTO pageform (nama, password, nik, tanggal) VALUES ('$nama', '$kata_sandi', '$nik', '$tanggal')";

if ($conn->query($sql) === TRUE) {
    // Simpan data di sesi PHP
    session_start();
    $_SESSION['registration_data'] = [
        'nama' => $nama,
        'nik' => $nik,
        'departemen' => $departemen,
        'jabatan' => $jabatan,
        'tanggal' => $tanggal,
    ];

    // Redirect ke halaman yang sesuai berdasarkan jabatan
    if ($jabatan === "Supervisor" || $jabatan === "Foremen") {
        header('Location: ../halaman/form-managerial.php');
    } else if ($jabatan === "Staff" || $jabatan === "Operator") {
        header('Location: ../halaman/form-non-managerial.php');
    } else {
        // Handle kondisi lain jika diperlukan
        echo "Registrasi berhasil! Tetapi jabatan tidak valid.";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
