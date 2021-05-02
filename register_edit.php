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
    <link rel="stylesheet" href="admin/user.css">
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
    $id = $_GET['id'];
    $register_query = "SELECT * FROM users WHERE id='$id' ";
    $register_query_run = mysqli_query($conn, $register_query);

    if(mysqli_num_rows($register_query_run) > 0) {
        while($row = mysqli_fetch_array($register_query_run)) {
?>
    <section id="form-container">
      


      <h2>Register Edit</h2>
      <form action="function.php" method="post">

      <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">

        <div class="form-group">
          <label for="fname">First Name</label>
          <input type="text" id="fname" class="form-control" name="fname" value="<?php echo $row['fname']; ?>">
        </div>
        <div class="form-group">
          <label for="lname">Last Name</label>
          <input type="text" id="lname" class="form-control" name="lname" value="<?php echo $row['lname']; ?>">
        </div>
        <div class="form-group">
          <label for="uname">User Name</label>
          <input type="text" id="uname" class="form-control" name="uname" value="<?php echo $row['uname']; ?>">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
        </div>
        <div class="form-group">
          <label for="pno">Phone no.</label>
          <input type="number" id="pno" class="form-control" name="pno" value="<?php echo $row['phone_no']; ?>">
        </div>
        <div class="form-group">
          <label for="addr">Address</label>
          <input type="text" id="addr" class="form-control" name="addr" value="<?php echo $row['address']; ?>">
        </div>
        <div class="form-group">
          <label for="role">Role</label>
          <select name="role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
          </select>
        </div>
        <!-- <div class="form-group">  
          <label for="pass">Password</label>
          <input type="password" id="pass" class="form-control" name="pass" value="<?php echo $row['password']; ?>">
        </div> -->
        <input type="submit" name="register_update_btn" value="Update Data" class="register-btn">
      </form>
    </section>

    <?php 
        }
      } 
      else {
          die("No data found");
      }
    ?>
  </body>
  </html>
