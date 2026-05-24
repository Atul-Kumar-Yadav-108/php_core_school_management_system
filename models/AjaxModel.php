<?php

include("../config/database.php");


function get_all_classes($con, $start, $length, $search, $orderBy, $columnDir)
{
    $searchQuery = "";
    if (!empty($orderBy)) {
        if ($orderBy == 'srl' || $orderBy == 'action') {
            $orderBy = 'id';
        }
    }
    if (!empty($search)) {

        $search = mysqli_real_escape_string($con, $search);
        $searchQuery = "
            AND (
                class_name LIKE '%$search%'
                OR DATE_FORMAT(created_on, '%d %M %Y') LIKE '%$search%'
                OR DATE_FORMAT(created_on, '%d %b %Y') LIKE '%$search%'
                OR created_on LIKE '%$search%'
            )
        ";
    }

    // Total count
    $totalQuery = "
        SELECT COUNT(*) as total
        FROM tbl_classes_masters
        where is_deleted = '0'
    ";

    $totalResult = mysqli_query($con, $totalQuery);

    $totalRecords = mysqli_fetch_assoc($totalResult)['total'];



    // Filtered count
    $filteredQuery = "
        SELECT COUNT(*) as total
        FROM tbl_classes_masters
        where is_deleted = '0'
        $searchQuery
    ";

    $filteredResult = mysqli_query($con, $filteredQuery);

    $filteredRecords = mysqli_fetch_assoc($filteredResult)['total'];



    // Main data query
    $query = "
        SELECT *
        FROM tbl_classes_masters
        where is_deleted = '0'
        $searchQuery

        ORDER BY $orderBy $columnDir

        LIMIT $start, $length
    ";

    $result = mysqli_query($con, $query);

    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {

        $data[] = $row;
    }

    return [
        "totalRecords" => $totalRecords,
        "filteredRecords" => $filteredRecords,
        "data" => $data
    ];
}



// delete method

function delete($con, $id, $table)
{

    $allowedTables = ['tbl_classes_masters'];

    if (!in_array($table, $allowedTables)) {
        http_response_code(403);
        exit("Invalid table");
    }

    $stmt = $con->prepare("UPDATE $table SET is_deleted = '1' WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Record deleted successfully';
        echo "success";
    } else {
        $_SESSION['error'] = 'Failed to delete record!';
        http_response_code(500);
        echo "error";
    }
}

// status method

function status($con, $id, $table)
{
    $allowedTables = ['tbl_classes_masters'];

    if (!in_array($table, $allowedTables)) {
        http_response_code(403);
        exit("Invalid table");
    }

    $stmt = $con->prepare("UPDATE $table
                            SET status = CASE
                                WHEN status = '1' THEN '0'
                                ELSE '1'
                            END WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Status changed successfully';
        echo "success";
    } else {
        $_SESSION['error'] = 'Failed to change status!';
        http_response_code(500);
        echo "error";
    }
}
