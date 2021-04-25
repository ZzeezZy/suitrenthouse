<?php 
    // if(isset($_POST['register-btn'])) {
        
    //    require "../connection.php";

    //     $firstName = $_POST['fname'];
    //     $lastName = $_POST['lname'];
    //     $userName = $_POST['uname'];
    //     $email = $_POST['email'];
    //     $phone = $_POST['pno'];
    //     $address = $_POST['addr'];
    //     $password = $_POST['pass'];
    //     $cpassword = $_POST['cpass'];
    //     $role = $_POST['role'];

    //     if(empty($firstName) || empty($lastName) || empty($userName) || empty($email) || empty($phone) || empty($address) || empty($password)) {
    //         header("Location: ../signup.php?error=emptyfields&firstName=".$firstName."&lastName=".$lastName."&userName=".$userName."&email=".$email."&phone=".$phone."&address=".$address);
    //         exit();
    //     } else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
    //         header("Location: ../signup.php?error=invalidUameEmail");
    //         exit();
    //     } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //         header("Location: ../signup.php?error=invalidEmail&firstName=".$firstName."&lastName=".$lastName."&userName".$userName."&phone=".$phone."&address=".$address);
    //         exit();
    //     } else if(!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
    //         header("Location: ../signup.php?error=invalidUserName&firstName=".$firstName."&lastName=".$lastName."email=".$email."&phone=".$phone."&address=".$address);
    //         exit();
    //     } else if(!preg_match("/^[0-9]*$/", $phone) && $phone < 11) {
    //         header("Location: ../signup.php?error=invalidMobileno&firstName=".$firstName."&lastName=".$lastName."&userName=".$userName."&email=".$email."&address=".$address);
    //         exit();
    //     } else if($password !== $cpassword) {
    //         header("Location: ../signup.php?error=passwordcheck&firstName=".$firstName."&lastName=".$lastName."&userName".$userName."&email=".$email);
    //         exit();
    //     } else {
    //         $query = "SELECT * FROM users WHERE uname=? OR email=?";
    //         $stmt = mysqli_stmt_init($conn);

    //         if(!mysqli_stmt_prepare($stmt, $sql)) {
    //             header("Location: ../signup.php?error=stmtfailed");
    //             exit();
    //         } else {
    //             mysqli_stmt_bind_param($stmt, "ss", $userName, $email);
    //             mysqli_stmt_execute($stmt);
    //             mysqli_stmt_store_result($stmt);
    //             $resultCheck = mysqli_stmt_num_rows($stmt);
    //             if($resultCheck > 0) {
    //                 header("Location: ../signup.php?error=usertaken&email=".$email);
    //                 exit();
    //             } else {
    //                 $sql = "INSERT INTO users(fname,lname,uname,email,phone_no,address,password) VALUES(?,?,?,?,?,?,?)";
    //                 $stmt = mysqli_stmt_init($conn);
    //                 if(!mysqli_stmt_prepare($stmt, $sql)) {
    //                     header("Location: ../signup.php?error=sqlerror");
    //                     exit();
    //                 } else {
    //                     $hashedPwd = password_hash($password, PASSWORD_BCRYPT);
    //                     mysqli_stmt_bind_param($stmt, "sssssss", $firstName, $lastName, $userName, $email, $phone, $address, $hashedPwd);
    //                     mysqli_stmt_execute($stmt);
    //                     header("Location: ../signup.php?signup=success");
    //                     exit();
    //                 }
    //             }
    //         }
    //     }
    //     mysqli_stmt_close($stmt);
    //     mysqli_close($conn);
    // } else {
    //     header("Location: ../signup.php");
    //     exit();
    // }
?>

<?php 
    if(isset($_POST['register-btn'])) {
        require_once "../connection.php";
        require_once '../function.php';

        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $userName = $_POST['uname'];
        $email = $_POST['email'];
        $phone = $_POST['pno'];
        $address = $_POST['addr'];
        $password = $_POST['pass'];
        $cpassword = $_POST['cpass'];
        $role = $_POST['role'];

        if(emptyInputSignup($firstName, $lastName, $userName, $email, $phone, $address, $password, $cpassword) !== false) {
            header("Location: ../signup.php?error=emptyinput");
            exit();
        }
        if(invalidUserName($userName) !== false) {
            header("Location: ../signup.php?error=invalidUsername");
            exit();
        }
        if(invalidEmail($email) !== false) {
            header("Location: ../signup.php?error=invalidEmail");
            exit();
        }
        if(passwordMatch($password, $cpassword) !== false) {
            header("Location: ../signup.php?error=passwordsdontmatch");
            exit(); 
        }
        if(userExists($conn, $userName, $email) !== false) {
            header("Location: ../signup.php?error=usernametaken");
            exit(); 
        }
        createUser($conn, $firstName, $lastName, $userName, $email, $phone, $address, $password);
    } else {
        header("Location: ../signup.php");
        exit();
    }

?>