<?php 
    session_start();
    include "../connection.php";
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
                <a href="#">All products</a>
            </li>
            <li>
                <a href="insert_items.php">Add Products</a>
            </li>
        </ul>
    </aside>

    <div class="container">
        <div class="row">
            <div class="products-header">
                All Products
            </div>
            <div class="table-status">
                <?php 
                    $products_query = "SELECT * FROM products";
                    $products_query_run = mysqli_query($conn, $products_query);
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Item Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(mysqli_num_rows($products_query_run) > 0) {
                            while($item_row = mysqli_fetch_array($products_query_run)) {
                        ?>
                        <tr>
                            <td><?php echo $item_row['product_id']; ?></td>
                            <td><?php echo $item_row['product_name']; ?></td>
                            <td><?php echo $item_row['product_description']; ?></td>
                            <td>
                                <img src="<?php echo "../upload/".$item_row['product_image']; ?>" width="50px" alt="img">
                            </td>
                            <td><?php echo $item_row['price']; ?></td>
                            <td>
                                <a href="edit_item.php?id=<?php echo $item_row['product_id']; ?>" class="edit">Edit</a>
                            </td>
                            <td>
                            <form action="../function.php">
                                        <input type="hidden" name="delete_id" value="<?php echo $item_row['product_id']; ?>">
                                        <button type="submit" name="item_delete_btn" class="delete-btn">Delete</button>
                                    </form>
                            </td>
                        </tr>
                        <?php 
                                }
                            } else {
                                echo "No Item Found";
                            }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>