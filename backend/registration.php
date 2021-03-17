<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

if (isset($_GET['user']) and isset($_GET['pass'])) {
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    $token = md5($user . '514345234523459680' . $pass);

    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "INSERT INTO users (user, pass, token) VALUES ('$user', '$pass', '$token')";
    if($conn->query($sql) === true){
        echo "\nRecords inserted successfully.";
    } else{
        echo "\nERROR: Could not able to execute $sql. " . $conn->error;
    }
}
else{
    http_response_code(400);
}
?>