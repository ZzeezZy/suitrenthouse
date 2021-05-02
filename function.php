
<?php
    include('connection.php')
?>

<?php 
// if (isset($_POST['register-btn'])) {
//     $firstName = mysqli_real_escape_string($conn, $_POST['fname']);
//     $lastName = mysqli_real_escape_string($conn, $_POST['lname']);
//     $email = mysqli_real_escape_string($conn, $_POST['email']);
//     $phone = mysqli_real_escape_string($conn, $_POST['pno']);
//     $address = mysqli_real_escape_string($conn, $_POST['addr']);
//     $password = mysqli_real_escape_string($conn, $_POST['pass']);
//     $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);
//     $role = $_POST['role']; $firstName = mysqli_real_escape_string($conn, $_POST['fname']);
//     $lastName = mysqli_real_escape_string($conn, $_POST['lname']);
//     $email = mysqli_real_escape_string($conn, $_POST['email']);
//     $phone = mysqli_real_escape_string($conn, $_POST['pno']);
//     $address = mysqli_real_escape_string($conn, $_POST['addr']);
//     $password = mysqli_real_escape_string($conn, $_POST['pass']);
//     $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);
//     $role = $_POST['role'];
    
//     $hash_password = password_hash($password, PASSWORD_BCRYPT);
//     $hash_cpassword = password_hash($cpassword, PASSWORD_BCRYPT);
    
//    $email_query = "SELECT * FROM users WHERE email='email' ";
//    $check_query = mysqli_query($conn, $email_query);
  
//     if(mysqli_num_rows($check_query) > 0) {
//         $_SESSION['status'] = "email already exits";
//         header("Location: register.php");
//     } else {
//         if($password == $cpassword) {
//             $query = "INSERT INTO users(fname, lname, email, phone_no, address, role, password) "; 
//             $query .= "VALUES('$firstName','$lastName','$email','$phone','$address', '$role', '$hash_password')";
//             $query_run = mysqli_query($conn, $query);

//             if($query_run) {
//                 $_SESSION['status'] = "Successfully Registered";
//                 header("Location: login.php");
//             } else {
//                 $_SESSION['status'] = "Something went wrong!";
//                 header("Location: register.php");
//             }
//         } else {
//             $_SESSION['status'] = "Password and Confirm password dont match";
//             header("Location: register.php");
//         }
//     }
  
//     mysqli_close($conn);
//     session_unset();
    
// }
    
  
if(isset($_POST['register_update_btn'])) {
    $update_id = $_POST['edit_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone_no = $_POST['pno'];
    $address = $_POST['addr'];
    $role = $_POST['role'];
    $password = $_POST['pass'];

    $query_update = "UPDATE users SET fname='$fname',lname='$lname', email='$email', phone_no='$phone_no', address='$address', role='$role' password='$password' WHERE id='$update_id' ";
    $query_update_run = mysqli_query($conn, $query_update);
    
    if($query_update_run) {
        header("Location: admin/user-profile.php");
    }
     else {
        header("location: register_edit.php");
    }
}

?>
<?php
if(isset($_POST['register_delete_btn'])) {
    $delete_id = $_POST['delete_id'];
    $reg_query = "DELETE FROM users WHERE id='$delete_id' ";
    $reg_query_run = mysqli_query($conn, $reg_query);

    if($reg_query_run) {
        header("Location: admin/user-profile.php");
    }
    else {
        echo "error";
        header("Location: admin/user-profile.php");
    }
}
?>

<?php

    if(isset($_POST['update_item'])) {
        header("location: admin/products.php");
    }

// if(isset($_POST['update_item'])) {
//     $update_id = $_POST['edit_id'];
//     $item_name = $_POST['product_name'];
//     $description = $_POST['description'];
//     $new_image = $_FILES['product_image']['name'];
//     $old_image = $_POST['product_image_old'];

// }
//     if($new_image != '') {
//         $update_filename = $_FILES['product_image']['name'];
//     } else {
//         $update_filename = $old_image;
//     }

//     if($_FILES['product_image']['name'] !='') {
//         if(file_exists("upload/" . $_FILES['img']['name'])) {
//             $filename = $_FILES['img']['name'];
//             echo "image already exists" . $filename;
//         }
//     } else {
//         $query = "UPDATE products SET product_name='$item_name', product_description='$description', product_image='$update_filename' WHERE product_id='update_id' ";
//         $query_run = mysqli_query($conn, $query);

//         if($query_run) {
//             if($_FILES['product_image']['name'] !='') {
//                 move_uploaded_file($_FILES['img']['tmp_name'], "upload/". $_FILES['img']['name']);
//                 unlink("upload/".$old_image);
//             }
//             echo "updated successfully";
//         } else {
//             echo "not updated";
//         }
//     }
?>

<?php 
    if (isset($_GET['item_delete_btn'])) {
        $id = $_GET['delete_id'];
        mysqli_query($conn, "DELETE FROM products WHERE product_id=$id"); 
        header('location: admin/products.php');
    }
?>


<?php 
 if(isset($_POST['add_item'])) {
        $product_name = $_POST['product_name'];
        $description = $_POST['description'];
        $img = $_FILES["img"]["name"];
        $price = $_POST['price'];

        $allowed_extension = array('gif','png','jpg','jpeg');
        $filename = $_FILES['img']['name'];
        $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($file_extension, $allowed_extension)) {
            echo "you are only allowed with gif, png, jpg, jpeg img file";
        }

        if(file_exists("upload/" . $_FILES['img']['name'])) {
            $filename = $_FILES['img']['name'];
            echo "image already exists" . $filename;
        } else {
            $product_query = "INSERT INTO products(product_name,product_description,product_image,price) VALUES('$product_name','$description', '$img', '$price') ";
            $product_query_run = mysqli_query($conn, $product_query);
    
            if($product_query_run) {
                move_uploaded_file($_FILES['img']['tmp_name'], "upload/". $_FILES['img']['name']);
                echo "image inserted";
            } else {
                echo "not inserted";
            }
        }
        
}
?>

<?php 
    // if(isset($_POST['login-btn'])) {
    //     $username = $_POST['fname'];
    //     $password = $_POST['pass'];

    //     $login_query = "SELECT * FROM users WHERE fname='$username' ";
    //     $login_query_run = mysqli_query($conn, $login_query);
    
    //     $email_count = mysqli_num_rows($login_query_run);

    //     if($email_count) {
    //         $email_password = mysqli_fetch_assoc($login_query_run);
    //         $db_password = $email_password['password'];

    //         $_SESSION['fname'] = $email_password['fname'];
    //         $password_decode = password_verify($password, $db_password);

    //         if($password_decode) {
    //             echo "Login successful";
    //             header("location: index.php");
    //         }else {
    //             echo "Password Incorrect";
    //             header("location: login.php");
    //         }
    //     }else {
    //         echo "Invalid email";
    //         header("location: register.php");

    //     }
    // }
?>

<?php
//  signup form

// function test_input($data) {
     
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

function emptyInputSignup($firstName, $lastName, $userName, $email, $phone, $address, $password, $cpassword) {
    $result = NAN;
    if(empty($firstName) || empty($lastName) || empty($userName) || empty($email) || empty($phone) || empty($address) || empty($password) || empty($cpassword)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUserName($userName) {
    $result= NAN;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result = NAN;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $cpassword) {
    $result = NAN;
    if($password !== $cpassword) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function userExists($conn, $userName, $email) {
    $sql = "SELECT * FROM users WHERE uname=? OR email=?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $userName, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $firstName, $lastName, $userName, $email, $phone, $address, $password) {
    $sql = "INSERT INTO users(fname, lname, uname, email, phone_no, address, role, password) VALUES(?,?,?,?,?,?,'user',?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_BCRYPT);


    mysqli_stmt_bind_param($stmt, "sssssss", $firstName, $lastName, $userName, $email, $phone, $address, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../login.php");
    exit();
}
?>

<?php 
// login form
function emptyInputLogin($userName,$password) {
    $result = NAN;
    if(empty($userName) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $userName, $password) {
    $uidExists = userExists($conn, $userName, $userName);

    if($uidExists === false) {
        header("Location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["password"];
    $checkPwd = password_verify($password, $pwdHashed);

    if($checkPwd === false) {
        header("Location: ../login.php?error=wrongPwd");
        exit();
    } else if($checkPwd === true) {
        session_start();
        $_SESSION['role'] = $uidExists['role'];
        if($_SESSION['role'] == 'admin') {
            $_SESSION['id'] = $uidExists['id'];
            $_SESSION['userName'] = $uidExists['uname'];
            // $_SESSION['role'] = $uidExists['role'];
            header("Location: ../admin/user-profile.php");
            exit(); 
        } else if($_SESSION['role'] == 'user') {
            $_SESSION['id'] = $uidExists['id'];
            $_SESSION['userName'] = $uidExists['uname'];
            // $_SESSION['role'] = $uidExists['role'];
            header("Location: ../index.php");
            exit(); 
        }
    }
}

?>

