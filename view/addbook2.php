<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: login');
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dog Ears Books - Add Book2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/style.css" />
</head>

<body>
    <div class="ui large secondary pointing borderless menu">
        <a class="header item" href="../index">
            <img src="../imgs/DogEarsBooks.png">
        </a>
        <div class="right menu">
            <a class="ui active item">
                <i class="key icon"></i>Admin
            </a>
        </div>
    </div>
    <div class="ui container">
        <form class="ui form" id="form">
            <div class="ui custom segment">
                <div class="ui top left attached label">Add book2 page</div>
                <div class="field">
                    <label>ISBN</label>
                    <input type="text" name="isbn">

                </div>
                <div class="field">
                    <label>Call Number</label>
                    <input type="text" name="callnum">
                </div>
                <div class="field">
                    <label>Subject Area</label>
                    <input type="text" name="subjectArea">
                </div>
                <div class="field">
                    <label>Number of Copies</label>
                    <input type="text" name="copies">
                </div>
                <div class="ui success message">
                    <div class="header">Successful Submission</div>
                    <p>You're request as been submitted. Thanks so much for letting me know! - Chris</p>
                </div>
                <div class="ui error message">
                    <div class="header">Unsuccessful Submission</div>
                    <p>You did not enter one or more required fields correctly.</p>
                </div>
                <div id="addBtn" class="ui small positive submit button">
                    Add Book
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

</html>
