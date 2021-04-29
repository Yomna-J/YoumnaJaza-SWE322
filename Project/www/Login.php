<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <!-- Bootstrap-->
    
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   
    <script src="../src/js/sanitizeInput.js"></script>
    <title>Login</title>
</head>

<body>
    <!-- --------------NavBar--------------- -->
    <div class="w3-top">
      <div class="w3-bar w3-card w3-left-align w3-large" style="background-color: #AA102D; color:#f1f1f1;">
          <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
          <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="text-decoration: none;">Home</a>
          <a href="index.php#first-grid" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="text-decoration: none;">About Us</a>
          <a href="index.php#second-grid" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="text-decoration: none;">Our Vision</a>
          <a href="index.php#footer" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="text-decoration: none;">Contact Us</a>
          <a href="Book_classes.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="text-decoration: none;">Book Classes</a>
          <a href="Registration.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="float:right; text-decoration: none;">Register</a>

      </div>
      

          <!-- Navbar on small screens -->
      <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
          <a href="index.php#first-grid" class="w3-bar-item w3-button w3-padding-large">Home</a>
          <a href="index.php#first-grid" class="w3-bar-item w3-button w3-padding-large">About Us</a>
          <a href="index.php#second-grid" class="w3-bar-item w3-button w3-padding-large">Our Vision</a>
          <a href="index.php#second-grid" class="w3-bar-item w3-button w3-padding-large">Book Classes</a>
          <a href="Book_classes.php" class="w3-bar-item w3-button w3-padding-large">Book Classes</a>
          <a href="Registration.php" class="w3-bar-item w3-button w3-padding-large">Register</a>
      </div>
  </div>

  <div class="container">
        <br><br><br>
        <h2><b>Login</b></h2><br>
        <!-- --------------Bootstrap Form-------------- -->
        <form method="POST" action="Login_action.php" onsubmit="return validate(this);">
            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="username">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
            <div class="col-sm-5">
                <input type="submit" name="login" value="Login" class="btn btn-primary mb-2" style="font-size:14px; border-color:#AA102D; background-color:#AA102D">
            </div>
        </form>
    </div>

    <script>
      // Used to toggle the menu on small screens when clicking on the menu button
      function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
        } else { 
          x.className = x.className.replace(" w3-show", "");
        }
      }
      </script>

</body>

</html>
