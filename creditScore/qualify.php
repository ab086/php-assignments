<form method="get">
    <input type="text" name="score" id="" placeholder="Credit score">
    
    <!-- input for credit score -->
    <select name="age" id="">
        <?php 
            for($i = 1; $i < 100; $i++) {
                echo("<option value=$i>$i</option>");
            }

            // Don't use this
            // $i = 1;
            // while($i < 100) {
            //     echo("<option value=$i>$i</option>");
            //     $i++;
            // }
        ?>

    </select>

    <input type="submit" value="Get a Loan">
</form>