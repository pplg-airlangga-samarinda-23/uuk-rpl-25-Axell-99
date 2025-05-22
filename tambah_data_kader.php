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
<!-- <php
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
        input[type="password"] {
            width: 100%;
            padding: 8px 12px;
            margin-bottom: 18px;
            border: 1.5px solid #ccc;
            border-radius: 4px;
            font-size: 15px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
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
        <h1>TAMBAH DATA KADER</h1>
        <form action="" method="post">
            <label for="nama">Nama Kader</label>
            <input type="text" name="nama" id="nama" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <button type="submit">Submit</button>
        </form>
        <a href="admin.php">Kembali</a>
    </div>
</body>
</html> -->
