<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "path_ar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optionally, set character set to UTF-8 for proper encoding
if (!$conn->set_charset("utf8")) {
    die("Error loading character set utf8: " . $conn->error);
}

// Now, you can use the $conn variable for database operations
?>
