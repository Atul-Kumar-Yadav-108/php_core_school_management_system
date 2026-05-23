<?php

$pages_heading = [
    'dashboard' => 'Dashboard',

    'students' => 'Students',
    'add_student' => 'Students',

    'teachers' => 'Teachers',
    'fees' => 'Fees',
    'attendance' => 'Attendance',
    'exams' => 'Exams',
    'profile' => 'Profile',
    'add_teacher' => 'Teacher',
    'add_fees' => 'Fees',
    'add_classes' => 'Classes',
    'classes' => 'Classes',
];

?>
<div class="main">

    <nav class="navbar navbar-light bg-white shadow-sm px-3">

        <!-- Page Title -->
        <h5 class="mb-0"><?php
                            echo  $pages_heading[$page];
                            ?></h5>

        <!-- Right Side -->
        <div class="d-flex align-items-center">

            <!-- Search -->
            <input type="text" class="form-control form-control-sm me-3" placeholder="Search...">

            <!-- Notification -->
            <button class="btn btn-light btn-sm me-3">🔔</button>

            <!-- Profile -->
            <div class="dropdown">
                <a class="dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#">
                    <?php
                    if (isset($_SESSION['user_name'])) {
                        echo $_SESSION['user_name'];
                    }
                    ?>
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="index.php?page=profile">Profile</a></li>
                    <li><a class="dropdown-item text-danger" href="controllers/AuthController.php?action=logout">Logout</a></li>
                </ul>
            </div>

        </div>

    </nav>