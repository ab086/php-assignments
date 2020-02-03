<?php 

    // Empty array
    $array = array();
    print_r($array);

    // Create an array
    $arrayName = array("Wilson", "Natty", "Gracie");
    // print_r($arrayName);
    // var_dump($arrayName);

    // Referring to an element in an array
    //echo($arrayName['2']);

    // Add element
    $arrayName[] = "Abbigale";
    //var_dump($arrayName);

    $arrayName[4] = "Head Coach";
    //var_dump($arrayName);

    // Add elements to an array
    $newArray = array();
    for($i = 0; $i < 10; $i++) {
        $newArray[] = random_int(0,100);
    }

    // for($i = 0; $i < count($newArray); $i++) {
    //     echo($newArray[$i] . "\n");
    // }

    // Similar to C#
    foreach($newArray as $value) {
        echo($value . "\n");
    }

    // Associative array
    $taxRate = array("hawaii" => 4.25, "california" => 8.25);
    // print_r($taxRate);
    // var_dump($taxRate);

    foreach($taxRate as $key => $value) {
        echo($key . " : " . $value . "\n");
    }

    echo($taxRate['hawaii']);
?>