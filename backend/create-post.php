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
    $myfile = fopen("../posts/$title.html", "w");
    $txt = '<!doctype html>
    <html class="no-js" lang="">
    
    <head>
        <meta charset="utf-8">
        <title>BitPress</title>
        <meta name="description" content="Company Blog for B&MW">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/main.css">
    </head>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.html">BitPress</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="../login.html" class="btn">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <body>
        <div class="post-page">
            <h2 class="title">' . $title . '</h2>
            <img class="img" src = "..' . $img_path . '">
            <p class="desc">' . $post . '</p>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </html>';
    fwrite($myfile, $txt);
    fclose($myfile);

} else {
    http_response_code(400);
    echo "your missing arguments you need title, post and img_path";
}


?> 