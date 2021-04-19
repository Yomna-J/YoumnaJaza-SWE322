<?php

    include("config/config.php");
    include("src/php/sanitizeInput.php");

    if(isset($_POST['submit'])){
        $username = fix_string($_POST['username']);
        $email = $_POST['email'];
        $password = $_POST['password'];

        $hash = password_hash($password, PASSWORD_DEFAULT);

        if(validate_form($email, $username, $password) == true){
            $stmt = $connection->prepare("INSERT INTO `user_account`(`username`, `email`, `password`) VALUES (?,?,?)");
            $stmt->bind_param('sss', $username, $email, $password);
            if(false===$stmt->execute()){
                echo ($stmt->error);
                exit();
            }
            else {
                echo "An account has been created"; 
            }
            
            $stmt->close();
        }

        mysqli_close($conn)
        

    }



?>