<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        $name = "userName";
        $value = "Austin";
        $expire = strtotime('+1 year');

        setcookie($name, $value, $expire);
    ?>

    <h1>This site uses cookies. Your compliance is not an option.</h1>
    <a href="readCookie.php">Read Cookie</a>
</body>
</html>