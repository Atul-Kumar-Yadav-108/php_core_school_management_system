<?php
include(__DIR__ . "/../config/database.php");

function errorPrint($result)
{
    echo "<pre>";
    print_r($result);
    exit;
}


function set_log($user, $data){
    global $con;
    $created_on = date('Y-m-d H:i:s');
    $sql = "INSERT INTO tbl_logs (`performed_by`, `data`, `created_on`) values(?,?,?)";
    $data = json_encode($data);
    $stmt_addlog = $con->prepare($sql);
    $stmt_addlog->bind_param('iss',$user,$data,$created_on);
    $stmt_addlog->execute();
    return;
}