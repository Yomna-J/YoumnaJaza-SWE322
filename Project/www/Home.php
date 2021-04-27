<?php
    # get available courses 
    # checkbox
    # confirmation & updating db (update bookings update classes)

    #TO DO: check allowed access

    include("../config/db_login.php");

    $query = "SELECT * FROM `classes` ";
    $result = mysqli_query($connection, $query);

    if ($result = mysqli_query($connection, $query)) {
        if (mysqli_num_rows($result) > 0) {
            $result = mysqli_query($connection, $query);
            echo "<form action='' method='post'>";
            $num_all_trainees = array();
            while ($result_row = mysqli_fetch_row($result)) { # Loop over all classes
                if ($result_row[4] < $result_row[5]) { # if it doesn't exceed max
                    if (date('Y-m-d') <= $result_row[3]) { # checks if the class date has passed
                        echo "<input type='checkbox' name='classes[]' 
                            value='$result_row[0]'/> $result_row[1] <br />";
                            
                        $num_all_trainees[$result_row[0]] = $result_row[4]; // array of all classes id , number of trainees                    
                    }
                } 
            }  
            echo "<input type='submit' name='confirm' value='Confirm' /> </form>";
        }
    }

    if (isset($_POST['confirm'])) { #ToDO: doesn't check

        $classes = $_POST['classes']; // id{1,2,3,4} 
        if (empty($classes)) {
            die ("You didn't select any classes.");
        } else {
            $num_classes = count($classes); # num of user choices length of array
            for ($i = 0; $i < $num_classes; $i++) {
                $new_num_trainees = $num_all_trainees[$classes[$i]]+1;
                $query = "UPDATE `classes` SET `number_of_trainees`= '$new_num_trainees' WHERE class_id = '$classes[$i]'";
                $result = mysqli_query($connection, $query);
                if (!$result = mysqli_query($connection, $query)) {
                    die('An error occurred');
                }
            }
        }
    }
?>