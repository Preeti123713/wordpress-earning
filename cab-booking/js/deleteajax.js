$(document).ready(function () {
  $(".btn-danger").click(function () {
    var id = $("#id").val();
    var ajax_url = jQuery("#delete").val();
    if (confirm("Are you sure to remove this record ?")) {
      $.ajax({
        url: ajax_url,
        type: "GET",
        data: { id: id },
        error: function () {
          alert("Something is wrong");
        },
        success: function (data) {
          $("#" + id).remove();
          alert("Record removed successfully");
        },
      });
    }
  });
});
