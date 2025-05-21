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
    body{
        text-align: center;
    }
    table, th, td{
        border: 1px solid black;
    }
</style>
<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bayi</th>
                <th>Tanggal Lahir Bayi</th>
                <th>Berat Bayi</th>
                <th>Tinggi Bayi</th>
                <th>No BPJS Bayi</th>
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
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>