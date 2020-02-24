<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .red{color:red; font-weight:bold }
    </style>
</head>
<body>

    <?php
 //    $age = 16;
 //    $score = 700;
 if(isset($_GET['age'])) 
 {

    $age = $_GET['age'];
    $score = $_GET['score'];
    $rate = 0.5;
     if($age < 18 || $score < 700)
     {
         echo "<p class='red'> No soup for you!</p>";
     }
     else
     {
         echo "<h1>Congrats.....</h1>";
         include "loancomplete.php";
     }
     if($score > 300000)
     {
        $rate = 0.2;
        echo( "The total interest will be " .  ($score * $rate * $age)); 
     }
     else
     {
        echo( "The total interest will be " .  ($score * $rate * $age)); 
     }

}//end 

    ?>

    <form action = "index.php" method = "get">
     <select name ="age">
       <!-- <option value = "18"> Eighteen</option>
        <option value = "16"> Sixteen</option> -->

        <?php 
            for($i = 0; $i < 100; $i++)
            {

                echo("<option value = '$i'>$i</option>");
            }
        ?>

     </select>
     <input type = "text" name = "score" id = "">
     <input type = "submit" value = "Get A Loan">
    </form> 
</body>
</html>