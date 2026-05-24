// Future JS for School Management System

console.log("School Management System Loaded 🚀");

/* Example: simple confirmation for delete */
function confirmDelete() {
  return confirm("Are you sure you want to delete this record?");
}

// delete sweet alert
$(document).on("click", ".deleteBtn", function () {
  let id = $(this).data("id");
  let table = $(this).data("table");
  Swal.fire({
    title: "Are you sure?",
    text: "This record will be moved to trash!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#3085d6",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: "../../php_core_school_management_system/controllers/AjaxController.php",
        type: "POST",
        data: {
          id: id,
          table: table,
          action: "delete_action",
        },
        success: function (response) {
          console.log("SERVER RESPONSE:", response);

          Swal.fire({
            title: "Deleted!",
            text: response,
            icon: "success",
            timer: 1500,
            showConfirmButton: false,
          });

          location.reload();
        },
        error: function (xhr) {
          console.log("AJAX ERROR:", xhr.responseText);
        },
      });
    }
  });
});

// status sweet alert

$(document).on("click", ".statusBtn", function () {
  let id = $(this).data("id");
  let table = $(this).data("table");
  let status = $(this).data("status");
  let statusMsg = "";
  if (status == "1") {
    statusMsg = "Inactive";
  } else {
    statusMsg = "Active";
  }
  Swal.fire({
    title: `Are you sure to ${statusMsg}?`,
    text: `This record will be change to ${statusMsg}!`,
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "rgb(252, 191, 7)",
    cancelButtonColor: "#3085d6",
    confirmButtonText: "Yes, Change status!",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: "../../php_core_school_management_system/controllers/AjaxController.php",
        type: "POST",
        data: {
          id: id,
          table: table,
          action: "status_action",
        },
        success: function (response) {
          console.log("SERVER RESPONSE:", response);

          Swal.fire({
            title: "Change Status!",
            text: response,
            icon: "success",
            timer: 1500,
            showConfirmButton: false,
          });

          location.reload();
        },
        error: function (xhr) {
          console.log("AJAX ERROR:", xhr.responseText);
        },
      });
    }
  });
});
