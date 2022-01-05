<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
define("API_URL", "http://122.185.82.218/VofoxOneAPI/");  //public ip
//define("API_URL", "http://192.168.250.105/VofoxOneAPI/"); //local ip
?>