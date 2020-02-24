<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>

    <?php
        include "functions.php"
    ?>
</head>
<body>
    <h1><?=todaysDate()?></h1>
    <h1>Do you qualify for a loan?</h1>

    <?php

        // Don't show any of this until score is set
        if(isset($_GET['score'])) {

            $age = $_GET['age'];
            $score = $_GET['score'];

            // Make sure the person qualifies for said loan
            if($score > 680 && $age >= 18) {
                echo("<p>Qualify</p>");
            } else {
                // Check remaining years
                if($age < 18) {
                    yearsToGo($age);
                }

                // Check difference in score
                if($score < 680) {
                    echo("<p>" . diffInScore($score). " more points needed.</p>");
                }
            }

            // When it's submitted, hide the form
            // The form should also display until score is set
        } else {
            include "qualify.php";
        }

    ?>
    
</body>
</html>