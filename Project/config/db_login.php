<?php

    define("HOST", "127.0.0.1");
    define("USERNAME", "root");
    define("PASS", "");
    define("DB_NAME", "gym_db");

    $connection = mysqli_connect(HOST, USERNAME, PASS, DB_NAME);
    if (!$connection) {
        echo "Failed to connect to database";
    }

?>
