<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php
    $product = displayAProduct($id);
   // var_dump($product);
    echo $product[1];
?>
</h1>

<section>
    <p><?=$product[0]?></p>
    <p><?=$product[2]?></p>
    
</section>

<a href="?action=add">Add A Product</a>
    
</body>
</html>