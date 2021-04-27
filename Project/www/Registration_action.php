<?php

    include("../config/db_login.php");
    include("../src/php/sanitizeInput.php");

    if(isset($_POST['register'])){
        $username = fix_string($_POST['username']);
        $email = fix_string($_POST['email']);
        $password = fix_string($_POST['password']);

        $hash = password_hash($password, PASSWORD_DEFAULT);

        # Test1234$
        if(validate_form($email, $username, $hash) == true){
            $stmt = $connection->prepare("INSERT INTO `user_account`(`username`, `email`, `password`) VALUES (?,?,?)");
            $stmt->bind_param('sss', $username, $email, $hash);
            if(false === $stmt->execute()){
                echo "An error occurred";
                exit();
            }
            else {
                header("Location: Login.html");
            } 
            $stmt->close();
        }
        mysqli_close($connection);
        

    }



?>