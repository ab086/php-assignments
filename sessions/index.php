<?php
    session_start();
    

    $action = filter_input(INPUT_GET, "lo");
    if(!$action) {
        $action = filter_input(INPUT_POST, "action");
    }
    

    switch($action) {
        
        case "Login":
            $textName = filter_input(INPUT_POST, "userName");

            if($textName == "Austin") {
                $_SESSION['user'] = "Austin";
                include "membersOnly.php";
            } else {
                echo("No such user!");
                include "login.php";
            }
            
        break;

        case "y":
            echo("Logged out successfully");
            echo("<script>console.log('Logged out');</script>");
            session_destroy();
            include "login.php";
            
        break;

        default:
            include "login.php";
    }

    
?>