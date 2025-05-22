<?php
include 'koneksi_login.php';

if (@$_SESSION['login'] == true) {
    header('Location: dashboard.php');
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $data = $conn->query("SELECT * from users WHERE username = '$username'")->fetch_assoc();

    if (!$data || $password != $data['password']) {
        echo "<script>alert('Login gagal')</script>";

        return; 
    }

    $_SESSION['login'] = true;
    $_SESSION['username'] = $data['username'];
    header('Location: dashboard.php');
}
?>