<?php 

    $name = filter_input(INPUT_POST, "name");
    $products = filter_input(INPUT_POST, "products");
    $qty = filter_input(INPUT_POST, "qty");

    if(isset($name) && isset($products) && isset($qty)) {
        // Removes spaces and lowercases the name
        $fileName = str_replace(' ', '', $name);
        file_put_contents(strtolower($fileName) . ".txt", $products . ": " . $qty);
        include "orderComplete.php";
    } else {
        include "orderForm.php";

        // DEBUG
        // echo("<p>$name</p>");
        // echo("<p>$products[0]</p>");
        // echo("<p>$qty</p>");
    }
    
    
?>