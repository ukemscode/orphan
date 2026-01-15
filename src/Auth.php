<?php
session_start();

function verified():bool{

   if(isset($_SESSION['email'])){
   

    return true;
   }
   return false;

    // if($_SESSION['email']==null) return true;
    // return false;
}

function redirect_if_not_auth(){
    if(!verified()) header('location: /orphan/pages/login.php');
}
?>