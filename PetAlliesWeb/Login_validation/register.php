<?php
session_start();
session_destroy();
include 'connection.php';
include 'validation.php';

if (isset($_POST['registerbtn'])) {
    
    $username = validate($_POST['username']);
    $email = validate($_POST['email']);
    $password = password_hash($password, PASSWORD_DEFAULT); #Hashing Password

    $sql = "insert into admin (username, email, password) values ('$username', '$email', '$password')"; 

    $query = mysqli_query($con, $sql);

    if ($query) {
        header("location: register.php?msg=Registration Successfully!");
    } else {
        header("location:register.php?msg=Registration Failed!");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/loginreg.css">
    <!--Sweet Alert Message JS-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

            <!--Alert Message-->
            <?php  
                if (isset($_GET['msg'])) { ?>
                     <p class="msg"><?php echo $_GET['msg']; ?></p>      
            <?php } ?> 

            <form action="#" method="POST">
                <!-- =================== Username ================ -->
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="username" placeholder="Create username">
                </div>
                
                <!-- =================== Email ==================== -->
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" name="email" placeholder="Enter your email">
                </div>

                <!-- ================= Password ================ -->
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="password" placeholder="Create password">
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