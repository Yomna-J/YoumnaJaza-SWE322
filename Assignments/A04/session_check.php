<?php

    function session_check(){
        if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
            header("Location: login.html");
        }else{
            $inactive = 60; # in secs
        
            if (isset($_SESSION['id']) && (time() - $_SESSION['id'] > $inactive)) {
                # last request was more than 2 hours ago
                session_unset();     # unset $_SESSION variable for this page
                session_destroy();   # destroy session data
            }
            $_SESSION['id'] = time(); # Update session
        } 
    }

?>