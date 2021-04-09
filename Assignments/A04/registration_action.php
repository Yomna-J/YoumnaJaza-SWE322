<?php

    include('../../../../../config/A03/config.php');
    include('php_validation.php');
    
    $email = $username = $password = "";

    if(isset($_POST['register']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){

        $username = fix_string($_POST['username']);
        $email = fix_string($_POST['email']);
        $username = fix_string($_POST['username']);
        $password = fix_string($_POST['password']);
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        if(validate_form($email, $username, $password) == true){
            $stmt = $connection->prepare("INSERT INTO `user_accounts`(`user_name`, `email`, `password`) VALUES (?,?,?)");
            $stmt->bind_param('sss', $username, $email, $password);
            if(false === $stmt->execute()){
                echo "An error has occurred";
                $stmt->close();
                exit();
            }else{
                $stmt->close();
                mysqli_close($connection);
                header('Location: login.html');
                exit();
            }
        }
    }else{
        echo "Please fill all fields";
    }

?>