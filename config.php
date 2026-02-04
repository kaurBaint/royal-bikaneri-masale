<?php
$host = "localhost";
$user = "root";   // DB user
$pass = "";       // DB password (default empty for XAMPP)
$db   = "royal_masale";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("DB Connection Failed: " . $conn->connect_error);
}
?>