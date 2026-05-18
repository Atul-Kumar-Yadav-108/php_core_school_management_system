<h3 class="mb-3">Teachers List</h3>

<a href="index.php?page=add_teacher" class="btn btn-primary mb-3">
    + Add Teacher
</a>

<div class="card p-3">

    <table class="table table-hover align-middle">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            <!-- Dummy Data (DB se baad me aayega) -->
            <tr>
                <td>1</td>
                <td>Mr. Sharma</td>
                <td>Mathematics</td>
                <td>9876543210</td>
                <td>
                    <a href="index.php?page=add_teacher&id=1" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Mrs. Gupta</td>
                <td>Science</td>
                <td>9123456780</td>
                <td>
                    <a href="index.php?page=add_teacher&id=2" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>

        </tbody>

    </table>

</div>