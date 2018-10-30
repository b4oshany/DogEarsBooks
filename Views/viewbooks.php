<?php 
    /*session_start();
    if(!isset($_SESSION['user'])){
        header('Location: login');
    }*/
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dog Ears Books - View Books</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css" />
    <link href="../style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="ui large secondary pointing borderless menu">
        <a class="header item" href="../index">
            <img src="../imgs/DogEarsBooks.png">
        </a>
        <div class="right menu">
            <a class="ui item" href="addbook">
                <i class="icons">
                    <i class="book icon"></i>
                    <i class="top right corner add icon"></i>
                </i>Add Book
            </a>

            <a class="ui active item">
                <i class="icons">
                    <i class="book icon"></i>
                    <i class="top right corner eye icon"></i>
                </i>View Catologue
            </a>
            <a class="ui item" href="../module/logout.php">
                <i class="circular sign-out icon"></i>
            </a>
        </div>
    </div>
    <div class="ui container">
    <div class="ui link cards">
       <?php 
            if(file_exists('../bookdata.txt')){
                $catologue =  fopen("../bookdata.txt","r") or die("unable to open file");
                $books = json_decode(fgets($catologue));
                foreach($books as $attr){
                   echo '<div class="card">
                        <div class="image">
                            <img src="">
                        </div>
                        <div class="content">
                            <div class="header">'.$attr->title.'</div>
                            <div class="meta">
                                <a>'.$attr->author.'</a>
                            </div>
                            <div class="description">
                                This is a book...
                            </div>
                        </div>
                        <div class="extra content">
                            <span class="right floated">
                                Published '.$attr->published.'
                            </span>
                        </div>
                    </div>';
                }
                fclose($catologue);
            } else {
                echo "No file";
            }
        ?>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
<script src="../main.js"></script>

</html>
