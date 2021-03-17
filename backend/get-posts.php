<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "myDB";

$conn = new mysqli($servername, $username, $password, $db);

$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));
$conn->close();

$emparray = array();
while($row =mysqli_fetch_assoc($result)){
    $emparray[] = $row;
}
echo json_encode($emparray);
?> 