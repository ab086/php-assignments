<?php 

    // Get working directory
    $path = getcwd();
    // echo($path);

    // Get directory listing
    $items = scandir($path);
    // var_dump($items);

    $file = array();
    foreach($items as $item) {
        $item_path = $path . DIRECTORY_SEPARATOR . $item;
        if(is_file($item_path)) {
            $file[] = $item;
        }
        
    }
    //var_dump($file);


    # Simple FileIO Read and Write #
    $text = file_get_contents("data.txt");
    // echo($text);

    $text2 = file("data.txt");
    //echo($text2);

    // Write a string to a file
    $textOut = "This is line one\nThis is line two";
    file_put_contents("message.txt", $textOut);

    // Write an array to a file
    $arrayNames = ['Stitch', 'Donald Duck', 'Kuzco', 'Dori'];
    $strNames = implode("\n", $arrayNames);
    // echo($strNames);

    // Output the string to a text file
    file_put_contents("usernames.txt", $strNames);

    // Use fopen() for larger text files

    $file = fopen("usernames.txt", "rb");
    $names = array();
    // feof($file) -> Returns true when the end of the file is reached

    while(!feof($file)) {
        $names[] = trim(fgets($file)); // Put each line into the array
    }

    fclose($file);
    var_dump($names);

?>