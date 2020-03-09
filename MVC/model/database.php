<?php

    // Establish connection
    $username = "class";
    $password = "CIS239";
    $host = "localhost";
    $db_name = "products";

    try {
        $db = new mysqli($host, $username, $password, $db_name);
        echo("Connected");
    } catch (Exception $e) {
        exit($e->getMessage());
    }

    function getProducts() {
        global $db;
        $sql = "SELECT * FROM product";
        $query = mysqli_query($db, $sql);
        $recordSet = mysqli_fetch_all($query);
        //var_dump($recordSet);

        return($recordSet);
    }

    function displayAProduct($id) {
        global $db;

        $sql = "SELECT * FROM `product` WHERE `id` = '$id'";
        // echo($sql);
        $query = mysqli_query($db, $sql);
        $recordSet = mysqli_fetch_array($query);

        return($recordSet);
    }

    function addProducts($id, $name, $price) {
        global $db;

        $sql = "INSERT INTO `product` (`id`, `productName`, `price`) VALUES ('$id', '$name', '$price')";
        //echo($sql);
        $query = mysqli_query($db, $sql);
    }

?>