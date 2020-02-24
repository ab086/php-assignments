<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include "functions.php";

    foreach ($_FILES as $key => $value) {
       var_dump($_FILES[$key]);
    }

    for($i = 0; $i < sizeof($_FILES['file1']['name']); $i++)

    {
    

    

    //get the temporry name 
    $tmp_name = $_FILES['file1']['tmp_name'][$i];

    //get the path where you will store the files
    $savePath = getcwd() . DIRECTORY_SEPARATOR . "images";
    echo $savePath;

    //add the correct file name to the path 
    $img = $_FILES['file1']['name'][$i];
    $imageName = resizeImage($img);

    //MOVE THE UPLOADED FILE TO THE NEW LOCATION
    //$success = move_uploaded_file($tmp_name, $imageName);

    //if($success)
    //{
      //  echo "moved succesfully";
        //echo "<img src = 'images/$img'>";
    //}

    }//end of for loop

        echo( "<img src = 'images/smaller.jpg'>");


    ?>
</body>
</html>