<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
}

$conn->close();

$conn = new mysqli($servername, $username, $password, $db);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}

$sql = "CREATE TABLE posts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title TEXT NOT NULL,
    post TEXT NOT NULL,
    img_path TEXT NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table posts created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

$sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user TEXT NOT NULL,
    pass TEXT NOT NULL,
    token TEXT NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
// Attempt insert query execution
$sql = "INSERT INTO users (user, pass, token) VALUES ('admin', 'pass', 'mytoken')";
if($conn->query($sql) === true){
    echo "\nRecords inserted successfully.";
} else{
    echo "\nERROR: Could not able to execute $sql. " . $conn->error;
}
 
// Attempt insert query execution
$sql = "INSERT INTO posts (title, post, img_path) VALUES ('title 1', 'this is a post', '/img/placeholder.png')";
if($conn->query($sql) === true){
    echo "\nRecords inserted successfully.";
} else{
    echo "\nERROR: Could not able to execute $sql. " . $conn->error;
}
 
// Close connection
$conn->close();
?> 