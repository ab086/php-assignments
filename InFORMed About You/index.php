<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php 
        $theName = "James May";
        if(isset($_GET['firstname'])){

        $theName = htmlentities($_GET["firstName"]);

        }
    ?>
</head>
<body>
    <?php 
    echo ("<h1>Hello world from HTML</h1");
    echo("<p> $theName</p>");
    ?>
    <form action ="">
        <input type = "text" name = "firstName" id="" size = 75>
        <input type = "submit" value= "Submit">
</form>
</body>
</html>