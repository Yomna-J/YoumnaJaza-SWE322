<?php

    include('../../../../../config/A03/config.php');

    if(isset($_POST['register']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
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
    }else{
        echo "Please fill all fields";
    }

?>