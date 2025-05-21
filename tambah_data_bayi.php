<?php
require "koneksi.php";

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $nama = $_POST["nama"];
    $tanggal_lahir = $_POST["tanggal"];
    $berat_bayi = $_POST["berat"];
    $tinggi_bayi = $_POST["tinggi"];
    $no_bpjs = $_POST["bpjs"];

    $sql = "INSERT INTO bayi (nama, tanggal_lahir, berat_bayi, tinggi_bayi, no_bpjs) VALUES (?, ?, ?, ?, ?)";

    $row = $koneksi->execute_query($sql, [$nama, $tanggal_lahir, $berat_bayi, $tinggi_bayi, $no_bpjs]);

    header("location: kader.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Bayi</title>
    <!-- <style>
        body {
            text-align: center;
        }
    </style> -->
</head>
<body>
    <h1>TAMBAH DATA BAYI</h1>
    <form action="" method="post">
            <label for="nama">Nama Bayi</label><br>
            <input type="text" name="nama" id="nama" required><br>
            <label for="tanggal">Tanggal Lahir</label><br>
            <input type="date" name="tanggal" id="tanggal" required><br>
            <label for="berat">Berat Bayi</label><br>
            <input type="number" name="berat" id="berat" required><br>
            <label for="tinggi">Tinggi Bayi</label><br>
            <input type="number" name="tinggi" id="tinggi" required><br>
            <label for="bpjs">No BPJS</label><br>
            <input type="text" name="bpjs" id="bpjs" required><br>
        <button type="submit">Submit</button>
    </form>
    <a href="kader.php">Kembali</a>
</body>
</html>
