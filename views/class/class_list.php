<h3 class="my-3">Class Master</h3>

<a href="index.php?page=add_classes" class="btn btn-primary mb-3">
    + Add Class
</a>

<div class="card p-3">

    <table id="example" class="display table table-hover align-middle">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Class Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            <!-- Dummy Data (DB se baad me connect hoga) -->
            <tr>
                <td>1</td>
                <td>Rahul Sharma</td>
                <td>
                    <span class="badge bg-success">Paid</span>
                </td>
                <td>
                    <a href="index.php?page=add_classes&id=1" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Amit Verma</td>
                <td>
                    <span class="badge bg-danger">Pending</span>
                </td>
                <td>
                    <a href="index.php?page=add_classes&id=2" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>

        </tbody>

    </table>

</div>

<script>
    $(document).ready(function() {

        $('#example').DataTable({

            processing: false,
            serverSide: false,
            // ajax: {
            //     url: "fetch_users_dt.php",
            //     type: "POST"
            // },

        });

    });
</script>