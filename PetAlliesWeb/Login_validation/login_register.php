<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login_reg-style.css">
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
            <form action="#" method="POST">
                <!--Username-->
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" required>
                    <label>Username</label>
                </div>

                <!--Password-->
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>

                <!--Forgotten Password-->
                <div class="forgotpassword">
                    <a href="#">Forgot Password?</a>
                </div>

                <!--Login Button-->
                <button type="submit" class="btn">Login</button>

                <!--Registration-->
                <div class="registration">
                    <p>Don't have an account? <a href="#"   class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <!-- ================ Registration Form ================ -->
        <div class="form-box register">
            <!--Header-->
            <h2>Registration</h2>
            <form action="#" method="POST">
                <!-- =================== Username ================ -->
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" required>
                    <label>Username</label>
                </div>
                
                <!-- =================== Email ==================== -->
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" required>
                    <label>Email</label>
                </div>

                <!-- ================= Password ================ -->
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>

                <!-- ====== Register Button ========= -->
                <button type="submit" class="btn">Register</button>

                <!--Registration-->
                <div class="registration">
                    <p>Already have an account? <a href="#"   class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- ================ Script ================ -->
    <script src="../assets/js/login_register.js"></script>
</body>
</html>