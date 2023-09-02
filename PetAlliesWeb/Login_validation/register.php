<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/loginreg.css">
    <title>Register</title>
    <link rel="shortcut icon" href="../assets/imgs/PetAlliesFavicon.png" type="image/x-icon">

    <!--Fontawesome Scripts Icons-->
    <script src="https://kit.fontawesome.com/acd6544335.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <!-- ================ Registration Form ================ -->
        <div class="form-box register">
            <!--Header-->
            <h2>Registration</h2>
            <form action="#" method="POST">
                <!-- =================== Username ================ -->
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>
                
                <!-- =================== Email ==================== -->
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>

                <!-- ================= Password ================ -->
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>

                <!-- ====== Register Button ========= -->
                <button type="submit" name="registerbtn" class="btn">Register</button>

                <!--Registration-->
                <div class="registration">
                    <p>Already have an account? <a href="login.php"   class="login-link">Login</a></p>
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