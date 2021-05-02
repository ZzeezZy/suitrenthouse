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
    
    <!-- Header Start -->
    <div class="name">
            <a href="https://www.instagram.com/rishan_manson/"><i class="fa fa-instagram"></i></a>
            <a href="https://www.facebook.com/nima.in.5"><i class="fa fa-facebook"></i></a>
            <h1>Suit Rent House</h1>
            <h4>Best suting and fitting</h4>
        </div>
    <!-- Header Stop -->
    <!-- Navigation Start -->
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
                        // if($_SESSION['role'] == 'admin')
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
    <!-- Navigation Stop -->

    <!-- Design4 start -->
    <div class="box">
        <div class="imgbx">
            <img src="upload/3.jpg">
        </div>
        <div class="content">
            <h1>Royal Blue</h1>
            <p>Most single-breasted suits have two or three buttons, and one or four buttons are unusual (except that tuxedo dinner jackets often have only one button). It is rare to find a suit with more than four buttons, although zoot suits can have as many as six or more due to their longer length. There is also variation in the placement and style of buttons,[1] since the button placement is critical to the overall impression of height conveyed by the jacket. The centre or top button will typically line up quite closely with the natural waistline.[2] Double-breasted jackets have only half their outer buttons functional, as the second row is for display only, forcing them to come in pairs. Some rare jackets can have as few as two buttons, and during various periods, for instance the 1960s and 70s, as many as eight were seen.</p>
        </div>
    </div>
    <!-- Design4 stop -->

    <!-- similar Design  start-->
    <div class="main3">
        <img src="upload/6.jpg">
        <img src="upload/9.jpg">
        <img src="upload/5.jpg">
        <img src="upload/7.jpg">
        <img src="upload/8.jpg">
        <img src="upload/10.jpg">
    </div>

    <!-- similar Design stop -->

        
</body>
</html>