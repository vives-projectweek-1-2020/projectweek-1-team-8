<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 id="title" >reading from database...</h1>
    <?php
            if(isset($_GET['poll'])){
                echo $_GET['poll']+1;
                die;
            }
            ?>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
            <script>
            var value = 0;
            function poll(){
                setTimeout(function(){
                    $.ajax({ url: "./test.php?poll="+value, cache: false, success: function(data){
                        value = data;
                        $("#ob").html(value);
                        poll();
                    }});
                }, 1000);
            }

            $(document).ready(function(){
                poll();
            });
            </script>
            <p id="ob"></p>
</body>
</html>