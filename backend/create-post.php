<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "myDB";

if (isset($_GET['title']) and isset($_GET['post']) and isset($_GET['img_path'])) {
    $title = $_GET['title'];
    $post = $_GET['post'];
    $img_path = $_GET['img_path'];
    $conn = new mysqli($servername, $username, $password, $db);

    $sql = "INSERT INTO posts (title, post, img_path) VALUES ('$title', '$post', '$img_path')";
    if($conn->query($sql) === true){
        echo "\nRecords inserted successfully.";
    } else{
        http_response_code(400);
        echo "\nERROR: Could not able to execute $sql. " . $conn->error;
    }
    $conn->close();

} else {
    http_response_code(400);
    echo "your missing arguments you need title, post and img_path";
}


?> 