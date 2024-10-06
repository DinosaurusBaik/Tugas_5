<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <div class="form-container">
        <h2>Form Identitas Mahasiswa</h2>
        <form action="create_process.php" method="post">
            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" id="npm" name="npm" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="tgl_lhr">Tanggal Lahir:</label>
                <input type="date" id="tgl_lhr" name="tgl_lhr" required>
            </div>
            <div class="form-group radio-group">
                <label>Jenis Kelamin:</label>
                <input type="radio" id="jk_l" name="jk" value="L" required>Laki-laki
                <input type="radio" id="jk_p" name="jk" value="P" required>Perempuan
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
