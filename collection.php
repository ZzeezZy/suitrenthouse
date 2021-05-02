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
                    <a href="#me">Who we Are</a>
                <li class="nav-link">
                    <a href="#contact">Contact Us</a>
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
    <?php
        $item_query = "SELECT * FROM products ORDER BY product_id DESC";
        $item_query_run = mysqli_query($conn, $item_query);

        ?>
    <div class="collection">
    <?php
            if(mysqli_num_rows($item_query_run) > 0) {
                while($row = mysqli_fetch_array($item_query_run)) { 
            ?>
        <div class="items" 
        style="float:left;
        margin-left: 40px;
            width:30%;
            padding:30px;
            min-height:250px;
            overflow:hidden;">
                <a href="product_detail.php?id=<?php echo $row['product_id']; ?>">
            <div class="image">
                <div class="product-image">
                        <img src="<?php echo "upload/". $row['product_image']; ?>" alt="image" >
                </div>
            <!-- </div> -->
                <!-- <div class="image-detail">
                    <div class="product-title">
                        <h1>
                            <?php echo $row['product_name']; ?>
                        </h1>
                    </div>
                    <div class="product-price">
                        <p>
                            <?php echo "Rs. ". $row['price']; ?>
                        </p> -->
                    <!-- </div>
                    <button>Order Now</button> -->
                </div>
            </a>
        </div>
        
        <!-- <div class="items">
                    <a href="product_detail.php?id=<?php echo $row['product_id'];?>">
                    <img src="<?php echo "upload/". $row['product_image']; ?>" alt="image" >
                    </a>
                    <a href="product_detail.php?id=<?php echo $row['product_id'];?>">
                    <img src="<?php echo "upload/". $row['product_image']; ?>" alt="image" >
                    </a>
                    <a href="product_detail.php?id=<?php echo $row['product_id'];?>">
                    <img src="<?php echo "upload/". $row['product_image']; ?>" alt="image" >
                    </a>

        </div> -->
        <?php     
        }
    }
?>
    </div>

</body>
</html>

 
  
