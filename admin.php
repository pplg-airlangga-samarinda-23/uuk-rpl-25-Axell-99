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
    <a href="tambah_data_kader.php">Tambah Data Kader</a>
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
</body>
</html>