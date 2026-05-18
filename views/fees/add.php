<h3 class="mb-3">Add Fee</h3>

<div class="card p-4" style="max-width:600px;">

    <form method="POST" action="controllers/StudentController.php">

        <input type="hidden" name="action" value="add">

        <div class="mb-3">
            <label>Student Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter student name" required>
        </div>

        <div class="mb-3">
            <label>Amount</label>
            <input type="number" name="class" class="form-control" placeholder="Enter fee amount (e.g. 5000)" required>
        </div>

        <div class="mb-3">
            <label>Month</label>
            <select name="months" id="months" class="form-control" required>
                <option value="">Select Month</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" id="status" class="form-control">
                <option value="">Select Status</option>
                <option value="None">None</option>
                <option value="Pending">Pending</option>
                <option value="Paid">Paid</option>
            </select>
        </div>

        <button class="btn btn-success w-100">Save Fee</button>

    </form>

</div>