<?php 
    session_start();
    if(isset($_SESSION["user"])){
        header('Location: view/viewbooks');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dog Ears Books</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css" />
    <link href="./public/style.css" rel="stylesheet" type="text/css" />
</head>
<body class ="largefont">
    <div class="ui small secondary pointing borderless menu">
        <div class="header item">
            <img src="./public/imgs/DogEarsBooks.png">
        </div>

    </div>
    <div class="ui two column grid container">
        
        <div class="column">
            <div class="ui massive header" style="font-size: 4em; color:#34495e;">Dog Ears Books</div>
            <p style="font-size:2em; color:#34495e;">Welcome to the Dog Ears Books Library card and catologue digital managment system.</p>
            <!--<button class="ui massive green button">Login</button>-->
            <div class="ui huge left icon action input">
                <i class="search icon"></i>
                <input type="text" placeholder="Select branch...">
                <a href="view/login" class="ui green submit button">Login</a>
            </div>
        </div>
        <div class="column">
        <img src="./public/imgs/DogEarsBooks.png">
        </div>
    </div>
</body>
<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
<script src="./public/main.js"></script>
</html>