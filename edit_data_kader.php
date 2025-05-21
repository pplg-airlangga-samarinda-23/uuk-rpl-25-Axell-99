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