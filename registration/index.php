<?php

    session_start();

    $path = getcwd();


    $action = filter_input(INPUT_GET, "lo");
    if(!$action) {
        $action = filter_input(INPUT_POST, "action");
    }
    $registration = filter_input(INPUT_POST, "registration");

    // echo($action . " - " . $registration); // DEBUG

    if(!empty($registration)) {
        echo("<p>Registration successful!</p>");
    }
    
    switch($action) {

        case("Login"):
            $textName = filter_input(INPUT_POST, "username");
            if(!empty($textName)) {
                $_SESSION['user'] = $textName;
                include "membersOnly.php";
                
            } else {
                echo("<p>User doesn't exist! Do you need to register first?");
                include "login.php";
            }
            echo($textName);
        break;

        case("y"):
            session_destroy();
            include "login.php";
            echo("<p>Logged out successfully</p>");
        break;

        case("Register"):
            session_destroy();
            include "registration.php";
            $file = fopen("usernames.txt", "rb");

            $newUsername = filter_input(INPUT_POST, "userName");
            fclose($file);

        default:
            include "login.php";
    }

    

?>