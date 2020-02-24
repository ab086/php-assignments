<?php
    echo "Hello World";

    //php variables and data types
    $count = 6; // integer type
    $price = 9.5; // double/floating point type
    $firstName = 'Bob'; // string
    $lastName = "Mee"; // string
    $isValid = true; // boolean
    $nullVar; // NULL - a variable that is declared but has no value
    
    // Arrays
    $cars = array("BMW", "FORD", "CAMARO");
    var_dump($cars);

    // Objects
    class Experiment {
        function Experiment() {
            $this->version = NULL;
        }
    }

    // Create an object
    $stitch = new Experiment();
    $stitch->version = "626";

    // Show object
    echo($stitch->version);

    // Constant
    define('PI', 3.14);
    echo("\n" . PI . "\n");

    // Concatenation
    echo('Hello ' . $firstName . "\n");

    // String interpolation
    echo("Hello $firstName");
    echo("Hello ${firstName}");