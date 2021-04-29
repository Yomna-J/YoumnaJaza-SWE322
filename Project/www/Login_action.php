<?php 

    include("../config/db_login.php");
    include("../src/php/sanitizeInput.php");

    if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $username= fix_string($_POST['username']);
        $password= fix_string($_POST['password']); 

        $query= "SELECT * FROM user_account WHERE username = '$username'"; 
        $result= mysqli_query($connection, $query);  

        if($result){
            if(mysqli_num_rows($result) > 0){
                $result_row = mysqli_fetch_row($result);
                if(password_verify($_POST['password'], $result_row[3])){
                    session_start();
                    $_SESSION['id'] = $result_row[0];
                    $_SESSION['username'] = $result_row[1];
                    header('location: Book_classes.php');
                } else {
                    die('Invalid username or password.');
                }
            } else {
                die("Invalid username or password.");
            }
        } else {
             die("Connection error.");
            }
        }else if(isset($_POST['login'])){
            die("Please fill all fields.");
        }
?>
