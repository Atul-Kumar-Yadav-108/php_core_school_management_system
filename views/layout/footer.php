<!-- success message -->
<?php
if (isset($_SESSION['success'])) {
?>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000" data-bs-autohide="true">
        <div class="toast-body bg-success text-light fw-bold rounded text-center">
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </div>
    </div>
<?php
}
?>

<!-- error message -->
<?php
if (isset($_SESSION['error'])) {
?>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000" data-bs-autohide="true">
        <div class="toast-body bg-danger text-light fw-bold rounded text-center">
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
        </div>
    </div>
<?php
}
?>


</div>


<!-- bootstrap 5  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {

        $('.toast').toast({
            delay: 3000
        });

        $('.toast').toast('show');

    });
</script>

</body>

</html>