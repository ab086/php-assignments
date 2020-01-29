<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Results</title>

    <?php
        // Get data from the form
        $investment = filter_input(INPUT_POST, 'investment', FILTER_VALIDATE_FLOAT);
        $interestRate = filter_input(INPUT_POST, 'interestRate', FILTER_VALIDATE_FLOAT);
        $years = filter_input(INPUT_POST, 'years', FILTER_VALIDATE_INT);

        // Set errorMessage to an empty string if no valid entries
        // This should be done by default
        $errorMessage = '';

        // Validate investment
        if($investment === FALSE) {
            $errorMessage = 'Investment must be a valid number.';
        } else if($investment <= 0) {
            $errorMessage = 'Investment must be greater than zero.';
        }
        
        // Validate interest rate
        if($interestRate === FALSE) {
            $errorMessage = 'Interest rate must be a valid number.';
        } else if($interestRate <= 0) {
            $errorMessage = 'Interest rate must be greater than zero.';
        }

        // Validate years
        if($years === FALSE) {
            $errorMessage = 'Years must be a valid number.';
        } else if($years <= 0) {
            $errorMessage = 'Years must be greater than zero.';
        } else if($years > 30) {
            $errorMessage = 'Years must be less than 31.';
        }

        // If an error message exists, go to the index page
        if($errorMessage != '') {
            include "index.php";
            exit();
        }

        // Calculate the future value
        $futureValue = $investment;
        for($i = 1; $i <= $years; $i++) {
            $futureValue += $futureValue * $interestRate * 0.01;
        }

        // Apply currency and percentage formatting
        $investment_f = '$' . number_format($investment, 2);
        $yearlyRate_f = $interestRate . '%';
        $futureValue_f = '$' . number_format($futureValue, 2);
    ?>
</head>
<body>

    <main>
        <h1>Future Value Calculator</h1>

        <label>Investment Amount: </label>
        <span><?=$investment_f ?></span>

        <label>Yearly Interest Rate: </label>
        <span><?=$yearlyRate_f ?></span>

        <label>Future Value: </label>
        <span><?=$futureValue_f ?></span>
    </main>
    
</body>
</html>