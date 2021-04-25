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
                    <a href="#design">Design</a>
                </li>
                <li class="nav-link">
                    <a href="collection.php">Collection</a>
                </li>
                <li class="nav-link">
                    <a href="#me">Who we Are</a>
                <li class="nav-link">
                    <a href="#contact">Contact Us</a>
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

<!-- if($_SESSION['role'] == 'admin') {
    echo '<div class="log-sign">
    <a href="admin/user-profile.php">Dashboard</a>
        </div>';
} else if($_SESSION['role'] == 'user'){
    echo '<div class="log-sign">
            <a href="login.php" class="log-btn">Log in</a>
        </div>';
} -->
            
        
    </nav>
    <!-- Navigation Stop -->

        <!-- Slider Start -->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="upload/3.jpg" style="width:100%">
                <div class="text"></div>
            </div>
                
        </div>
        <!-- Slider Stop -->
        <!-- Design Start -->
        <section id="design">
            <div class="row"> 
                <div class="column">
                <a href="design4.php"><img src="upload/4.jpg"></a>
                <a href="design1.php"><img src="upload/1.jpg"></a>
                <!-- <p>A suit is a set of men's or women's clothes comprising a suit jacket, or coat, and trousers. When of identical textile, and worn with a collared dress shirt, necktie, and dress shoes, it was traditionally considered informal wear in Western dress codes. The lounge suit originated in 19th-century Britain as more casual wear alternative for sportswear and British country clothing. After replacing the black frock coat in the early 20th century as regular daywear, a sober one-coloured suit became known as a lounge suit. A darker, understated lounge suit for professional occasions became known as a business suit.</p> -->
                </div>
                <div class="column">
                <a href="design2.php"><img src="upload/2.jpg"></a>
                <a href="design3.php"><img src="upload/3.jpg"></a>
                </div> 
              </div>
              
        </section>
        <!-- Design Stop -->
        <!-- Who We Are Start -->
        <section id="me">
                <div class="abouts">
                    <h1>Who We Are</h1>
                    <p>In our suit house you can customize and design complete Tailoring shirts, pants, waistcoats, daura/Surwal, Coats, Reviews, Pricing And Alternatives via a fully dynamic web application. Suit House helps to manage all orders/sales, customers, income, expenses, measurements, so you can keep things organized and get detailed report of your fashion business while you concentrate on other important things. Suit House Management allows you to keep track of customer measurements.</p>
                    <p>The Suit House– Fashion House Management System – Tailoring shirts, pants, waistcoats, coats, Reviews, Pricing And Alternatives have found the perfect balance between usability, design and code robustness. The Suit House/ online suit management system is a powerful web application which is affordable and readymade for online custom designs and tailoring. It is fully responsive and works perfectly on all devices. Once a user has made a design, they will get an option to enter their measurements for that particular order. Our excellent measurement tailoring shop provide an easy approach to take accurate measurements. Once the order is completed, the user can get complete / detailed info.</p> 
                    <a target="_blank" href="https://www.iswmenswear.com/">Get More</a>
                </div>
        </section>
        <!-- Who We Are Stop -->
        <!-- Contact Us Start -->
        <section id="contact">
            <div class="contacts">
                <div class="title">
                    <h1>Get In Touch</h1>
                </div>
                <div class="contact-us">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.9584806043204!2d85.34971954977956!3d27.71856818270276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb194d493f0793%3A0x7f0a62d04f2d4883!2sAadim%20National%20College!5e0!3m2!1sen!2snp!4v1613498753445!5m2!1sen!2snp"></iframe>
                    </div>
                    <div class="contact-box">
                        <span>
                            <i class="fas fa-paper-plane"></i>
                            thesuithouse458@gmail.com
                        </span>                        
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            Golfutar, Budalinkantha
                        </span>
                        <span>
                            <i class="fa fa-phone"></i>
                            9861517094
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us Stop -->
        <!-- Footer -->
        <div class="footer">
            <p>Copyright &copy;. Suit Rent House</p>
          </div>
        
</body>
</html>