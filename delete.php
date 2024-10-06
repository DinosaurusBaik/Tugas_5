<?php
include 'db_connect.php';

if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];
    $sql = "DELETE FROM identitas WHERE npm='$npm'";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error menghapus data: " . $conn->error;
    }
}
$conn->close();
header("Location: read.php"); // Kembali ke halaman lihat data setelah delete
?>
