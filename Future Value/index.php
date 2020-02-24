<?php
    //set defualt value  of variables for inital page load 
    if(!isset($investment)) { $investment = ''; };
    if(!isset($interest_rate)) { $interest_rate = ''; }
    if(!isset($years)) { $years = ''; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Value Calculator</title>
</head>
<body>
    <main>
    <h1>Future Value Calculator</h1> 
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>

    <form action = "display_results.php" method = "post">
        
        <div id = "data">
            <label> Investment Amount:</label>
            <input type = "text" name = "investment"
                    value = "<?php echo htmlspecialchars($investment); ?>">
            <br>

            <label> Yearly Intrest Rate: </label>
            <input type = "text" name = "interest_rate"
                    value = "<?php echo htmlspecialchars($interest_rate); ?>">

            <br>

            <label> number of Years: </label>
            <input type = "text" name = "years"
                    value = "<?php echo htmlspecialchars($years); ?>">
            
            <br>
        </div>

        <div id = "buttons">
            <label> &nbsp;</label>
            <input type = "submit" value = "Calculate"><br>
        </div>
    
    </form>
    </main>
</body>
</html>