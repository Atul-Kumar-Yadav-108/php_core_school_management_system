<div class="container d-flex justify-content-center align-items-center" style="height:90vh;">

    <div class="card p-4" style="width:400px;">

        <h3 class="text-center mb-4">Register</h3>

        <form method="POST" action="controllers/AuthController.php" id="registrationForm" name="registrationForm" autocomplete="off">

            <input type="hidden" name="action" value="register">

            <div class="mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter name">
            </div>

            <div class="mb-3">
                <label>Email <span class="text-danger">*</span></label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" autocomplete="new-email">
                <span class="error" id="duplciate_email"></span>
            </div>

            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" autocomplete="new-password">
            </div>

            <button type="submit" id="registerUserBtn" name="registerUserBtn" class="btn btn-success w-100">Register</button>

        </form>

        <div class="text-center mt-3">
            <small>Already have account?
                <a href="index.php?page=login">Login</a>
            </small>
        </div>

    </div>

</div>

<script>
    $("#registrationForm").validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            }
        },

        messages: {
            name: {
                required: "Please enter your name"
            },
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address"
            },
            password: {
                required: "Please enter your password",
                minlength: "Password must be at least 6 characters"
            }
        },
        errorElement: "span",
        errorClass: "error",

        submitHandler: function(form) {
            form.submit();
        }
    });

    $('#email').on("blur", function() {
        console.log("Hit");
        let value = $(this).val();
        $.ajax({
            'url': 'helpers/validations.php',
            'method': "POST",
            "data": {
                "action": "validate_email",
                "email": value,
            },
            success: function(response) {
                if (response == 'exists') {
                    $('#duplciate_email').addClass('invalid').text('Email already exists');
                    $('#registerUserBtn').attr('disabled', true);
                } else {
                    $('#duplciate_email').removeClass('invalid').text('');
                    $('#registerUserBtn').attr('disabled', false);
                }
            },
        })
    });
</script>