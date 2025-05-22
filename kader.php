<?php 
require "koneksi.php";

$sql ="SELECT * FROM bayi";

$rows = $koneksi->execute_query($sql, []);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Bayi</title>
</head>
<style>
    table,th,td {
        border: 1px solid black;
    }
    </style>
<body>
    <a href="tambah_data_bayi.php">Tambah Data Bayi</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bayi</th>
                <th>Tanggal Lahir Bayi</th>
                <th>Berat Bayi</th>
                <th>Tinggi Bayi</th>
                <th>No BPJS Bayi</th>
                <th>Aksi</th>
            </tr>
        </thead>
            <?php
            $no = 1;
            foreach($rows as $data): 
            ?>

            <tr>
                <td><?=$no; ?></td>
                <td><?=$data["nama"]; ?></td>
                <td><?=$data["tanggal_lahir"]; ?></td>
                <td><?=$data["berat_bayi"]; ?></td>
                <td><?=$data["tinggi_bayi"]; ?></td>
                <td><?=$data["no_bpjs"]; ?></td>
                <td>
                    <a href="edit_data_bayi.php?id=<?=$data['id']?>">Edit</a>
                    <a href="hapus_data_bayi.php?id=<?=$data['id']?>">Hapus</a>
                </td>
            </tr>
            
            <?php
            $no +=1;
            endforeach;
            ?>
            <?php foreach ($rows as $data) : ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <button><a href="laman_awal.php">Back</a></button>
</body>
</html>