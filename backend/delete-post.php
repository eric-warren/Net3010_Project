<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

if (isset($_GET['post'])) {
    $post = $_GET['post'];
} else {
    echo "You need to supply a title to delete";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM posts WHERE title='$post'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 