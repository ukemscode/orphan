<?php
  include '../src/Auth.php';
 include '../config/database_config.php';

   redirect_if_not_auth();

  $name=$_GET['name'];


  $sql="SELECT * FROM child WHERE name='$name'";

  $result=$conn->query($sql);

  while($myfile=$result->fetch_assoc()){
    unlink($root_fodder.'\uploads\\'.$myfile['filename']);
  }



  $sql="DELETE FROM child WHERE name='$name'";

  $conn->query($sql);


  header('location: /orphan/pages/dashboard.php#manage-children') ;


?>