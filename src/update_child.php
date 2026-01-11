<?php
include '../config/database_config.php';

$upload_dir = $root_fodder . '\uploads';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $filename = $_FILES['photo']['name'];
    $sponsored_status = $_POST['status'];
    $funding = $_POST['funding'];
    $age = $_POST['age'];


    // validating uploaded file
    $status = $_FILES['photo']['error'];
    $tmp = $_FILES['photo']['tmp_name'];

    if ($tmp != null) {
        $sql = "SELECT * FROM child WHERE name='$name'";
        $result = $conn->query($sql);
        while ($myfile = $result->fetch_assoc()) unlink($root_fodder . '\uploads\\' . $myfile['filename']);

        $status = move_uploaded_file($tmp, $upload_dir . '\\' . $filename);
        $sql = "UPDATE child set filename='$filename' WHERE name='$name'";
        $conn->query($sql);
    }

    $sql = "UPDATE child set  gender='$gender',status='$sponsored_status', funding='$funding',age=$age WHERE name='$name'";
    $conn->query($sql);





}


header('location: /orphan/pages/dashboard.php#manage-children');


?>