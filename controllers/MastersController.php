<?php
include('../helpers/helpers.php');
session_start();
include("../config/database.php");
if ($_POST['action'] == 'add_class') {
    // errorPrint($_POST);
    $class_name = trim($_POST['class_name']);
    $stmt = $con->prepare('SELECT * FROM tbl_classes_masters where class_name = ?');
    $stmt->bind_param('s', $class_name);
    $stmt->execute();
    $result  = $stmt->get_result();
    if ($result->num_rows > 0) {
        $_SESSION['success'] = 'Class name already exists!';
        header("Location: ../index.php?page=add_classes");
    } else {
        if ($_POST['id']) {
            $id = $_POST['id'];
            $stmt_addClass = $con->prepare('Update tbl_classes_masters set class_name=? where id=?');
            $stmt_addClass->bind_param('si', $class_name, $id);
            // $stmt_addClass->execute();
            if ($stmt_addClass->execute()) {
                $_SESSION['success'] = 'Class update Successfully';
                header("Location: ../index.php?page=classes");
            } else {
                $_SESSION['error'] = 'Error while updating class!';
                header("Location: ../index.php?page=add_classes");
            }
        } else {
            $created_on = date('Y-m-d h:i:s');
            $stmt_addClass = $con->prepare('INSERT INTO tbl_classes_masters (class_name,created_on) values(?,?)');
            $stmt_addClass->bind_param('ss', $class_name, $created_on);
            // $stmt_addClass->execute();
            if ($stmt_addClass->execute()) {
                $_SESSION['success'] = 'Class added Successfully';
                header("Location: ../index.php?page=classes");
            } else {
                $_SESSION['error'] = 'Error while addding class!';
                header("Location: ../index.php?page=add_classes");
            }
        }
    }
}
