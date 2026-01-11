<?php

$root_fodder=$_SERVER['DOCUMENT_ROOT'] . '\orphan';

$username = "root";
$host = "localhost";
$password = "";
$dbname = "orphan";

// CREATE DATABASE orphan
$conn = new mysqli($host, $username, $password, $dbname);

?>