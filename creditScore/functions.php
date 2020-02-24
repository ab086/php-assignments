<?php
    function todaysDate() {
        echo("Today's date is " . date('D. M d, Y'));
    }

    function yearsToGo($age) {
        $yearsRemaining = 18 - $age;

        echo("<p>$yearsRemaining more years to qualify!</p>");
    }

    function diffInScore($score) {
        $minScore = 680;
        return $minScore - $score;
    }
?>