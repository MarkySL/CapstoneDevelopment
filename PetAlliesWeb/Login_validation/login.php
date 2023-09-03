<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/loginreg.css">
    <title>Login</title>
    <link rel="shortcut icon" href="../assets/imgs/PetAlliesFavicon.png" type="image/x-icon">

    <!--Fontawesome Scripts Icons-->
    <script src="https://kit.fontawesome.com/acd6544335.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <!-- ==================== Login Form ==================== -->
        <div class="form-box login">
            <!--Header-->
            <h2>Login</h2>

            <!--Error Message-->
            <?php
                if (isset($_GET['error'])) { ?>
                     <p class="error"><?php echo $_GET['error']; ?></p>      
            <?php } ?> 

            <form action="login_check.php" method="POST">
                <!--Username-->
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="login-user" required>
                    <label>Username</label>
                </div>

                <!--Password-->
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="login-pass" required>
                    <label>Password</label>
                </div>

                <!--Forgotten Password-->
                <div class="forgotpassword">
                    <a href="#">Forgot Password?</a>
                </div>

                <!--Login Button-->
                <button type="submit" name="loginbtn" class="btn">Login</button>

                <!--Registration-->
                <div class="registration">
                    <p>Don't have an account? <a href="register.php" class="register-link">Register</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- 
        ================ Script ================ 
    <script src="../assets/js/login_register.js"></script>
    -->
</body>
</html>