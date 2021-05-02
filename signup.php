<?php 
    session_start();
    include "connection.php";
?>   
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Suit Rent House</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <!-- Navigation Start -->
    
        <div class="name">
            <a href="https://www.instagram.com/rishan_manson/"><i class="fa fa-instagram"></i></a>
            <a href="https://www.facebook.com/nima.in.5"><i class="fa fa-facebook"></i></a>
            <h1>Suit Rent House</h1>
            <h4>Best suting and fitting</h4>
        </div>
    <nav>    
        <div class="nav-links">
            <ul>
                <li class="nav-link">
                    <a href="index.php">Home</a>
                </li>
                <li class="nav-link">
                    <a href="index.php#design">Design</a>
                </li>
                <li class="nav-link">
                    <a href="collection.php">Collection</a>
                </li>
                <li class="nav-link">
                    <a href="index.php#me">Who we Are</a>
                <li class="nav-link">
                    <a href="index.php#contact">Contact Us</a>
                </li>
            </ul>
                
                <?php 
                    if(isset($_SESSION['id'])) {
                        echo '<div class="log-sign">
                                <a href="includes/logout.php">Logout</a>
                            </div>';
                    } else {
                        echo '<div class="log-sign">
                                <a href="login.php" class="log-btn">Log in</a>
                            </div>';
                    }
                ?>    
    </nav>
    <section id="form-container">
      <h2>Create a Account</h2>
      <?php 
        if(isset($_GET['error'])) {
          if($_GET['error'] == "emptyinput") {
            echo '<p class="signup-error">Fill in all the fields!</p>';
          } else if($_GET['error'] == "invalidUsername") {
              echo '<p class="signup-error">Invalid username!</p>';
          } else if($_GET['error'] == "invalidEmail") {
            echo '<p class="signup-error">Invalid email!</p>';
          } else if($_GET['error'] == "passwordsdontmatch") {
            echo '<p class="signup-error">Password does\'t match!</p>';
          } else if($_GET['error'] == "usernametaken") {
            echo '<p class="signup-error">Username already exists!</p>';
          } else if($_GET['error'] == "stmtfailed") {
            echo '<p class="signup-error"> Failed to connect!</p>';
          } else if($_GET['error'] == "none") {
            echo '<p class="signup-success"> Created successfully!</p>';
          }
        }
      ?>
      <form action="includes/signup.inc.php" method="post" id="form">

        <div class="form-group">
          <label for="fname">First Name</label>
          <input type="text" class="form-control" id="fname" name="fname">
        </div>
        <div class="form-group">
          <label for="lname">Last Name</label>
          <input type="text" class="form-control" id="lname" name="lname">
        </div>
        <div class="form-group">
          <label for="uname">User Name</label>
          <input type="text" name="uname" id="uname">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="pno">Phone no.</label>
          <input type="number" class="form-control" id="pno" name="pno">
        </div>
        <div class="form-group">
          <label for="addr">Address</label>
          <input type="text" class="form-control" id="addr" name="addr">
        </div>
        <input type="hidden" name="role" value="user" required>

        <div class="form-group">
          <label for="pass">Password</label>
          <input type="password" class="form-control" id="pass" name="pass">
        </div>
        <div class="form-group">
          <label for="cpass">Confirm Password</label>
          <input type="password" class="form-control" id="cpass" name="cpass">
        </div>
        <!-- <div class="form-group">
          <input type="checkbox">Tearms and Codintions:
-If anything damages occure on suit.
Then customer have to pay the actual price of whole Suit.
-Customer must pay minimum Rs5000 through online 
and remaining on delivery.
-Customer must leave some garuntee card like(Original Citizenship,Password,Driving
 liscence,Voter Id).
        </div> -->
        <input type="submit" name="register-btn" value="register" class="register-btn">
      </form>
    </section>
    <?php 
      if(isset($_GET['newpwd'])) {
        if($_GET['newpwd'] == "paswordupdated") {
          echo '<p> class="signupsuccess">Your password has been reset!</p>';
        }
      }
    ?>
  </body>
  </html>
