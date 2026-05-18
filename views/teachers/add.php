<h3 class="mb-3">Add Teacher</h3>

<div class="card p-4" style="max-width:600px;">

    <form method="POST" action="controllers/StudentController.php">

        <input type="hidden" name="action" value="add">

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter teacher name" required>
        </div>

        <div class="mb-3">
            <label>Subject</label>
            <input type="text" name="class" class="form-control" placeholder="Enter subject (e.g. math)" required>
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Enter phone number" required>
        </div>

        <button class="btn btn-success w-100">Save Teacher</button>

    </form>

</div>