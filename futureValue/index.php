<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Value Calculator</title>

    <?php
        // Set default value of variables for initial page load
        if(!isset($investment)) {
            $investment = '';
        }
        if(!isset($interestRate)) {
            $interestRate = '';
        }
        if(!isset($years)) {
            $years = '';
        }
    ?>
</head>
<body>

    <main>
        <h1>Future Value Calculator</h1>

        <?php if(!empty($errorMessage)) {?>
            <p class="error"><?=htmlspecialchars($errorMessage);?></p>
        <?php } ?>

        <form action="displayResults.php" method="post">
            
            <div id="data">
                <label for="investment">Investment Amount</label>
                <input type="text" name="invesment" value="<?=htmlspecialchars($investment);?>">

                <br>

                <label for="interestRate">Years Interest Rate</label>
                <input type="text" name="interestRate" value="<?=htmlspecialchars($interestRate);?>">

                <br>

                <label for="years">Number of Years</label>
                <input type="text" name="years" value="<?=htmlspecialchars($years);?>">

                <br>
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate"><br>
            </div>
        </form>
    </main>
    
</body>
</html>