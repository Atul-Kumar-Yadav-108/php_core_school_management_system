<h3 class="mb-3">Mark Attendance</h3>

<div class="card p-3">

    <!-- Date Picker -->
    <div class="mb-3">
        <label>Select Date</label>
        <input type="date" class="form-control" value="<?= date('Y-m-d'); ?>">
    </div>

    <form method="POST" action="controllers/AttendanceController.php">

        <table class="table table-hover align-middle">

            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>

                <!-- Dummy Data (DB se baad me aayega) -->
                <tr>
                    <td>1</td>
                    <td>Rahul Sharma</td>
                    <td>
                        <select name="attendance[1]" class="form-control">
                            <option value="present">Present</option>
                            <option value="absent">Absent</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Amit Verma</td>
                    <td>
                        <select name="attendance[2]" class="form-control">
                            <option value="present">Present</option>
                            <option value="absent">Absent</option>
                        </select>
                    </td>
                </tr>

            </tbody>

        </table>

        <button class="btn btn-success w-100 mt-3">
            Save Attendance
        </button>

    </form>

</div>