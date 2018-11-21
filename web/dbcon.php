<?php
$servername = "localhost";
$username = "16mca016";
$password = "1168";
$dbname = "16mca016";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>