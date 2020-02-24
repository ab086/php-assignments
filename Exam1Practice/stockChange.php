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
        $y1 = filter_input(INPUT_POST, 'y1');
        $y2 = filter_input(INPUT_POST, 'y2');

        include "stockFrom.php";//render in the form 
    ?>
</body>
</html>