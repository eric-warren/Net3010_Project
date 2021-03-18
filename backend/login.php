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
    header("Location: ../admin.php?token=" . mysqli_fetch_all($result)[0][0]);
    die();
    

} else {
    http_response_code(403);
    die('Forbidden');
}

?>