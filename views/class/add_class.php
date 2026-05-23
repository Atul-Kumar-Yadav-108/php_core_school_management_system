<?php
if (isset($_GET['id']) && $_GET['page'] == 'add_classes' && $_GET['id']) {
    $id = $_GET['id'];
    // errorPrint($_GET);
    $stmt = $con->prepare('SELECT * FROM tbl_classes_masters where id = ?');
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result  = $stmt->get_result();
    if ($result->num_rows > 0) {
        $single_record = $result->fetch_assoc();
        // errorPrint($single_record);
    }
}
?>
<h3 class="my-3">Add Class</h3>

<div class="card p-4" style="max-width:600px;">

    <form method="POST" action="controllers/MastersController.php" id="add-class-form">

        <input type="hidden" name="action" value="add_class">
        <input type="hidden" name="id" id="id" value="<?= !empty($single_record) ? $single_record['id'] : '' ?>">

        <div class="mb-3">
            <label>Class</label>
            <input type="text" name="class_name" id="class_name" class="form-control" placeholder="Enter class name" required value="<?= !empty($single_record) ? $single_record['class_name'] : '' ?>">
        </div>

        <button class="btn btn-success w-100">Save class</button>

    </form>

</div>

<script>
    $(document).ready(function() {
        $.validator.addMethod("noStartWithSpace", function(value, element) {
            return this.optional(element) || value.charAt(0) !== ' ';
        }, "Space not allowed at beginning!");
        $("#add-class-form").validate({
            rules: {
                required: true,
                noStartWithSpace: true
            },
            messages: {
                class_name: "Class name is required!",
            }
        })
    });
</script>