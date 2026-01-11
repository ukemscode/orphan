<?php
include '../config/database_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="SELECT * FROM admin WHERE email='$email' AND password=$password";

    if($conn->query($sql)) header('location: /orphan/pages/dashboard.php');
    else header('location: /orphan/pages/login.php') ;


}



?>