<?php 

    include("../config/db_login.php");
    include("../src/php/sanitizeInput.php");

    if (isset($_POST['login'])) {
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
                    echo "hehr";
                  header('location: Home.php');
                } else {
                    die('Invalid username or password.');
                }
            } else {
                die("Invalid username or password.");
            }
        } else {
             die("Connection error.");
            }
        }
?>
