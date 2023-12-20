<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connectionfailed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE gita_chant";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn = new mysqli($servername, $username, $password,'gita_chant');
$sql = "CREATE TABLE chant_data (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    org_name VARCHAR(30) ,
    country VARCHAR(30) ,
    state VARCHAR(50),
    city VARCHAR(50),
    numbers VARCHAR(50),
    img TEXT,
    dt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
$conn->close();
?>