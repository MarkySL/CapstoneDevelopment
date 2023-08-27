<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--For Website Favicon-->
    <link rel="shortcut icon" href="../Images_SRC/PetAlliesFavicon.png" type="image/x-icon">

    <!--Website Design-->
    <link rel="stylesheet" href="../CSS/login-style.css" type="text/css">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!--AJAX Script-->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
 
    <!--Latest Fontawesome Javascript-->
    <script src="https://kit.fontawesome.com/acd6544335.js" crossorigin="anonymous"></script>

</head>
<body background="../Images_SRC/BGPetAllies.png" class="body-deg">
    
    <center>

        <div class="form-deg">
        <!--Title for Login Code-->
        <center class="title-deg">
            Pet Allies Animal Clinic
                    Login
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
            <form action="../PurePHP/login-check.php" method="POST" class="login-form">

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