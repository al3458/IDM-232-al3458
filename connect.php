<?php
$servername = "localhost";
$username = "ndrewlen_andrew";
$password = "andrewjll";
$dbname = "ndrewlen_idm232";
// $username = "root";
// $password = "root";
// $dbname = "local_idm232";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>