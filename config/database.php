<?php

$server = "localhost";
$username = "root";
$password = "Divyesh@123";
$database = "php_core_schoolmgt";
$con = new mysqli($server, $username, $password, $database);

if ($con->connect_errno) {
    die("Connection failed");
}

// echo "DB Connected successful";
