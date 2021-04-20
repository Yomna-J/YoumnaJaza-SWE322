<?php 


    include('C:/xampp/htdocs/SWE322/Assignment03/signinForm.php');

    if (isset($_POST['submit'])) {
        $username= $_POST['username'];
        $u_password= $_POST['password']; 

        $query= "SELECT * FROM user_accounts WHERE User_name = '$username'"; 
        $result= mysqli_query($connection, $query);  


        if(!$result) { die("An error has occured"); }
        else { 
            if(mysqli_num_rows($result)<=0) { die("Wrong username or password, please try again.");  }
            else {  echo "Lgged in! Welcome."; }
            }

            if ($stmt= $connection->prepare('SELECT * FROM user_account WHERE username = ?')) {
                $stmt->bind_param('s', $_post['username']);
                $stmt->excute();
                $stmt->store_result();

                $stmt->close();
            } 
        }

            mysqli_close($connection)
?>
