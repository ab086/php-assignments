<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My Guitar Shop</h1>
    <hr>
    <h2>Product List</h2>

    
    
    <?php
        $myProducts = getProducts();
        foreach($myProducts as $product)
        {
            echo("<a href='?id=$product[0]'>$product[0]</a> $product[1] $product[2]<br>");
        }

    ?>
<a href="?action=add">Add A Product</a>
</body>
</html>