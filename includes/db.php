<?php
// After uploading to online server, change this connection accordingly

$hostname = "localhost";
$username = "root";
$password = "";
$database = "gzone_technologiesdb";

// Create connection
$conn = mysqli_connect($hostname,$username,$password,$database);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>