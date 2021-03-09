<?php
    $host = "127.0.0.1";
    $username = "swe";
    $pass = "P4ssw0rd";
    $db_name = "db_phonebook";
    
    $connection = mysqli_connect($host, $username, $pass, $db_name);

    if (!$connection) {
        echo mysqli_errno($connection) . " " . mysqli_error($connection);
    }
?>