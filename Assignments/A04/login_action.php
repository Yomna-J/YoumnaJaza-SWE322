<?php
    include('../../../../../config/A03/config.php');

    if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])){

        $username = $_POST['username'];

        $stmt = $connection->prepare("SELECT * FROM `user_accounts` WHERE `user_name` = ? ");
        $stmt->bind_param('s', $username);
        if(false === $stmt->execute()){
            echo "An error has occurred";
            $stmt->close();
            exit();
        }else{
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                if(password_verify($_POST['password'], $row['password'])){

                    $_SESSION['id'] = $row['u_id'];
                    // 2 hours in seconds
                    $inactive = 60; 
                    ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours

                    session_start();
                    if (isset($_SESSION['id']) && (time() - $_SESSION['id'] > $inactive)) {
                        // last request was more than 2 hours ago
                        session_unset();     // unset $_SESSION variable for this page
                        session_destroy();   // destroy session data
                    }
                    $_SESSION['id'] = time(); // Update session
                    header('Location: home_page.php');
                }else{
                    die("Wrong username or password");
                }
            }
            $stmt->close();
            mysqli_close($connection);
            exit();
        }
    }else{
        die("Please fill all fields");
    }    
       
?>