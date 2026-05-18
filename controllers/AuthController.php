<?php
session_start();
include("../config/database.php");
if ($_POST['action'] == 'login') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "admin@gmail.com" && $password == "1234") {
        $_SESSION['user'] = $email;

        header("Location: ../index.php?page=dashboard");
    } else {
        $_SESSION['error'] = 'Invalid login!';
        // echo "Invalid Login";
        header("Location: ../index.php?page=login");
    }
    exit;
}

$action = $_GET['action'] ?? $_POST['action'] ?? '';

if ($action == 'logout') {

    session_unset();
    session_destroy();

    header("Location: ../index.php?page=login");
    exit;
}


if ($_POST['action'] == 'register') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedpassowrd = md5($password);
    // echo "<pre>";
    // print_r($_POST);
    // print_r($hashedpassowrd);
    // exit;

    $stmt = $con->prepare('Insert into tbl_users (name, email, password, original_password) VALUES(?,?,?,?)');
    $stmt->bind_param('ssss', $name, $email, $hashedpassowrd, $password);
    $stmt->execute();
    $_SESSION['success'] = 'Register successfully';
    header("Location: ../index.php?page=login");
    exit;
}
