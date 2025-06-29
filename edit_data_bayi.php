<?php 
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $id = $_GET['id'];
    $sql = "SELECT * FROM bayi WHERE id = ?";
    $row = $koneksi->execute_query($sql, [$id])->fetch_assoc();
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET["id"];
    $nama = $_POST["nama"];
    $tanggal_lahir =$_POST["tanggal"];
    $berat_bayi = $_POST["berat"];
    $tinggi_bayi = $_POST["tinggi"];
    $no_bpjs = $_POST["bpjs"];
    // var_dump($tanggal_lahir);
    $sql = "INSERT INTO bayi (nama, tanggal_lahir, berat_bayi, tinggi_bayi, no_bpjs, terakhir_pengecekan) VALUES (?, ?, ?, ?, ?,now())";

    $row = $koneksi->execute_query($sql, [$nama, $tanggal_lahir, $berat_bayi,$tinggi_bayi,$no_bpjs]);
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
            <input type="text" name="nama" id="nama" value="<?=$row['nama']?>"  required><br>
            <label for="tanggal">Tanggal Lahir</label><br>
            <input type="date" name="tanggal" id="tanggal" value="<?=$row['tanggal_lahir']?>" required><br>
            <label for="berat">Berat Bayi</label><br>
            <input type="number" name="berat" id="berat" value="<?=$row['berat_bayi']?>" required><br>
            <label for="tinggi">Tinggi Bayi</label><br>
            <input type="number" name="tinggi" id="tinggi" value="<?=$row['tinggi_bayi']?>" required><br>
            <label for="bpjs">No BPJS</label><br>
            <input type="text" name="bpjs" id="bpjs" value="<?=$row['no_bpjs']?>" required><br>
        <button type="submit">Submit</button>
    </form>
    <a href="kader.php">Kembali</a>
</body>
</html>
<!-- <php 
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

    $sql = "UPDATE bayi SET nama = ?, tanggal_lahir = ?, berat_bayi = ?, tinggi_bayi = ?, no_bpjs = ? WHERE id = ?";
    $koneksi->execute_query($sql, [$nama, $tanggal_lahir, $berat_bayi, $tinggi_bayi, $no_bpjs, $id]);

    header("Location: kader.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Bayi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f8fb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h1>Edit Data Bayi</h1>
    <form method="post">
        <label for="nama">Nama Bayi</label>
        <input type="text" name="nama" id="nama" value="<= htmlspecialchars($row['nama']) ?>" required>

        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<= $row['tanggal_lahir'] ?>" required>

        <label for="berat_bayi">Berat Bayi (kg)</label>
        <input type="number" name="berat_bayi" id="berat_bayi" step="0.01" value="<= $row['berat_bayi'] ?>" required>

        <label for="tinggi_bayi">Tinggi Bayi (cm)</label>
        <input type="number" name="tinggi_bayi" id="tinggi_bayi" value="<= $row['tinggi_bayi'] ?>" required>

        <label for="no_bpjs">No BPJS</label>
        <input type="text" name="no_bpjs" id="no_bpjs" value="<= htmlspecialchars($row['no_bpjs']) ?>" required>

        <button type="submit">Simpan Perubahan</button>
    </form>
    <a href="kader.php">← Kembali</a>
</div>
</body>
</html> -->
