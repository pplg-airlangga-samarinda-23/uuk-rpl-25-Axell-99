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
            $no=1;
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
            <?php 
        $no++;
        endforeach; ?>
        </tbody>
    </table>
    <button><a href="laman_awal.php">Back</a></button>
</body>
</html>
<!-- <php 
require "koneksi.php";

$sql ="SELECT * FROM bayi";

$rows = $koneksi->execute_query($sql, []);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Bayi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f8fb;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            border-radius: 10px;
            overflow: hidden;
        }

        thead {
            background-color: #007BFF;
            color: white;
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Data Bayi</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bayi</th>
                <th>Tanggal Lahir</th>
                <th>Berat (kg)</th>
                <th>Tinggi (cm)</th>
                <th>No BPJS</th>
            </tr>
        </thead>
        <tbody>
        <php
        $no = 1;
        foreach($rows as $data): 
        ?>
            <tr>
                <td><=$no++; ?></td>
                <td><=$data["nama"]; ?></td>
                <td><=$data["tanggal_lahir"]; ?></td>
                <td><=$data["berat_bayi"]; ?></td>
                <td><=$data["tinggi_bayi"]; ?></td>
                <td><=$data["no_bpjs"]; ?></td>
            </tr>
        <php endforeach; ?>
        </tbody>
    </table>
    <button><a href="laman_awal.php">Kembali</a></button>
</body>
</html> -->
