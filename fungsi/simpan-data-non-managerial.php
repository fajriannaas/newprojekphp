<?php
require('../modul/koneksi.php');
session_start();

// Pastikan variabel sesi 'registration_data' sudah diatur
if (isset($_SESSION['registration_data'])) {
    // Tangkap data dari formulir atau sesuai kebutuhan
    $nama = $_SESSION['registration_data']['nama'];
    $nik = $_SESSION['registration_data']['nik'];
    $tanggal = $_SESSION['registration_data']['tanggal'];
    $departemen = $_SESSION['registration_data']['departemen'];
    $jabatan = $_SESSION['registration_data']['jabatan'];

    // Lanjut dengan kolom tabel pagenonmanagerial
    $com_value = isset($_POST['com_value']) ? $_POST['com_value'] : '';
    $com_value2 = isset($_POST['com_value2']) ? $_POST['com_value2'] : '';
    $com_value3 = isset($_POST['com_value3']) ? $_POST['com_value3'] : '';
    $com_value4 = isset($_POST['com_value4']) ? $_POST['com_value4'] : '';
    $com_value5 = isset($_POST['com_value5']) ? $_POST['com_value5'] : '';
    $com_value6 = isset($_POST['com_value6']) ? $_POST['com_value6'] : '';
    $com_value7 = isset($_POST['com_value7']) ? $_POST['com_value7'] : '';
    $com_value8 = isset($_POST['com_value8']) ? $_POST['com_value8'] : '';
    $com_value9 = isset($_POST['com_value9']) ? $_POST['com_value9'] : '';
    $com_value10 = isset($_POST['com_value10']) ? $_POST['com_value10'] : '';
    $kekuatan = isset($_POST['kekuatan']) ? $_POST['kekuatan'] : '';
    $kelemahan = isset($_POST['kelemahan']) ? $_POST['kelemahan'] : '';
    $tindakan = isset($_POST['tindakan']) ? $_POST['tindakan'] : '';


// Contoh query untuk menyimpan data ke dalam tabel pagenonmanagerial
$sql = "INSERT INTO pagenonmanagerial (nama, nik, departemen, jabatan, com_value, com_value2, com_value3, com_value4, com_value5, com_value6, com_value7, com_value8, com_value9, com_value10, tanggal, komenkekuatan, komenkelemahan, komentindakan)
VALUES ('$nama', '$nik', '$departemen', '$jabatan', '$com_value', '$com_value2', '$com_value3', '$com_value4', '$com_value5', '$com_value6', '$com_value7', '$com_value8', '$com_value9', '$com_value10', '$tanggal', '$kekuatan', '$kelemahan', '$tindakan')";

if ($conn->query($sql) === TRUE) {
echo "Data berhasil disimpan";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
} else {
echo "Data registrasi tidak ditemukan dalam sesi.";
}

// Tutup Koneksi
$conn->close();
?>