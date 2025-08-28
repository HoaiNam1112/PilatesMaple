<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "btl_pilates";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Kết nối không thành công: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>