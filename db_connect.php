<?php
// Mengatur variabel untuk koneksi database
$servername = "localhost"; // Nama server
$username = "root";         // Nama pengguna (default untuk XAMPP)
$password = "";             // Kata sandi (default untuk XAMPP adalah kosong)
$dbname = "mhs";           // Nama database yang ingin dihubungkan

// Menggunakan MySQLi dengan penanganan kesalahan
try {
    // Membuat koneksi ke database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Mengecek koneksi
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    // Jika koneksi berhasil
    // Anda dapat menambahkan kode di sini untuk melanjutkan
} catch (Exception $e) {
    // Menangani kesalahan dan menampilkan pesan
    die("Connection error: " . $e->getMessage());
}
?>
