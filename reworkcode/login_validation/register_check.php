<?php
session_start();
session_destroy();
include 'connection.php';
include 'validation.php';

if (isset($_POST['registerbtn'])) {
    
    $username = validate($_POST['username']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']); 
    $hash_pass = password_hash($password, PASSWORD_DEFAULT); #Hashing Password

    $sql = "insert into admin (username, email, password) values ('$username', '$email', '$hash_pass')"; 

    $query = mysqli_query($con, $sql);

    if ($query) {
        header("location:register.php?msg=Registration Successfully!");
        exit();
    } else {
        header("location:register.php?msg=Registration Failed!");
        exit();
    }
} else {
    header("location:location:register.php?msg=No Data Input");
    exit();
}
?>