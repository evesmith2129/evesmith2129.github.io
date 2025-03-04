<?php
$servername = "localhost";
$username = "root";
$password = "12345678";

// Create connection
$conn = new mysqli(hostname: $servername, username: $username, password: $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?> 
 In the above example, we have created a database named  myDB . 
 Create a Table 
 To create a table in MySQL, use the  CREATE TABLE  statement. 
 The following example creates a table named  MyGuests  with three columns:  id ,  firstname , and  lastname :