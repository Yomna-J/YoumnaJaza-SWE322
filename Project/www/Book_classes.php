<?php
    session_start();
    if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
        header("Location: Login.html");
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
       
        <!-- Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-card w3-left-align w3-large" style="background-color: #AA102D; color:#f1f1f1;">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="text-decoration: none;">Home</a>
            <a href="#first-grid" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="text-decoration: none;">About Us</a>
            <a href="#second-grid" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="text-decoration: none;">Our Vision</a>
            <a href="#footer" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="text-decoration: none;">Contact Us</a>
            <a href="Book_classes.php" class="w3-bar-item w3-button w3-padding-large w3-white" style="text-decoration: none;">Book Classes</a>
            </div>

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#first-grid" class="w3-bar-item w3-button w3-padding-large">About Us</a>
            <a href="#second-grid" class="w3-bar-item w3-button w3-padding-large">Our Vision</a>
            <a href="#second-grid" class="w3-bar-item w3-button w3-padding-large">Book Classes</a>
            <a href="Book_classes.php" class="w3-bar-item w3-button w3-padding-large">Book Classes</a>
            <a href="Registration.html" class="w3-bar-item w3-button w3-padding-large">Register</a>
            <a href="Login.html" class="w3-bar-item w3-button w3-padding-large">Login</a>
            </div>
        </div>


        <!-- First Grid -->
        <div class="w3-row-padding w3-padding-64 w3-container" id="first-grid">
            <div class="w3-content">
                <div class="w3-twothird">
                    <h1>Book Classes</h1><br>
                    <?php
                        include("../config/db_login.php");
                        $query = "SELECT * FROM `classes` ";
                        $result = mysqli_query($connection, $query);
    
                        if ($result = mysqli_query($connection, $query)) {
                            if (mysqli_num_rows($result) > 0) {
                                $result = mysqli_query($connection, $query);
                                echo "<form action='' method='post'>";
                                echo "<div class='form-check'> <table class='table'> <tr class='danger' style='font-size:20px'><td>Class Name</td>
                                    <td>Trainer Name</td> <td>Date</td> </tr>";
                                $num_all_trainees = array();
                                while ($result_row = mysqli_fetch_row($result)) { # Loop over all classes
                                    if ($result_row[4] < $result_row[5]) { # if it doesn't exceed max
                                        if (date('Y-m-d') <= $result_row[3]) { # checks if the class date has passed
                                            echo " <tr> <td>
                                            <input class='form-check-input' type='checkbox' name='classes[]' id='flexCheckChecked'
                                                value='$result_row[0]' style='width:20px; height:20px;'/> <label style=' font-weight:normal;font-size: 18px' class='form-check-label' for='flexCheckDefault'> $result_row[1] </label>  </td>  
                                                <td>$result_row[2]</td> <td>$result_row[3]</td> </tr>
                                                
                                                ";                                              
                                            $num_all_trainees[$result_row[0]] = $result_row[4]; // array of all classes id , number of trainees                    
                                            }
                                        } 
                                }echo "</table><br><input type='submit' name='confirm' value='Confirm' class='btn btn-primary mb-2' style='font-size:21px; border-color:#AA102D; background-color:#AA102D'/> </div></form>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
            <?php
                # get available courses 
                # checkbox
                # confirmation & updating db (update bookings update classes)
                if (isset($_POST['confirm']) && !empty($_POST['Classes'])) { #ToDO: doesn't check
                        $classes = $_POST['classes']; // id{1,2,3,4} 
                        $num_classes = count($classes); # num of user choices length of array
                        for ($i = 0; $i < $num_classes; $i++) {
                            $new_num_trainees = $num_all_trainees[$classes[$i]]+1;
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
                }else if(isset($_POST['confirm']) && empty($_POST['classes']))  {
                    die ("You didn't select any classes.");
                } 
            ?>
    </body>
</html>