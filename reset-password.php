p<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Reset your password</h1>
                <p>An e-mail will be send to you with instructions on how to reset your password.</p>

                <form action="includes/reset-request.inc.php" method="post">
                    <label for="email">Enter your e-mail address...</label>
                    <input type="text" name="email" id="email">
                    <button type="submit" name="reset-request-submit">Receive new password by email</button>
                </form>
                <?php 
                    if(isset($_GET['reset'])) {
                        if($_GET['reset'] == "success") {
                            echo '<p class="signup-success>Check your e-mail!</p>';
                        }
                    }
                ?>
            </section>
        </div>
    </main>   
</body>
</html>

