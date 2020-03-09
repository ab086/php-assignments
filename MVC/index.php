<?php
    // This is the controller

    include "model/database.php";
    
    $action = filter_input(INPUT_POST, 'action');
    if ($action == null)
    {
        
        $action = filter_input(INPUT_GET, 'action');
    }

    
    
    if ($action == null) 
    {
        
        $id = filter_input(INPUT_GET, 'id');

        if ($id != null)
        {
            include "view/display_product.php";
        } else 
        {
            include "view/display_products.php";
        }
       
        
    } else if ($action == 'add')
    {
        include "view/add_products.php";
        
    } else if ($action == 'write')
    {
        $id = filter_input(INPUT_POST, 'id');
        $name = filter_input(INPUT_POST, 'product');
        $price = filter_input(INPUT_POST, 'price');
        addProducts($id, $name, $price);

        include "view/display_products.php";
        
    }


?>