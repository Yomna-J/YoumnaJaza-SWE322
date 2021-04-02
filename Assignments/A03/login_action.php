<?php
    include('../../../../../config/A03/config.php');

    if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])){

        $username = sanitize_sql($connection, $_POST['username']);

        $query = "SELECT `password` FROM `user_accounts` WHERE `user_name` = '$username'";

        if($result = mysqli_query($connection, $query)){
            if(mysqli_num_rows($result) > 0){
                $result = mysqli_fetch_array($result);
                if(password_verify($_POST['password'], $result[0])){
                    echo "Welcome";
                }else{
                    die("Wrong username or password");
                }
            }else{
                die("Wrong username or password");
            }
        }else{
            die("An error has occurred");
        }
    }else{
        die("Please fill all fields");
    }
     
    mysqli_close($connection);

    function test_input($data){
        $data = stripslashes($data); 
        $data = trim($data); 
        return $data;
    }
    function sanitize_sql($conn, $data) {
        $data = mysqli_real_escape_string($conn, $data);
        $data = test_input($data);
        return $data;
    }

?>