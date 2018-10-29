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
    <title>Dog Ears Books - Add Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css" />
    <link rel="stylesheet" type="text/css" href="./public/style.css" />
</head>

<body>
    <div class="ui large secondary pointing borderless menu">
        <a class="header item" href="../index">
            <img src="../public/imgs/DogEarsBooks.png">
        </a>
        <div class="right menu">
            <a class="ui active item">
                <i class="icons">
                    <i class="book icon"></i>
                    <i class="top right corner add icon"></i>
                </i>Add Book
            </a>
            
            <a class="ui item" href="viewbooks">
                <i class="icons">
                    <i class="book icon"></i>
                    <i class="top right corner eye icon"></i>
                </i>View Catologue
            </a>
            <a class="ui item" href="../module/logout">
                <i class="circular sign-out icon"></i>
            </a>
        </div>
    </div>
    <div class="ui container">
        <form class="ui form" id="form" action="../module/addbook_validation.php" method="post" entype="multipart/formdata">
            <div class="ui custom segment">
                <div class="ui top left attached label">Add book page</div>
                <div class="field">
                    <label>Title</label>
                    <input type="text" name="title" placeholder="The quick brown fox">

                </div>
                <div class="field">
                    <label>Author</label>
                    <input type="text" name="author" placeholder="Andrew N. Gray">
                </div>
                <div class="field">
                    <label>Published</label>
                    <input type="text" name="published" placeholder="1992">
                </div>
                <div class="inline field">
                    <label for="coverFile" class="ui icon button" id="uploadBtn" style="color:white">
                        <i class="file icon"></i>
                        Upload Book Cover
                    </label>
                    <p id="fileName"></p>
                    <input type="file" name="coverFile" id="coverFile" accept="image/*">
                </div>
                <div class="ui success message">
                    <div class="header">Successful Submission</div>
                    <p>New book has been added to the catologue</p>
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
<script src="../public/js/addbook.js"></script>

</html>
