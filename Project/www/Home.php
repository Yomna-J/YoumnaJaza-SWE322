<?php
    # get available courses 
    # checkbox
    # confirmation & updating db (update bookings update classes)

    #TO DO: check allowed access


    include("../config/db_login.php");

    $query="SELECT * FROM `classes` ";
    $result= mysqli_query($connection, $query);  


    if ($result = mysqli_query($connection, $query)) {
        if(mysqli_num_rows($result) > 0){ 
            $result = mysqli_query($connection, $query);
            while ($result_row = mysqli_fetch_row($result)) { # Loop over all classes
                if($result_row[4] < $result_row[5]){ # if it doesn't exceed max
                    if(date('Y-m-d') <= $result_row[3]){ # checks if the class date has passed
                        echo"$result_row[1] <br>";
                        
                 }           
                }

         }
    }
    }
?>