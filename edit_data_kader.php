<?php 
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = ?";
    $row = $koneksi->execute_query($sql, [$id])->fetch_assoc();
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $id = $_GET["id"];

    $sql = "UPDATE users SET username=?, password=? WHERE id=?";
    $row = $koneksi->execute_query($sql, [$username, $password, $id]);
    header("location:admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Posyandu Sambutan</title>
</head>
<body>
    <h1>EDIT DATA KADER</h1>
    <form action="" method="post">
            <label for="username">Nama Kader</label>
            <input type="text" name="username" id="username" value="<?=$row['username']?>" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="<?=$row['password']?>" required>
        <button type="submit">Submit</button>
    </form>
    <a href="admin.php">Kembali</a>
</body>
</html>
<!-- <php 
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = ?";
    $row = $koneksi->execute_query($sql, [$id])->fetch_assoc();
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $id = $_GET["id"];

    $sql = "UPDATE users SET username=?, password=? WHERE id=?";
    $koneksi->execute_query($sql, [$username, $password, $id]);
    header("location:admin.php");
    exit();
}
?> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Kader</title>
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
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        label {
            display: block;
            margin-top: 12px;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
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
    <h1>Edit Data Kader</h1>
    <form method="post">
        <label for="username">Nama Kader</label>
        <input type="text" name="username" id="username" value="<= htmlspecialchars($row['username']) ?>" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="" placeholder="Masukkan password baru" required>

        <button type="submit">Simpan Perubahan</button>
    </form>
    <a href="admin.php">← Kembali</a>
</div>
</body>
</html> -->
