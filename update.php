<?php
include 'db_connect.php';

if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];
    $sql = "SELECT * FROM identitas WHERE npm='$npm'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Edit Identitas Mahasiswa</title>
</head>
<body>
    <div class="form-container">
        <h2>Edit Identitas Mahasiswa</h2>
        <form action="update_process.php" method="post">
            <input type="hidden" name="npm" value="<?php echo $row['npm']; ?>">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required>
            </div>
            <div class="form-group">
                <label for="tgl_lhr">Tanggal Lahir:</label>
                <input type="date" id="tgl_lhr" name="tgl_lhr" value="<?php echo $row['tgl_lhr']; ?>" required>
            </div>
            <div class="form-group radio-group">
                <label>Jenis Kelamin:</label>
                <input type="radio" id="jk_l" name="jk" value="L" <?php if ($row['jk'] == 'L') echo "checked"; ?> required>Laki-laki
                <input type="radio" id="jk_p" name="jk" value="P" <?php if ($row['jk'] == 'P') echo "checked"; ?> required>Perempuan
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
