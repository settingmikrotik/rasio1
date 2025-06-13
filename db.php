<?php
$servername = "localhost";
$username = "root"; // 
$password = "%3E%0A%20%20%20%20%3C; // 
$dbname = "project1"; // 

// 
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
