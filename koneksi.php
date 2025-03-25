<?php
$host = "localhost"; // Sesuaikan dengan host database
$user = "root"; // Username database
$password = ""; // Password database (kosongkan jika tidak ada)
$database = "mhs"; // Ganti dengan nama database yang sesuai

$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}
?>
