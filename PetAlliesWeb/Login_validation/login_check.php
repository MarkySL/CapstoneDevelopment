<?php
//Check Database if the data input matches the data in the Database
session_start();

include 'connection.php';
include 'validation.php';

    if ($_SERVER["REQUEST_METHOD"]=='POST') 
    {
        $login_user = validate($_POST['login-user']);
        $login_pass = validate($_POST['login-pass']);

        $login_sql = "select * from admin where username='".$login_user."' and password='".$login_pass."'";

        $login_result = mysqli_query($con, $login_sql);

        $login_row = mysqli_fetch_assoc($login_result);

        if (password_verify($login_pass, $storedHashedPassword)) {
            $_SESSION["username"] = $login_user;
            header("location: ./Content/dashboard.php");
            exit;
        } else {
            echo "Invalid Username or Password";
            header("location:login_register.php");
        }

    }

?>

