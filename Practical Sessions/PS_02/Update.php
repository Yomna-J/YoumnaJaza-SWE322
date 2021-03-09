<?php
    require('db_connection.php');

    if(isset($_POST['name'])){

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $mobile = $_POST['mobile'];
      
       $query = "UPDATE `s_phone_lists` SET `phone`=$phone,`mobile`=$mobile WHERE `name`='$name'";
       
       if (mysqli_query($connection, $query)) {
            echo "<br><h3>Data Has Been Updated Successfully!</h3>";
        } else {
            echo "<br>Error: " . mysqli_errno($connection) . " " . mysqli_error($connection);
        }
    }else{
        echo "Name doesn't exist";
    }
    mysqli_close($connection);


?>