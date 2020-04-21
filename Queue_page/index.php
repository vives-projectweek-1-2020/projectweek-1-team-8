<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>queue</title>
    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="script.js"></script>
    <?php
        if(isset($_GET['poll'])){
            echo $_GET['poll']+1;
            die;
        }
    ?>
</head>
<body>
    <h1 id="title" >Queue:</h1>
    <div id="ob"></div>
</body>
</html>