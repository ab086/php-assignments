<!--
    Peter Welter
    2/12/2020
    suscribe.php
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sally shady Shades Sunglass Shack</title>
</head>
<body>
    <?php
        if(!isset($_POST['name']))//check one variable to see if it is set or not. I'm assuming my user will enter the rest in so i'm only checking one for now
        {
            //If name is not set it will load the newsletter.php

            include  "newsletter.php";//Load the news letter page after user input otherwise if will defualt to the if statement below
            
            //Get input after page is loaded
            $name = filter_input(INPUT_POST, "name");
            $phone = filter_input(INPUT_POST, "phone");
            $email = filter_input(INPUT_POST, "email");

        }
        else
        {

            include "thankyou.php"; //Once the data has been entered load the thankyou.php page

        }//End of else 
    ?> 
</body>
</html>