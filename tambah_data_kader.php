<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $password = md5($_POST["password"]);

    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

    $row = $koneksi->execute_query($sql, [$nama, $password]);

    header("location:admin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>POSYANDU SAMBUTAN</title>
</head>
<body>
    <h1>TAMBAH DATA KADER</h1>
    <form action="" method="post">
            <label for="nama">Nama Kader</label>
            <input type="text" name="nama" id="nama" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        <button type="submit">Submit</button>
    </form>
    <a href="barang.php">Kembali</a>
</body>
</html>
