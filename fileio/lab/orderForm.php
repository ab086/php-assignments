<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>

    <form action="index.php" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" required>
        <br>
        <br>

        <label for="products">Products: </label>
        <select name="products">
            <?php 
                $file = fopen("products.txt", "rb");
                $products = array();

                while(!feof($file)) {
                    $products[] = trim(fgets($file));
                }

                foreach($products as $product) {
                    echo("<option>$product</option>");
                }

                fclose($file);
            ?>
        </select>
        <br>

        <label for="qty">Amount: </label>
        <select name="qty">
            <?php 
                $i = 1;
                while($i <= 20) {
                    echo("<option>$i</option>");
                    $i++;
                }
            ?>
        </select>

        <br>
        <br>
        <input type="submit" value="Place Order">
    </form>
    
</body>
</html>