<?php
include 'db_connect.php'; // Menghubungkan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm']; // Ambil NPM dari form
    $nama = $_POST['nama']; // Ambil Nama dari form
    $alamat = $_POST['alamat']; // Ambil Alamat dari form
    $tgl_lhr = $_POST['tgl_lhr']; // Ambil Tanggal Lahir dari form
    $jk = $_POST['jk']; // Ambil Jenis Kelamin dari form
    $email = $_POST['email']; // Ambil Email dari form

    // Menggunakan pernyataan UPDATE untuk memperbarui data
    $sql = "UPDATE identitas SET 
                nama='$nama', 
                alamat='$alamat', 
                tgl_lhr='$tgl_lhr', 
                jk='$jk', 
                email='$email' 
            WHERE npm='$npm'";

    // Mengeksekusi query
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Menampilkan pesan error jika terjadi kesalahan
    }
    $conn->close(); // Menutup koneksi
}

// Mengalihkan kembali ke halaman lihat data setelah pembaruan
header("Location: read.php");
exit();
?>
