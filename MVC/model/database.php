<?php

// <!-- reads in the products from text file and returns an array -->

function getProducts()
{
    
    $file = fopen('assets/products.csv', 'rb');
    $products = array();
    while (!feof($file)){
        $product = fgetcsv($file);
        if ($product === false) continue;
        $products[] = $product;
    }
    //print_r($products);
    return $products;
}


//display one product

function displayAProduct($theProduct)
{
    $products = getProducts();
    
    foreach ($products as $product)
    {
        //echo($product);
        if ($product[0] == $theProduct){
            return $product;
        }

    }

}

function addProducts($id, $name, $price)
{
    $products = array("$id", "$name", "$price");
    //print_r($products);
    $file = fopen('assets/products.csv', 'ab');
    
    // foreach($products as $prod)
    // {
        fputcsv($file, $products);
    // }
   
    
    fclose($file);
    
    
}



?>