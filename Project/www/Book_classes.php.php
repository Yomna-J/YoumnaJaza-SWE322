<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <?php
        # get available courses 
        # checkbox
        # confirmation & updating db (update bookings update classes)

        session_start();
        if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
            header("Location: Login.html");
        }

        include("../config/db_login.php");

        $query = "SELECT * FROM `classes` ";
        $result = mysqli_query($connection, $query);

        echo 

        if ($result = mysqli_query($connection, $query)) {
            if (mysqli_num_rows($result) > 0) {
                $result = mysqli_query($connection, $query);
                echo "<form action='' method='post'>";
                echo "<div class='form-check'>"
                    $num_all_trainees = array();
                    while ($result_row = mysqli_fetch_row($result)) { # Loop over all classes
                        if ($result_row[4] < $result_row[5]) { # if it doesn't exceed max
                            if (date('Y-m-d') <= $result_row[3]) { # checks if the class date has passed
                                echo "<input class='form-check-input' type='checkbox' name='classes[] id='flexCheckChecked'
                                    value='$result_row[0]'/> <label class='form-check-label' for='flexCheckDefault'> $result_row[1] </label> <br />";
                                    
                                    
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
                    //session_start();
                    $user_id = $_SESSION[ 'id'];
                    $query = "UPDATE `classes` SET `number_of_trainees`= '$new_num_trainees' WHERE class_id = '$classes[$i]'";
                    $query2 = "INSERT INTO `bookings`(`class_id`, `user_id`) VALUES ('$classes[$i]', '$user_id')";
                    $result2 = mysqli_query($connection, $query2);

                    $result = mysqli_query($connection, $query);
                    if (!$result = mysqli_query($connection, $query) && !$result2 = mysqli_query($connection, $query2)) {
                        echo mysqli_error($connection);
                        die('An error occurred');
                    }

                
                
                }
            }
        }
    ?>
</html>