<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
<?php
var_dump($_POST);
echo "</br>";
$username = @$_POST["username"];
$password = @$_POST["password"];
$username_bener ="chenn";
$password_bener = "555";
function mmboh (){
    header("location:peserta.php");
}
if($password === $password_bener && $username === $username_bener){
    mmboh();
    echo "username dan password benar <br>";
}
?>
        <form method="POST">
          <input name="username" type="text" placeholder="username"><br>
            <input type="password" name="password" placeholder="password"><br>
            <button id="login-btn" name="submit" type="submit" class="login-btn">Login</button>
            </form>
</body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            width: 320px;
        }

        h2 {
            text-align: center;
            margin-bottom: 24px;
            color: #333;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        .message {
            text-align: center;
            color: red;
            margin-bottom: 10px;
        }
        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }

        .forgot-password a {
            color: #007BFF;
            text-decoration: none;
            font-size: 14px;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <php
        $username = @$_POST["username"];
        $password = @$_POST["password"];
        $username_bener ="chenn";
        $password_bener = "555";

        function mmboh (){
            header("location:peserta.php");
            exit(); // Penting: hentikan eksekusi setelah redirect
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if($password === $password_bener && $username === $username_bener){
                mmboh();
            } else {
                echo '<div class="message">Username atau password salah!</div>';
            }
        }
        ?>
        <form method="POST">
            <input name="username" type="text" placeholder="Username" required>
            <input name="password" type="password" placeholder="Password" required>
            <button class="login-btn" name="submit" type="submit">Login</button>
            <div class="forgot-password">
            <a href="lupa_password.php">Lupa Password?</a>
        </div>
        </form>
    </div>
</body>
</html> -->
