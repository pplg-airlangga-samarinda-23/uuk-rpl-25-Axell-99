<?php 
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $id = $_GET['id'];
    $sql = "SELECT * FROM bayi WHERE id = ?";
    $row = $koneksi->execute_query($sql, [$id])->fetch_assoc();
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET["id"];
    $nama = $_POST["nama"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $berat_bayi = $_POST["berat_bayi"];
    $tinggi_bayi = $_POST["tinggi_bayi"];
    $no_bpjs = $_POST["no_bpjs"];
    $sql = "UPDATE bayi SET nama = ?, tanggal_lahir = ?, berat_bayi =?, tinggi_bayi =?, no_bpjs =? WHERE id = ?";

    $row = $koneksi->execute_query($sql, [$nama, $password, $id]);
    header("location:kader.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>EDIT DATA</title>
</head>
<body>
    <h1>EDIT DATA BAYI</h1>
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