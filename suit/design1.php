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
            <img src="upload/11.png">
        </div>
        <div class="content">
            <h1>The Suit Farm</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque cumque error excepturi voluptates optio distinctio, perferendis necessitatibus nulla reprehenderit ipsum molestiae dolorum dicta quisquam nostrum a ad inventore ut ex id nesciunt non quae quidem? Optio alias nesciunt, hic ipsam sunt repudiandae explicabo dolores natus quasi, quam eos? Commodi eveniet itaque quasi quam maiores et molestiae praesentium minus molestias architecto? Saepe earum similique harum cupiditate assumenda at provident temporibus tempore, rerum non. Fugit voluptatum exercitationem cupiditate! Possimus fugiat natus illum?</p>
           
        </div>
    </div>
    <!-- Design4 stop -->

    <!-- similar Design  start-->
    <div class="main">
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