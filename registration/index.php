<?php

    session_start();

    echo("<link rel='stylesheet' href='styles.css'");

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
            $file = fopen("users.txt", "rb");
            $names = array();

            if(!empty($textName)) {

                while(!feof($file)) {
                    $names[] = trim(fgets($file));
                }

                if($textName == $names[0]) {
                    $_SESSION['user'] = $textName;
                    include "membersOnly.php";
                } else if($textName == "testUser") {
                    $_SESSION['user'] = $textName;
                    include "membersOnly.php";
                } else {
                    echo("<p>User doesn't exist! Do you need to register?</p>");
                }
                
            } else {
                echo("<p>Username cannot be blank</p>");
                // include "login.php";
            }
            //echo($textName);

            fclose($file);
        break;

        case("y"):
            session_destroy();
            include "login.php";
            echo("<p>Logged out successfully</p>");
        break;

        case("Register"):
            session_destroy();
            include "registration.php";
            $newUsername = filter_input(INPUT_POST, "newUser");
            file_put_contents("users.txt", $newUsername);
        break;

        default:
            include "login.php";
    }

    

?>