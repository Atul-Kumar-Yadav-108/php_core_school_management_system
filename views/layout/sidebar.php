<div class="sidebar">

    <?php
    $page = $_GET['page'] ?? 'login';
    // echo "<pre>";
    // print_r($page);
    // exit;
    ?>

    <h4 class="text-center mb-4">SCHOOL</h4>

    <a href="index.php?page=dashboard" class="<?php if ($page == 'dashboard') {
                                                    echo "active";
                                                } ?>">Dashboard</a>
    <a href="index.php?page=students" class="<?php if ($page == 'students' || $page == 'add_student') {
                                                    echo "active";
                                                } ?>">Students</a>
    <a href="index.php?page=teachers" class="<?php if ($page == 'teachers' || $page == 'add_teacher') {
                                                    echo "active";
                                                } ?>">Teachers</a>
    <a href="index.php?page=fees" class="<?php if ($page == 'fees' || $page == 'add_fees') {
                                                echo "active";
                                            } ?>">Fees</a>
    <a href="index.php?page=attendance" class="<?php if ($page == 'attendance') {
                                                    echo "active";
                                                } ?>">Attendance</a>
    <a href="index.php?page=exams" class="<?php if ($page == 'exams') {
                                                echo "active";
                                            } ?>">Exams</a>
    <a href="index.php?page=profile" class="<?php if ($page == 'profile') {
                                                echo "active";
                                            } ?>">Profile</a>

    <a class="nav-link" data-bs-toggle="collapse" href="#mastersMenu" role="button">
        Masters
    </a>

    <div class="collapse <?php echo in_array($page, ['subjects', 'classes', 'add_classes']) ? 'show' : ''; ?>" id="mastersMenu">

        <ul class="list-unstyled ms-3">

            <li>
                <a href="index.php?page=subjects"
                    class="<?php echo ($page == 'subjects') ? 'active' : ''; ?>">
                    Subjects
                </a>
            </li>

            <li>
                <a href="index.php?page=classes"
                    class="<?php echo ($page == 'classes' || $page == 'add_classes') ? 'active' : ''; ?>">
                    Classes
                </a>
            </li>

            <!-- <li>
                <a href="index.php?page=topics"
                    class="<?php echo ($page == 'topics') ? 'active' : ''; ?>">
                    Topics
                </a>
            </li> -->

        </ul>

    </div>

    <hr>

    <a href="controllers/AuthController.php?action=logout" style="color:red;">Logout</a>

</div>