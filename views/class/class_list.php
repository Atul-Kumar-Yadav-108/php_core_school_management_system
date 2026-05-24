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
                <th>Created At</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

        </tbody>

    </table>

</div>

<script>
    $(document).ready(function() {

        $('#example').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "../../php_core_school_management_system/controllers/AjaxController.php",
                type: "POST",
                data: {
                    action: "class_list"
                }
            },
            language: {
                emptyTable: "No records found"
            },
            columns: [{
                    data: 'srl'
                },
                {
                    data: 'class_name'
                },
                {
                    data: 'created_on'
                },
                {
                    data: 'status'
                },
                {
                    data: 'action'
                }
            ]
        });

    });
</script>