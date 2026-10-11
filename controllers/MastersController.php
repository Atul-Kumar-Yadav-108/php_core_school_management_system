<?php
include('../helpers/helpers.php');
session_start();
include("../config/database.php");
if ($_POST['action'] == 'add_class') {
    // errorPrint($_POST);
    // errorPrint($_SESSION['user_id']);
    $class_name = trim($_POST['class_name']);
    $id = !empty($_POST['id']) ? (int)$_POST['id'] : 0;

    if ($id) {
        // Edit: sirf doosre records mein same name check karo
        $stmt = $con->prepare('SELECT * FROM tbl_classes_masters WHERE class_name = ? AND id != ?');
        $stmt->bind_param('si', $class_name, $id);
    } else {
        // Add: poori table mein check karo
        $stmt = $con->prepare('SELECT * FROM tbl_classes_masters WHERE class_name = ?');
        $stmt->bind_param('s', $class_name);
    }
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = 'Class name already exists!';
        header("Location: ../index.php?page=add_classes");
    } else {
        if ($id) {
            $stmt_old = $con->prepare('SELECT class_name FROM tbl_classes_masters WHERE id = ?');
            $stmt_old->bind_param('i', $id);
            $stmt_old->execute();
            $old_data = $stmt_old->get_result()->fetch_assoc()['class_name'];

            $stmt_addClass = $con->prepare('UPDATE tbl_classes_masters SET class_name=? WHERE id=?');
            $stmt_addClass->bind_param('si', $class_name, $id);
            if ($stmt_addClass->execute()) {
                $log_data = ['module' => 'classes', 'status' => 'updated', 'old_data' => $old_data, 'new_data' => $class_name];
                set_log($_SESSION['user_id'], $log_data);
                $_SESSION['success'] = 'Class updated successfully';
                header("Location: ../index.php?page=classes");
            } else {
                $_SESSION['error'] = 'Error while updating class!';
                header("Location: ../index.php?page=add_classes");
            }
        } else {
            $created_on = date('Y-m-d H:i:s');
            $stmt_addClass = $con->prepare('INSERT INTO tbl_classes_masters (class_name, created_on) VALUES (?, ?)');
            $stmt_addClass->bind_param('ss', $class_name, $created_on);
            if ($stmt_addClass->execute()) {
                $log_data = ['module' => 'classes', 'status' => 'added', 'old_data' => '', 'new_data' => $class_name];
                set_log($_SESSION['user_id'], $log_data);
                $_SESSION['success'] = 'Class added successfully';
                header("Location: ../index.php?page=classes");
            } else {
                $_SESSION['error'] = 'Error while adding class!';
                header("Location: ../index.php?page=add_classes");
            }
        }
    }
}
