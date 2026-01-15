<?php
include '../config/database_config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="SELECT * FROM admin WHERE email='$email' AND password='$password'";

    if($conn->query($sql)){
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        
        header('location: /orphan/pages/dashboard.php');
    }
        
    else header('location: /orphan/pages/login.php') ;


}



?>