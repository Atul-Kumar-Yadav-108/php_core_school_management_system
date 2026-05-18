<h3 class="mb-3">Fees Management</h3>

<a href="index.php?page=add_fees" class="btn btn-primary mb-3">
    + Add Fee Record
</a>

<div class="card p-3">

    <table class="table table-hover align-middle">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Amount</th>
                <th>Month</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            <!-- Dummy Data (DB se baad me connect hoga) -->
            <tr>
                <td>1</td>
                <td>Rahul Sharma</td>
                <td>5000</td>
                <td>January</td>
                <td>
                    <span class="badge bg-success">Paid</span>
                </td>
                <td>
                    <a href="index.php?page=add_fees&id=1" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Amit Verma</td>
                <td>4500</td>
                <td>January</td>
                <td>
                    <span class="badge bg-danger">Pending</span>
                </td>
                <td>
                    <a href="index.php?page=add_fees&id=2" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>

        </tbody>

    </table>

</div>