<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dashboard</title>

    <link rel="stylesheet" href="../MyStyles/login-style.css" type="text/css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!--Latest Fontawesome Javascript-->
    <script src="https://kit.fontawesome.com/acd6544335.js" crossorigin="anonymous"></script>

</head>
<body background="BGPetAllies.png" class="body-deg">
    
    <center>

        <div class="form-deg">
        <!--Title for Login Code-->
        <center class="title-deg">
            Admin Login

            <h4>
                <?php

                    error_reporting(0);
                    session_start(); //Session will start over here
                    session_destroy(); // This prevent the message from posting permanently
                    echo $_SESSION['loginMessage'];

                ?>
            </h4>
        </center>
            <!--User/Password/Login Code-->
            <form action="login-check.php" method="POST" class="login-form">

                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input class="label-deg" type="text" name="username" placeholder="Username"> 
                </div>

                <div class="input-field">
                    <i class= "fas fa-lock"></i>
                    <input class="label-deg" type="Password" name="password" placeholder="Password">
                </div>

                <input class="btn btn-primary" type="submit"    name="submit" value="Login">
                </div>
            </form>
        </div>

    </center>

</body>
</html>