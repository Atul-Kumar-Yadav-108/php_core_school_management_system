<h3 class="mb-3">Students List</h3>

<a href="index.php?page=add_student" class="btn btn-primary mb-3">
    + Add Student
</a>

<div class="card p-3">

    <table class="table table-hover align-middle">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            <!-- Dummy data (later DB se aayega) -->
            <tr>
                <td>1</td>
                <td>Rahul Sharma</td>
                <td>10th</td>
                <td>9876543210</td>
                <td>
                    <a href="index.php?page=add_student&id=1" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Amit Verma</td>
                <td>9th</td>
                <td>9123456780</td>
                <td>
                    <a href="index.php?page=add_student&id=2" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>

        </tbody>

    </table>

</div>