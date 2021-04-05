<?php
session_start(); // persistentHTTP session

if (!isset($_SESSION["loggedin"])) {

    http_response_code(403);
    die('Forbidden');

}
test();

function test() 
    { 
      echo '<!doctype html>
      <html class="no-js" lang="">
      
      <head>
        <?php session_start(); // persistentHTTP session ?>
          <meta charset="utf-8">
          <title>BitPress</title>
          <meta name="description" content="Company Blog for B&MW">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
          <link rel="stylesheet" href="css/main.css">
      </head>
      
      <body>
          <nav class="navbar navbar-expand-lg navbar-light">
              <div class="container-fluid">
                  <a class="navbar-brand" href="index.php">BitPress</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                          <li class="nav-item">
                              <a href="login.php" class="btn">Login</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>
          
          <body>
              <h2 class="title">Welcome ' . $_SESSION["userID"] . '</h2>
              <div class="post-cont">
                  <h3>Create a Blog Post</h3>
                  <form action="backend/create-post.php" method="get">
                      <div class="form-label-group">
                          <label for="inputitle">Title</label>
                          <input name="title" id="title" class="form-control" placeholder="Title" value="" required autofocus>
                        </div>
          
                        <div class="form-label-group">
                          <label for="Input-Blog">Blog Text</label>
                          <textarea name="post" id="post" class="form-control" placeholder="Blog Post" value=""  rows="6" required></textarea>
                        </div>
      
                        <div class="form-label-group">
                          <label for="Image Path">Image Path</label>
                          <input name="img_path" id="img_path" class="form-control" placeholder="img/placeholder.png" value="" required>
                        </div>
      
                        <button class="btn btn-lg btn-block text-uppercase" type="submit">Create Post</button>
                        <hr class="my-4">
                  </form>
                  <h3>Delete a Post</h3>
                  <form action="backend/delete-post.php" method="get">
                      <div class="form-label-group">
                          <label for="inputitle">Title</label>
                          <input name="post" id="post" class="form-control" placeholder="Title" value="" required autofocus>
                        </div>
      
                        <button class="btn btn-lg btn-block text-uppercase" type="submit">Delete Post</button>
                        <hr class="my-4">
                  </form>
      
              </div>
          </body>
          
          <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
          
      </body>
      
      </html>
      ' ;
    } 
?>