<?php
require "koneksi.php";

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $nama = $_POST["nama"];
    $tanggal_lahir = $_POST["tanggal"];
    $berat_bayi = $_POST["berat"];
    $tinggi_bayi = $_POST["tinggi"];
    $no_bpjs = $_POST["bpjs"];
    

    $sql = "INSERT INTO bayi (nama, tanggal_lahir, berat_bayi, tinggi_bayi, no_bpjs, terakhir_pengecekan) VALUES (?, ?, ?, ?, ?,now())";

    $row = $koneksi->execute_query($sql, [$nama, $tanggal_lahir, $berat_bayi, $tinggi_bayi, $no_bpjs]);

    header("location: kader.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Bayi</title>
     <style>
        body {
            text-align: center;
        }
    </style> 
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
<!-- <php
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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f7ff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            width: 350px;
            text-align: center;
        }

        h1 {
            margin-bottom: 25px;
            color: #333;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 6px;
            font-weight: 600;
            color: #555;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"] {
            width: 100%;
            padding: 8px 12px;
            margin-bottom: 18px;
            border: 1.5px solid #ccc;
            border-radius: 4px;
            font-size: 15px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        input[type="number"]:focus {
            border-color: #4a90e2;
            outline: none;
        }

        button {
            background-color: #4a90e2;
            color: white;
            padding: 10px 0;
            width: 100%;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #357ABD;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            color: #4a90e2;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #357ABD;
        }
    </style>
</head>
<body>
    <div class="container">
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
    </div>
</body>
</html> -->
