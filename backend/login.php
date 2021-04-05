<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
session_start();
if (isset($_GET['user']) and isset($_GET['pass'])) {
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    $sql = "select user from users where user='$user' and pass='$pass'";
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = mysqli_query($conn, $sql) or "";
    if ($result->num_rows === 0){
        http_response_code(403);
        die('Forbidden');
    }
    $_SESSION["loggedin"] = true;
    $_SESSION["userID"] = $user;
    header("Location: ../admin.php");
    die();
    

} else {
    http_response_code(403);
    die('Forbidden');
}

?>