<?php

if(isset($_POST['reset-request-submit'])) {
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "suit/login.php/forgottenpwd/create-new-password.php?selector=". $selector . "&validator=" . bin2hex($token);
    $expires = date("U") + 1800;

    require "../connection.php";

    $email = $_POST['email'];

    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "error";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdReset(pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES(?,?,?,?)"; 
    $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "error";
            exit();
        } else {
            $hashedToken = password_hash($token, PASSWORD_BCRYPT);
            mysqli_stmt_bind_param($stmt, "ssss", $email, $selector, $hashedToken, $expires);
            mysqli_stmt_execute($stmt);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        $to = $email;
        $subject = 'Reset Your password for Suit Rent House';
        $message = '<p> We recieved a password reset request. The link to reset your password to make this request, you can ignore this email</p>';
        $message .='<p>Here is your password reset link: </br>';
        $message .= '<a href="' . $url . '">' . $url . '</a></p>';

        $headers = "Form: Suit Rent House <thesuithouse458@gmail.com>\r\n";
        $headers .= "Reply-To: thesuithouse458@gmail.com \r\n";
        $headers .= "Content-type: text/html\r\n";

        mail($to, $subject, $message, $headers);

        header("Location: ../reset-password.php?reset=success");
} else {
    header("Location: ../index.php");
}


?>