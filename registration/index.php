<?php

    session_start();

    $action = filter_input(INPUT_GET, "lo");
    if(!$action) {
        $action = filter_input(INPUT_POST, "action");
    }

    switch($action) {

        case("Login"):
            $textName = filter_input(INPUT_POST, "username");
            if($textName == "TestTest") {
                $_SESSION['user'] = "TestTest";
                include "membersOnly.php";
                
            } else {
                include "login.php";
            }
            echo($textName);
        break;

        case("y"):
            session_destroy();
            include "login.php";
            echo("<p>Logged out successfully</p>");
        break;

        default:
            include "login.php";
    }

?>