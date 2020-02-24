<?php
    echo "Hello World";      


    //php variables and data types
    $count = 6// interger
    $price = 5.5//double/floating point 
    $first_name = "Bob"//string
    $last_name = "James"//stirng
    $isValid = true;//boolean
    $nullVariable; //Null varriable 

    //arrays
    $cars = arrays("shrek","donkey");
    var_dump($cars);

    //objects 

    class Experiment {
        function Experiment(){
            $this->version = NULL;

        }
    }

    //create an object 
    $stitch = new Experiment();
    $stitch ->version = "626";

    //show object properties

    echo $stitch->version;


    //declare a constant 

    define("PI", 3.14);
    echo(PI);

    //concatenation with period 

    echo("hello " .$first_name);

    //string interpolation 
    echo("hello $first_name");

