<?php
require "koneksi.php";

$sql = "SELECT * FROM users";

$rows = $koneksi->execute_query($sql, []);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Posyandu Sambutan</title>
</head>
<body>
<h1>Hi! Selamat Datang Admin!</h1>
    <button><a href="tambah_data_kader.php">Tambah Data Kader</a></button>
    <button><a href="kader.php">Data Pengecekan Bayi</a></button>
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($admin = $rows->fetch_assoc()) {
            ?>

            <tr>
                <td><?= $no; ?></td>
                <td><?= $admin["username"]; ?></td>
                <td><?= $admin["password"]; ?></td>
                <td>
                    <a href="edit_data_kader.php?id=<?=$admin['id']?>">Edit</a>
                    <a href="hapus_data_kader.php?id=<?=$admin['id']?>">Hapus</a>
                </td>
            </tr>

            <?php
            $no += 1;
            }
            ?>
        </tbody>
    </table>
    <button>
    <a href="laman_awal.php">Back</a></button>
</body>
</html>
<!-- <php
require "koneksi.php";

$sql = "SELECT * FROM users";
$rows = $koneksi->execute_query($sql, []);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Posyandu Sambutan</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f8fc;
            margin: 30px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 40px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        a {
            text-decoration: none;
        }

        button {
            background-color: #007BFF;
            color: white;
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #ccc;
        }

        thead {
            background-color: #007BFF;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .action-links a {
            margin: 0 6px;
            color: #007BFF;
            font-weight: 500;
        }

        .action-links a:hover {
            text-decoration: underline;
        }

        .back-button {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <h1>Hi! Selamat Datang Admin!</h1>

    <div class="button-container">
        <button><a href="tambah_data_kader.php" style="color:white">Tambah Data Kader</a></button>
        <button><a href="kader.php" style="color:white">Data Pengecekan Bayi</a></button>
    </div>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <php
            $no = 1;
            while ($admin = $rows->fetch_assoc()) {
            ?>
            <tr>
                <td><= $no; ?></td>
                <td><= htmlspecialchars($admin["username"]); ?></td>
                <td><= htmlspecialchars($admin["password"]); ?></td>
                <td class="action-links">
                    <a href="edit_data_kader.php?id=<= $admin['id'] ?>">Edit</a>
                    <a href="hapus_data_kader.php?id=<= $admin['id'] ?>">Hapus</a>
                </td>
            </tr>
            <php $no++; } ?>
        </tbody>
    </table>

    <div class="back-button">
        <button><a href="laman_awal.php" style="color:white">Kembali</a></button>
    </div>
</body>
</html> -->
