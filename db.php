<?php
$host = "localhost";
$user = "root"; // Default XAMPP user
$password = "";
$dbname = "collaboration_db";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
