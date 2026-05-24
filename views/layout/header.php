<?php
include('./helpers/helpers.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>School Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
    <!-- jQuery FIRST -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- jquery validate script  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="../../php_core_school_management_system/assets/css/style.css">

    <style>
        body {
            background: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        /* Sidebar */
        .sidebar {
            width: 240px;
            height: 100vh;
            position: fixed;
            background: #1f2937;
            color: #fff;
            padding-top: 20px;
        }

        /* Main content */
        .main {
            margin-left: 240px;
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        /* Links */
        .sidebar a {
            display: block;
            color: #cbd5e1;
            padding: 10px 20px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #111827;
            color: #fff;
        }
    </style>

</head>

<body class="pasition-relative;">