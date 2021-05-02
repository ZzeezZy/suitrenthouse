<?php 
    session_start();
    include "connection.php";
?>   

<?php 
    if(isset($_SESSION['id'])) {
        header("location: index.php");
    }
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

    <div class="login-container">
        <div class="login-header">
            <h1>Login</h1>    
        </div>
        <?php 
        if(isset($_GET['error'])) {
          if($_GET['error'] == "emptyinput") {
            echo '<p class="signup-error">Fill in all the fields!</p>';
          } else if($_GET['error'] == "wronglogin") {
              echo '<p class="signup-error">Username dosen\'t exists!</p>';
          } else if($_GET['error'] == "wrongPwd") {
            echo '<p class="signup-error">Password Incorrect!</p>';
          } 
        }
      ?>
        <form action="includes/login.inc.php" method="POST">
            <div class="form-group">
                <label for="name">Username / Email</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="pass" id="password">
            </div>
            <div class="forget-pass"><a href="includes/reset-password.inc.php">Forgot Password?</a></div><br>
            <button type="submit" name="login-btn" class="login-btn">Login</button>
            <div class="create-account">
               <p>Not a member?</p>
               <a href="signup.php">Sign up</a>
            </div>
        </form>
    </div>
</body>
</html>