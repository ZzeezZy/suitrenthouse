<?php include "connection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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

            <div class="log-sign">
                <a href="login.php" class="log-btn">Log in</a>
            </div>
        </div>
        
    </nav>
    <?php 
        $product_id = $_GET['id'];
        $product_query = "SELECT * FROM products WHERE product_id='$product_id' ";
        $product_query_run = mysqli_query($conn, $product_query);

        if(mysqli_num_rows($product_query_run) > 0) {
            while($row = mysqli_fetch_array($product_query_run)) {

     
    ?>

    <div id="product">
        <div class="product-detail">
            <div class="product-image">
                <img src="<?php echo "upload/". $row['product_image']; ?>" alt="image">
            </div>
            <div class="image-detail">
                <div class="product-title">
                    <h1>
                        <?php echo $row['product_name']; ?>
                    </h1>
                </div>
                <div class="product-price">
                    <p>
                        <?php echo "Rs. ". $row['price']; ?>
                    </p>
                </div>
                <div class="product-description">
                    <p>
                        <?php echo $row['product_description']; ?>
                    </p>
                </div>
                <button type="submit" name="rent" class="rent">Rent Now</button>
            </div>
        </div>

    </div>
    
    <?php
            }
        }
    ?>
</body>
</html>