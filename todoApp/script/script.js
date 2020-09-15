$(document).ready(function () {
  $("#verticalScroll").DataTable({
    scrollY: "380px",
    scrollCollapse: true,
  });
  $(".dataTables_length").addClass("bs-select");

  $("#add").click(function () {
    let todo = $("#input_todo").val();
    // Get data from the form and pass to create.php file
    $.ajax({
      url: "create.php",
      type: "POST",
      data: { value: todo },
      success: function () {
        location.reload();
      },
    });
  });
  $(".delete").click(function(e){
    // get id of element have class delete
    let idTodo = e.target.id;
    // convert the id to the same format as in the database
    let newId = idTodo.slice(3);
    $.ajax({
        url: "delete.php",
        type: "POST",
        data: { value: newId },
        success: function () {
          $("#tr"+newId).remove();
        },
      });
  });
});
