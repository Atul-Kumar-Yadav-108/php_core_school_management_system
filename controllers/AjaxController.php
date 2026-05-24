<?php
include('../helpers/helpers.php');
include('../models/AjaxModel.php');
session_start();
include("../config/database.php");

if (isset($_POST['action']) && $_POST['action'] == 'class_list') {
    // errorPrint("Checking data");
    // get_all_classes();
    // DataTables params
    $draw  = $_POST['draw'];
    $start = $_POST['start'];
    $length = $_POST['length'];

    $search = $_POST['search']['value'];

    // Sorting
    $columnIndex = $_POST['order'][0]['column'];

    $orderBy = $_POST['columns'][$columnIndex]['data'] ?? 'id';

    $columnDir = $_POST['order'][0]['dir'];

    $response = get_all_classes($con, $start, $length, $search, $orderBy, $columnDir);
    $tableData = [];
    // errorPrint($response['data']);
    if (!empty($response['data'])) {
        $srl = $start;

        foreach ($response['data'] as $row) {

            $srl++;
            $statusBtn = $row['status'] == 1 ? 'Inactive' : 'Active';
            $tableData[] = [

                "srl" => $srl,

                "class_name" => $row['class_name'],

                "created_on" => date(
                    "d M Y",
                    strtotime($row['created_on'])
                ),

                "status" => $row['status'] == 1
                    ? '<span class="badge bg-success">Active</span>'
                    : '<span class="badge bg-danger">Inactive</span>',

                "action" => '
                
                <button class="btn btn-sm btn-warning statusBtn text-light"
                    data-id="' . $row['id'] . '" data-table="tbl_classes_masters" data-status="' . $row['status'] . '">
                    ' . $statusBtn . '
                </button>

                <a class="btn btn-sm btn-primary editBtn"
                    href="index.php?page=add_classes&id=' . $row['id'] . '">
                    Edit
                </a>

                <button class="btn btn-sm btn-danger deleteBtn"
                    data-id="' . $row['id'] . '" data-table="tbl_classes_masters">
                    Delete
                </button>
            '
            ];
        }
    }
    echo json_encode([
        "draw" => intval($draw),
        "recordsTotal" => $response['totalRecords'],
        "recordsFiltered" => $response['filteredRecords'],
        "data" => $tableData
    ]);
}



// global delete

if (isset($_POST['action']) && $_POST['action'] == 'delete_action') {
    $id = $_POST['id'];
    $table = $_POST['table'];
    delete($con, $id, $table); // no return
    exit;
}


// global status change

if (isset($_POST['action']) && $_POST['action'] == 'status_action') {
    $id = $_POST['id'];
    $table = $_POST['table'];
    status($con, $id, $table); // no return
    exit;
}
