<!doctype html>
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
        <div class='login-cont'>
            <form action="backend/login.php" method="get">
                <div class="form-label-group">
                    <label for="inputEmail">Username</label>
                    <input name="user" id="user" class="form-control" placeholder="Username" value="" required autofocus>
                  </div>
    
                  <div class="form-label-group">
                    <label for="inputPassword">Password</label>
                    <input name="pass" id="pass" class="form-control" placeholder="Password" value="" required>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                  <hr class="my-4">
            </form>

        </div>
    </body>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
</body>

</html>
