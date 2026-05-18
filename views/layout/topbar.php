<div class="main">

    <nav class="navbar navbar-light bg-white shadow-sm px-3">

        <!-- Page Title -->
        <h5 class="mb-0">Dashboard</h5>

        <!-- Right Side -->
        <div class="d-flex align-items-center">

            <!-- Search -->
            <input type="text" class="form-control form-control-sm me-3" placeholder="Search...">

            <!-- Notification -->
            <button class="btn btn-light btn-sm me-3">🔔</button>

            <!-- Profile -->
            <div class="dropdown">
                <a class="dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#">
                    Admin
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="index.php?page=profile">Profile</a></li>
                    <li><a class="dropdown-item text-danger" href="controllers/AuthController.php?action=logout">Logout</a></li>
                </ul>
            </div>

        </div>

    </nav>