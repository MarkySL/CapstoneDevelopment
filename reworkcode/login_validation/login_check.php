<?php
//Check Database if the data input matches the data in the Database
session_start();

include 'connection.php';
include 'validation.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("location: login.php?error=Username is required");
        exit();
    } elseif (empty($password)) {
        header("location: login.php?error=Password is required");
        exit();
    } else {
        $sql = "select * from admin where username='$username' and password='$password'";

        $result = mysqli_query($con,$sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                header("location:content/dashboard.php");
                exit();
            } else {
                # code...
            }
        } else {
            header("location: login.php?error=Incorrect username or password");
            exit();
        }
    }
}else {
    header("location: login.php");
    exit();
}

?>

