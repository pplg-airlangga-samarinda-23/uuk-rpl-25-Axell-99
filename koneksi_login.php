<?php
session_start();

//connect database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "posyandu";
$conn = new mysqli( $hostname,  $username,  $password,  $database);

if(!$conn){
    die("connection failed : ". mysqli_connect_error());
}
?>