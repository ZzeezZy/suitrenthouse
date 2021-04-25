<?php 
    session_start();
    include "../connection.php";
?>   

<?php 
    $product_id = $_GET['id'];
    $edit_query = "SELECT * FROM products WHERE product_id='$product_id' ";
    $edit_query_run = mysqli_query($conn, $edit_query);

    if(mysqli_num_rows($edit_query_run) > 0) {
        while($row = mysqli_fetch_array($edit_query_run)) {
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
    <link rel="stylesheet" href="user.css"/>
    <link rel="stylesheet" href="../style.css">
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
                    <a href="../index.php">Home</a>
                </li>
                <li class="nav-link">
                    <a href="../index.php#design">Design</a>
                </li>
                <li class="nav-link">
                    <a href="../collection.php">Collection</a>
                </li>
                <li class="nav-link">
                    <a href="../index.php#me">Who we Are</a>
                <li class="nav-link">
                    <a href="../index.php#contact">Contact Us</a>
                </li>
            </ul>
                
                <?php 
                    if(isset($_SESSION['id'])) {
                        echo '<div class="log-sign">
                                <a href="../includes/logout.php">Logout</a>
                            </div>';
                    } else {
                        echo '<div class="log-sign">
                                <a href="../login.php" class="log-btn">Log in</a>
                            </div>';
                    }
                ?>    
    </nav>
    <aside class="dashboard">
        <ul>
            <li>
                <h2>
                    Dashboard
                </h2>
            </li>
            <li>
                <a href="user-profile.php">User-profile</a>
            </li>
            <li>
                <a href="products.php">All products</a>
            </li>
            <li>
                <a href="insert_items.php">Add Products</a>
            </li>
        </ul>
    </aside>
    <div class="add_items">
        <h3>Edit Items</h3>
        <form action="../function.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="edit_id" value="<?php echo $row['product_id']; ?>">
            <label for="product_name">Name of the Item</label>
            <input type="text" id="product_name" name="product_name" value="<?php echo $row['product_name']; ?>"><br>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="15" rows="2" value="<?php echo $row['product_description']; ?>"></textarea><br>
            <label for="image">Image for the Item</label>
            <input type="file" name="product_image" id="image" value="choose image">
            <input type="hidden" name="product_image_old" id="image" value="<?php echo $row['product_image']; ?>"><br>
            <label for="price">Price</label>
            <input type="number" name="price" id="price" value="<?php echo $row['price']; ?>">
            <input type="submit" name="update_item" value="Add Item">
        </form>
    </div>
    <?php 
        }
      } 
      else {
          die("No data found");
      }
    ?>
</body>
</html>