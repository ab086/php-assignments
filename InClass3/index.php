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

        $submissonType = filter_input(INPUT_POST, 'formType');
        
        switch($submissonType)
        {
            case('login');
                $userName = filter_input(INPUT_POST, 'userName');

                if(is_null($userName))
                {
                    include "login.php";
                }
                else
                {
                    include "order.php";
                }
                break;
            case('order');
                echo ($userName);
                $ccard = filter_input(INPUT_POST, "ccard");
                echo("Credit Card: $ccard </br>");

                //radio selection
                $drink = filter_input(INPUT_POST, "drink");
                echo("Drink selected is $drink");

                //text area
                $comment = filteR_input(INPUT_POST, 'comments');
                $comment = htmlentities($comment);
                echo "<hr>$comment";

                $commentsFiltered = filter_input(INPUT_POST, 'commentd',FILTER_SANITIZE_STRING);
                echo($commentsFiltered);
                break;

                //checkboxes
                $topping = filter_input(INPUT_POST, "top" , FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
                echo "<ul>";
                    foreach($toppings as $value)
                    {
                        echo("<li>$value</li>");

                    }
                echo "</ul>";

             default:

                include "login.php";
        }




        ?>
    
</body>
</html>