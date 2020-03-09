<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members Only</title>
</head>
<body>
    <a href="index.php?lo=y">Logout</a>
    
    <?php

        $file = fopen("quotes.txt", "rb");
        $quote = array();

        while(!feof($file)) {
            $quote[] = trim(fgets($file));
        }

        $randomIndex = rand(0, sizeof($quote));
    ?>

    <h1><?=$quote[$randomIndex]?></h1>
    
</body>
</html>