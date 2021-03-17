<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

if (isset($_GET['user']) and isset($_GET['pass'])) {
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    $sql = "select token from users where user='$user' and pass='$pass'";
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = mysqli_query($conn, $sql) or "";
    if ($result == ""){
        http_response_code(403);
        die('Forbidden');
    }
    $emparray = array();
    while($row =mysqli_fetch_assoc($result)){
        $emparray[] = $row;
    }
    echo json_encode($emparray);

} else {
    http_response_code(403);
    die('Forbidden');
}

?>