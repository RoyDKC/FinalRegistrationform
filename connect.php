<?php
$servername = "sql6.freemysqlhosting.net";
$database = "sql6516297";
$username = "sql6516297";
$password = "Twy2yLpSVd";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>
