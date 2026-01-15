<?php
include '../config/database_config.php';

$donation = $_POST['cdonation'];
$name = $_POST['name'];
$cname = $_POST['childname'];
$email = $_POST['email'];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "SELECT * FROM child WHERE name='$cname'";
    $result = $conn->query($sql);

    $child = $result->fetch_assoc();

    $donation = $donation + $child['funding'];

    $sql = "UPDATE child set funding=$donation WHERE name='$cname'";
    $result = $conn->query($sql);
}


header('location: /orphan/pages/thankyou.php?name=' . $name . '& email=' . $email)





    ?>