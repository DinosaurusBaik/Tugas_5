<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: white; 
            display: flex;
            justify-content: center; 
            align-items: flex-start; 
            height: 100vh; 
            padding: 20px; 
        }

        .form-container {
            padding: 20px; 
            border-radius: 10px; 
            max-width: 100%; 
        }

        h2 {
            margin-bottom: 20px; 
            color: #202124; 
            text-align: center; 
        }

        .table-container {
            display: flex; 
            justify-content: center; 
            margin-top: 20px; 
        }

        .data-table {
            width: 100%; 
            border-collapse: collapse; 
        }

        .data-table th, .data-table td {
            border: 1px solid #dadce0; 
            padding: 10px; 
            text-align: left; 
        }

        .data-table th {
            background-color: #f1f1f1; 
        }

        .btn-action {
            color: #1a73e8; 
            text-decoration: none; 
        }

        .btn-action:hover {
            text-decoration: underline; 
        }

        .button-container {
            display: flex;
            justify-content: center; 
            margin-top: 20px; 
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Data Mahasiswa</h2>
        <?php include 'db_connect.php'; ?>

        <?php
        $sql = "SELECT * FROM identitas";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<div class='table-container'>";
            echo "<table class='data-table'>
                    <tr>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tgl Lahir</th>
                        <th>JK</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["npm"]."</td>
                        <td>".$row["nama"]."</td>
                        <td>".$row["alamat"]."</td>
                        <td>".$row["tgl_lhr"]."</td>
                        <td>".$row["jk"]."</td>
                        <td>".$row["email"]."</td>
                        <td>
                            <a href='update.php?npm=".$row['npm']."' class='btn-action'>Edit</a> | 
                            <a href='delete.php?npm=".$row['npm']."' class='btn-action' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Delete</a>
                        </td>
                      </tr>";
            }
            echo "</table>";
            echo "</div>"; 
        } else {
            echo "Tidak ada data.";
        }
        $conn->close();
        ?>
        <div class="button-container">
            <button onclick="window.location.href='index.php'">Kembali ke Menu Utama</button>
        </div>
    </div>
</body>
</html>
