<style>
    a {
        text-decoration: none;
    }
</style>

<h3 class="mb-4">Dashboard</h3>

<!-- Stats Cards -->
<div class="row">

    <!-- Students -->
    <div class="col-md-3 mb-3">
        <a href="index.php?page=students">
            <div class="card p-3 bg-primary text-white">
                <h6>Total Students</h6>
                <h2>500</h2>
            </div>
        </a>
    </div>

    <!-- Teachers -->
    <div class="col-md-3 mb-3">
        <a href="index.php?page=teachers">
            <div class="card p-3 bg-success text-white">
                <h6>Total Teachers</h6>
                <h2>40</h2>
            </div>
        </a>
    </div>

    <!-- Fees -->
    <div class="col-md-3 mb-3">
        <a href="index.php?page=fees">
            <div class="card p-3 bg-warning text-white">
                <h6>Fees Pending</h6>
                <h2>₹1,20,000</h2>
            </div>
        </a>
    </div>

    <!-- Attendance -->
    <div class="col-md-3 mb-3">
        <a href="index.php?page=attendance">
            <div class="card p-3 bg-danger text-white">
                <h6>Attendance</h6>
                <h2>92%</h2>
            </div>
        </a>
    </div>

</div>

<!-- Charts Section (Future Ready) -->
<div class="row mt-4">

    <div class="col-md-8">
        <div class="card p-3">
            <h5>Performance Overview</h5>
            <p class="text-muted">Graph will be added here (Chart.js)</p>

            <div style="height:200px; background:#f1f1f1; border-radius:10px;"></div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Quick Actions</h5>

            <a href="index.php?page=add_student" class="btn btn-primary btn-sm mb-2 w-100">Add Student</a>
            <a href="index.php?page=fees" class="btn btn-success btn-sm mb-2 w-100">Manage Fees</a>
            <a href="index.php?page=attendance" class="btn btn-warning btn-sm mb-2 w-100">Mark Attendance</a>

        </div>
    </div>

</div>