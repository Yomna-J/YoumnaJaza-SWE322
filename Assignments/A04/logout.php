<?php   
session_start(); //to ensure you are using same session

$helper = array_keys($_SESSION);
foreach ($helper as $key){
    unset($_SESSION[$key]);
}

session_destroy(); //destroy the session
header("Location: login.html"); //to redirect back to "index.php" after logging out
exit();
?>