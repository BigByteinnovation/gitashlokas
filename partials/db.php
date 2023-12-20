<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "gita_chant";

$servername = "localhost";
$username = "u704382176_GieoGita";
$password = "GieoGita@123";
$db = "u704382176_gita_chant";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>  