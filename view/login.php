<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('Location: addbook');
    }

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dog Ears Books - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css" />
    <link rel="stylesheet" type="text/css" href="./public/style.css" />
</head>

<body>
    <div class="ui small secondary pointing borderless menu">
        <a class="header item" href="../index">
            <img src="../public/imgs/DogEarsBooks.png">
        </a>
        <div class="right menu">
        </div>
    </div>
    <div class="ui raised very padded text container">
        <form class="ui form" id="form" method="post" action="../module/login_validation.php">
            <div class="ui custom raised segment">
                <div class="ui top left attached label">Login page</div>
                <div class="field">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="username">
                </div>
                <div class="field">
                    <label>password</label>
                    <input type="password" name="password" placeholder="password">
                </div>
                <div class="ui error message">
                    <div class="header">Unsuccessful Submission</div>
                    <p>You did not enter one or more required fields correctly.</p>
                </div>
                <div id="" class="ui hidden negative message">
                    <div class="header">
                        Login Fail
                    </div>
                    <div class="content">
                        Incorrect username or password
                    </div>
                </div>
                <div id="loginBtn" class="ui small positive submit button">
                    Login
                </div>
            </div>
        </form>
    </div>
</body>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
<script src="../public/js/login.js"></script>
</html>
