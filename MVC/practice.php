<?php
//read and write CSV files

$products = array();
$products[] = array('MMS-1234', 'Trumpet', '199.95');
$products[] = array('MMS-8521', 'Flute', '149.99');

$file = fopen('products.csv', 'wb');  //remember 'ab' would append
foreach($products as $product)
{
    fputcsv($file, $product);  //takes an array and writes the csv line, each element seperated by the comma
}
fclose($file);

//read the csv file

$file = fopen('products.csv', 'rb');
$products = array();
while (!feof($file)){
    $product = fgetcsv($file); //read each line and put it into an array
    //print_r ($product);
    if ($product === false) continue;
    $products[] = $product;
}


print_r($products);
?>

