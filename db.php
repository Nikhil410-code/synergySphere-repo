<?php
$host = "localhost";     // Database host (localhost for XAMPP/WAMP)
$user = "root";          // Default user in XAMPP
$pass = "";              // Default password is empty in XAMPP
$db   = "synergysphere"; // Create this database in phpMyAdmin

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>