<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="JsValidation.js"></script>
    <title>Change Password</title>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#">Profile</a></li>
                <li class="active"><a href="change_password.php">Change Password</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
            </ul>
        </div>
    </nav>

        <form method="POST" style="margin-left: 2%;" onsubmit="return validateNewPassword(this);">
            <h3>Change Password</h3><br>
            Old Password: <input type="password" name="old_pass"><br><br>
            New Password: <input type="password" name="new_pass"> <br><br>
            <input type="submit" name="change" value="change">

        </form>


    <br>

    <?php
    include('../../../../../config/A03/config.php');

    if (isset($_POST['change']) && !empty($_POST['old_pass']) && !empty($_POST['new_pass'])) {
        session_start();
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
                    echo "Password changed successfully";
                    $stmt->close();
                    exit();
                }
            } else {
                echo "Old password is not correct";
            }
        }
    } 




    function test_input($data)
    {
        $data = stripslashes($data);
        $data = trim($data);
        return $data;
    }
    function sanitize_sql($conn, $data)
    {
        $data = mysqli_real_escape_string($conn, $data);
        $data = test_input($data);
        return $data;
    }


    ?>
</body>

</html>