<?php

// create an empty array
$array = array();
print_r($array);

//create a array
$arrayName = array("Kelce", "Mccoy", "Jones");
print_r($arrayName);
var_dump($arrayName);

//Refering to an element in an array
echo($arrayName['2']);

$array_name[] = "Hill";
print_r($array_name);
$array_name[4] = "Reid";
print_r($array_name);

//add elements to an array
for($i=0;$i < 10; $i++)
{
    $newAry = random_int(0,100);
}

for($i= 0; $i < count($newAry); $i++)
{
    echo "$newAry[$i] \n";
}

foreach($newAry as $value)
{
    echo $value . "\n";
}

//associative array
$tax_rate = array("hawaii" => 4.25, "Ca" => 8.25);
print_r($tax_rate);

foreach($tax_rate as $key => $values)
{
    echo $key . " : " .$value . "\n";
}

echo $tax_rate["Hawaii"];