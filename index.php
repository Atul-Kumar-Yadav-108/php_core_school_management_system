<?php
session_start();
include("./config/database.php");
/*
-----------------------------------
 SIMPLE ROUTER (ERP STYLE)
-----------------------------------
*/

$page = $_GET['page'] ?? 'login';

/* allowed pages (security whitelist) */
$allowed = [
    'login',
    'register',
    'dashboard',

    'students',
    'add_student',

    'teachers',
    'fees',
    'attendance',
    'exams',
    'profile',
    'add_teacher',
    'add_fees',
    'subjects',
    'add_subjects',
    'classes',
    'add_classes',
];

/* security check */
if (!in_array($page, $allowed)) {
    $page = 'login';
}

/*
-----------------------------------
 AUTH CHECK (basic protection)
-----------------------------------
*/
$public_pages = ['login', 'register'];

if (!isset($_SESSION['user']) && !in_array($page, $public_pages)) {
    header("Location: index.php?page=login");
    exit;
}

/*
-----------------------------------
 LAYOUT LOAD
-----------------------------------
*/
include "views/layout/header.php";

/* show sidebar + topbar only after login */
if (isset($_SESSION['user']) && !in_array($page, $public_pages)) {
    include "views/layout/sidebar.php";
    include "views/layout/topbar.php";
}

/*
-----------------------------------
 PAGE LOADER
-----------------------------------
*/
$routes = [
    'login' => 'views/auth/login.php',
    'register' => 'views/auth/register.php',
    'dashboard' => 'views/dashboard.php',

    'students' => 'views/students/list.php',
    'add_student' => 'views/students/add.php',

    'teachers' => 'views/teachers/list.php',
    'fees' => 'views/fees/list.php',
    'attendance' => 'views/attendance/mark.php',
    'exams' => 'views/exams/result.php',
    'profile' => 'views/profile/profile.php',
    'add_teacher' => 'views/teachers/add.php',
    'add_fees' => 'views/fees/add.php',
    'add_classes' => 'views/class/add_class.php',
    'classes' => 'views/class/class_list.php',
];

include $routes[$page];

/*
-----------------------------------
 FOOTER
-----------------------------------
*/
// Divyesh Patel
include "views/layout/footer.php";

