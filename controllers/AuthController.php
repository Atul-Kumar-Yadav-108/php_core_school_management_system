<?php
include('../helpers/helpers.php');
session_start();
include("../config/database.php");
if ($_POST['action'] == 'login') {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $con->prepare('SELECT * FROM tbl_users where email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result  = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row  = $result->fetch_assoc();
        // errorPrint($row);
        if (md5($password) == $row['password']) {
            $_SESSION['user'] = $email;
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['success'] = 'Login successful!';
            header("Location: ../index.php?page=dashboard");
        } else {
            $_SESSION['error'] = 'Wrong Password!';
            header("Location: ../index.php?page=login");
        }
    } else {
        $_SESSION['error'] = 'Not a registered user!';
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
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $hashedpassowrd = md5($password);
    $stmt = $con->prepare('Insert into tbl_users (name, email, password, original_password) VALUES(?,?,?,?)');
    $stmt->bind_param('ssss', $name, $email, $hashedpassowrd, $password);
    $stmt->execute();
    $_SESSION['success'] = 'Register successfully';
    header("Location: ../index.php?page=login");
    exit;
}
