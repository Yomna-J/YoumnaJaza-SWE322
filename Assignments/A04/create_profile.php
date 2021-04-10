<?php
    include('src/session_check.php');
    session_check(); # Page Can't be accessed unless the user is logged in
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- --------------Bootstrap-------------- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- --------------JS Files--------------- -->
    <script src="src/JsValidation.js"></script>

    <title>Create Profile</title>
</head>

<body>
    <!-- --------------NavBar--------------- -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="home_page.php">Home</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="profile.php">Profile</a></li>
                <li><a href="change_password.php">Change Password</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h2><b>Create a new profile</b></h2><br>
        <!-- --------------Bootstrap Form-------------- -->
        <form method="POST" onsubmit="return validateProfile(this)">
            <div class="form-group row">
                <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="f_name">
                </div>
            </div>
            <div class="form-group row">
                <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="l_name">
                </div>
            </div>
            <div class="form-group row">
                <label for="c_phone" class="col-sm-2 col-form-label">Contact Phone</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="c_phone">
                </div>
            </div>
            <div class="form-group row">
                <label for="c_email" class="col-sm-2 col-form-label">Contact Email</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="c_email">
                </div>
            </div>
            <div class="form-group row">
                <label for="city" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="city">
                </div>
            </div>
            <div class="form-group row">
                <label for="country" class="col-sm-2 col-form-label">Country</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="country">
                </div>
            </div>
            <div class="col-sm-5">
                <input type="submit" name="create" value="Create" class="btn btn-primary mb-2">
            </div>
        </form>
    </div>

    <?php

        include('../../../../../config/A03/config.php');
        include('src/php_validation.php');

        $fname = $lname = $c_phone = $c_email = $city = $country = "";

        if(isset($_POST['create']) && isset($_POST['f_name']) && isset($_POST['l_name']) && isset($_POST['c_phone'])
            && isset($_POST['c_email']) && isset($_POST['city']) && isset($_POST['country'])){
            
            $u_id = $_SESSION['id'];
            $fname = fix_string($_POST['f_name']);
            $lname = fix_string($_POST['l_name']);
            $c_phone = fix_string($_POST['c_phone']);
            $c_email = fix_string($_POST['c_email']);
            $city = fix_string($_POST['city']);
            $country = fix_string($_POST['country']);

            if(validate_profile($fname, $lname, $c_phone, $c_email, $city, $country) == true){
                $stmt = $connection->prepare("INSERT INTO `profile`(`u_id`, `first_name`, `last_name`, `contact_phone`, `contact_email`, `city`, `country`) VALUES (?,?,?,?,?,?,?)");
                $stmt->bind_param('sssssss',$u_id, $fname, $lname, $c_phone, $c_email, $city, $country);

                if(false === $stmt->execute()){
                    echo "An error has occurred";
                    $stmt->close();
                    exit();
                }else{
                    $stmt->close();
                    mysqli_close($connection);
                    header('Location: profile.php');
                    exit();
                }
            }
        }


    ?>
</body>

</html>