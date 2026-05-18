<div class="container d-flex justify-content-center align-items-center" style="height:90vh;">

    <div class="card p-4" style="width:380px;">

        <h3 class="text-center mb-4">Login</h3>

        <form method="POST" action="controllers/AuthController.php">

            <input type="hidden" name="action" value="login">

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email" required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password" required>
            </div>

            <button class="btn btn-primary w-100">Login</button>

        </form>

        <div class="text-center mt-3">
            <small>Don't have account?
                <a href="index.php?page=register">Register</a>
            </small>
        </div>

    </div>

</div>