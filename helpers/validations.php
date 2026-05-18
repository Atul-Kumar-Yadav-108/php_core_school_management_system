<?php
include("../config/database.php");
// ch
if ($_POST['action'] == 'validate_email') {
    $res = checkDuplicateEmail($_POST['email'], $con);
    echo $res;
    exit;
}



function checkDuplicateEmail($email, $con)
{
    $stmt = $con->prepare('SELECT * from tbl_users where email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return "exists";
    } else {
        return "available";
    }
}
