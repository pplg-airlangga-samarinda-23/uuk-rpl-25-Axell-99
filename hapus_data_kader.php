<?php
session_Start();
require "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=?";
    $row = $koneksi->execute_query($sql, [$id]);

    if ($row) {
        header("location:admin.php");
    }
}
?>