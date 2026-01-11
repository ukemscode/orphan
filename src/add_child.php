<?php

include '../config/database_config.php';

$upload_dir = $_SERVER['DOCUMENT_ROOT'] . '\orphan\uploads';


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

    $status = move_uploaded_file($tmp, $upload_dir . '\\' . $filename);


    $sql = "INSERT INTO child VALUES('$name','$gender','$filename','$sponsored_status',$age,$funding)";
    if ($status) {
        $result = $conn->query($sql);

        if ($result)
            echo "scuessful";
        else
            echo "not saved";
    }

}

header('location: /orphan/pages/dashboard.php#manage-children')

?>