<!-- 
  This template is taken from W3schools and we have only edited some parts of it
-->


<!DOCTYPE html>
<html lang="en">
  <title>Gymlada </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-anchor,.fa-coffee {font-size:200px}

    .bg-text {
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
      color: white;
      font-weight: bold;
      border: 3px solid #f1f1f1;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 50%;
      padding: 20px;
      text-align: center;
    }

    </style>
  <body>

    <!-- Navbar -->
    <div class="w3-top">
      <div class="w3-bar w3-card w3-left-align w3-large" style="background-color: #AA102D; color:#f1f1f1;">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
        <a href="#first-grid" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Us</a>
        <a href="#second-grid" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Our Vision</a>
        <a href="#footer" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>
        <a href="Book_classes.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white-large w3-hover-white">Book Classes</a>
        <?php
          session_start();
          if (!isset($_SESSION['id']) || empty($_SESSION['id']) || session_status() === PHP_SESSION_NONE  ){

            echo "
            <a href='Registration.php' class='w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white' style='float:right;'>Register</a>
            <a href='Login.php' class='w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white' style='float:right;'>Login</a>
            
            ";
        }else{
          $username= $_SESSION['username'];
          echo "<a href='Logout.php' class='w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white' style='float:right;'>Log Out</a>";
          echo "<a href='#' class='w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white' style='float:right; '>$username</a>";

        }
        ?>
      
      </div>


      <!-- Navbar on small screens -->
      <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="#first-grid" class="w3-bar-item w3-button w3-padding-large">About Us</a>
        <a href="#second-grid" class="w3-bar-item w3-button w3-padding-large">Our Vision</a>
        <a href="#second-grid" class="w3-bar-item w3-button w3-padding-large">Book Classes</a>
        <a href="Book_classes.php" class="w3-bar-item w3-button w3-padding-large">Book Classes</a>

        <?php
          if (!isset($_SESSION['id']) || empty($_SESSION['id']) || session_status() === PHP_SESSION_NONE  ){
            echo "
            <a href='Registration.php' class='w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white' style='float:right;'>Register</a>
            <a href='Login.php' class='w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white' style='float:right;'>Login</a>
            
            ";
        }
        ?>
        
      </div>
    </div>

    <!-- Header -->
    <header class="w3-container w3-center" style="padding:128px 16px; background-image: url(../src/imgs/background.jpg); background-size: cover;  background-repeat: no-repeat; padding-bottom: 38%;">

        <div class="bg-text">
            <h2><strong> CHALLENGE YOURSELF </strong></h2>
            <h3> GET YOUR LIFE HEALTHIER. </h3>
        </div> 
    </header>

    <!-- First Grid -->
    <div class="w3-row-padding w3-padding-64 w3-container" id="first-grid">
      <div class="w3-content">
        <div class="w3-twothird">
          <h1>About Us</h1>
          <h5 class="w3-padding-32"> “WORLD GYM CHANGED MY LIFE. NOT ONLY PHYSICALLY, BUT MENTALLY AS WELL. I AM A BETTER MOTHER, BETTER SPOUSE AND AN ALL AROUND BETTER HUMAN BEING BECAUSE OF THIS GYM.” </h5>
          <h5> - ANGIE SLOAN, BARRIE, ON, CANADA. </h5>

          <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

      <div class="w3-third w3-center">
        <a href="https://www.flaticon.com/free-icon/dumbbell_3043888"><img src="../src/imgs/icon1.png" class="fa fa-anchor w3-padding-64" style="width: 80%; margin-top:15%"></a>
        </div>
      </div>
    </div>

    <!-- Second Grid -->
    <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container" id="second-grid">
      <div class="w3-content">
        <div class="w3-third w3-center">
          <a href="https://www.flaticon.com/free-icon/stretching-exercises_10699"><img src="../src/imgs/icon2.png" class="fa fa-anchor w3-padding-64" style="width: 80%; margin-top:15%;margin-left:-30px"></a>
        </div>

        <div class="w3-twothird">
          <h1>Our Vision</h1>
          <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

          <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
    </div>

    <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
        <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity" id="footer">  
      <div class="w3-xlarge w3-padding-32">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Designed by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    <p><a href="https://www.freepik.com/photos/man">Man photo created by tawatchai07 - www.freepik.com</a></p></p>
    </footer>

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
