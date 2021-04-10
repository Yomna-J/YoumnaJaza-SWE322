<?php
    include('../../../../../config/A03/config.php');
    include('src/php_validation.php');

    if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])){

        $username = fix_string($_POST['username']);
        $password = fix_string($_POST['password']);

        $stmt = $connection->prepare("SELECT * FROM `user_accounts` WHERE `user_name` = ? ");
        $stmt->bind_param('s', $username);
        if(false === $stmt->execute()){
            echo "An error has occurred";
            $stmt->close();
            exit();
        }else{
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) { // fetch as an associative array
                if(password_verify($password, $row['password'])){
                    session_start();
                    $_SESSION['id'] = $row['u_id'];
                    header('Location: home_page.php');
                }else{
                    die("Wrong username or password");
                }
            }
                die("Wrong username or password");
            $stmt->close();
            mysqli_close($connection);
            exit();
        }
    }else{
        die("Please fill all fields");
    }    
       
?>