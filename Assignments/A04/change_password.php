<?php
  include('src/session_check.php');
  session_check();
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

    <title>Change Password</title>
</head>

<body>
    <!-- --------------NavBar--------------- -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="home_page.php">Home</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="profile.php">Profile</a></li>
                <li class="active"><a href="change_password.php">Change Password</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h2><b>Change Password</b></h2><br>
        <!-- --------------Bootstrap Form-------------- -->
        <form method="POST" onsubmit="return validateNewPassword(this);">
            <div class="form-group row">
                <label for="old_pass" class="col-sm-2 col-form-label">Old Password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" name="old_pass">
                </div>
            </div>
            <div class="form-group row">
                <label for="new_pass" class="col-sm-2 col-form-label">NewPassword</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" name="new_pass">
                </div>
            </div>
            <div class="col-sm-5">
                <input type="submit" name="change" value="Change" class="btn btn-primary mb-2">
            </div>
        </form>
    </div>

    <?php
        include('../../../../../config/A03/config.php');

        if (isset($_POST['change']) && !empty($_POST['old_pass']) && !empty($_POST['new_pass'])) {
            $id = $_SESSION['id'];
            $old_pass = sanitize_sql($connection, $_POST['old_pass']);
            $new_pass = sanitize_sql($connection, $_POST['new_pass']);

            $query = "SELECT `password` FROM `user_accounts` WHERE `u_id` = '$id'";

            if ($result = mysqli_query($connection, $query)) {
                $result = mysqli_fetch_array($result);

                if (password_verify($old_pass, $result[0])) {
                    $new_pass = password_hash($new_pass, PASSWORD_DEFAULT);
                    $stmt = $connection->prepare("UPDATE `user_accounts` SET `password`=? WHERE `u_id` = '$id'");
                    $stmt->bind_param('s', $new_pass);
                    if (false === $stmt->execute()) {
                        echo "An error occurred";
                        $stmt->close();
                        exit();
                    } else {
                        echo "<b>Password changed successfully</b>";
                        $stmt->close();
                        exit();
                    }
                } else {
                    echo "<b>Old password is not correct</b>";
                }
            }
        } 

        function test_input($data){
            $data = stripslashes($data);
            $data = trim($data);
            return $data;
        }
        function sanitize_sql($conn, $data){
            $data = mysqli_real_escape_string($conn, $data);
            $data = test_input($data);
            return $data;
        }
    ?>
</body>

</html>