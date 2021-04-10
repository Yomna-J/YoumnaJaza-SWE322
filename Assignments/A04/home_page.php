<?php
  # Home page Can't be accessed unless the user is logged in
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
  
  <title>Home</title>
</head>

<body>
  <!-- --------------NavBar--------------- -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" class="active" href="home_page.php">Home</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="profile.php">Profile</a></li>
        <li><a href="change_password.php">Change Password</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <h2><b>Welcome!</b></h2>
  </div>

</body>

</html>