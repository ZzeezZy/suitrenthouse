<?php

    // if(isset($_POST['login-btn'])) {
    //     require "../connection.php";

    //     $mailname = $_POST['mailname'];
    //     $password = $_POST['pass'];

    //     if(empty($mailname) || empty($password)) {
    //         header("Location: ../login.php?error=emptyfields");
    //         exit();
    //     } else {
    //         $sql = "SELECT * FROM users WHERE uname=? OR email=?";
    //         $stmt = mysqli_stmt_init($conn);
    //         if(!mysqli_stmt_prepare($stmt, $sql)) {
    //             header("Location: ../login.php?error=sqlerror");
    //             exit();
    //         }else {
    //             mysqli_stmt_bind_param($stmt, "ss", $mailname, $mailname);
    //             mysqli_stmt_execute($stmt);
    //             $result = mysqli_stmt_get_result($stmt);
    //             if($row = mysqli_fetch_assoc($result)) {
    //                 $pwdCheck = password_verify($password, $row['password']);
    //                 if($pwdCheck == false) {
    //                     header("Location: ../login.php?error=wrongpassword");
    //                     exit();
    //                 } else if($pwdCheck == true) {
    //                     session_start();
    //                     $_SESSION['userId'] = $row['id'];
    //                     $_SESSION['userName'] = $row['uname'];
    //                     header("Location: ../index.php?login=success");
    //                 } else {
    //                     header("Location: ../login.php?error=wrongpassword");
    //                     exit();
    //                 }
    //             } else {
    //                 header("Location: ../login.php?error=nouser");
    //                 exit();
    //             }
    //         }
    //     }
    // }


    if(isset($_POST['login-btn'])) {
        $userName = $_POST['name'];
        $password = $_POST['pass'];

        require_once "../connection.php";
        require_once "../function.php";

        if(emptyInputLogin($userName, $password) !== false) {
            header("Location: ../login.php?error=emptyinput");
            exit();
        }

        loginUser($conn, $userName, $password);
    } else {
        header("Locaion: ../login.php");
    }

?>