<?php


?>

<h3 class="mb-3">Add Student</h3>

<div class="card p-4" style="max-width:600px;">

    <form method="POST" action="controllers/StudentController.php">

        <input type="hidden" name="action" value="add">

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter student name" required>
        </div>

        <div class="mb-3">
            <label>Class</label>
            <input type="text" name="class" class="form-control" placeholder="Enter class (e.g. 10th)" required>
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Enter phone number" required>
        </div>

        <button class="btn btn-success w-100">Save Student</button>

    </form>

</div>