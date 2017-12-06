<?php
// After uploading to online server, change this connection accordingly

$hostname = "localhost";
$username = "root";
$password = "";
$database = "gzone_technologiesdb";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>