
    

// insert data into database using ajax
$(document).ready(function () {
  $("#form").submit(function (e) {
    e.preventDefault();
    // Reset error messages
    $(".error").text("");

    //  e.preventDefault(); // Prevent the default form submission
    // var id = $(this).data("id");
    var username = $("input[name=username]").val();
    var email = $("input[name=useremail]").val();
    var message = $("textarea[name=message]").val();
    var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
    var ajax_url = jQuery("#path").val();
    var form = $("#form").serialize();
    // Flag to check if there are any validation errors
    var error = false;
    if (username == "") {
      $("#username_err").html(
        `<div class="alert alert-warning">Username is required </div>`
      );
      error = true;
    }
    if (email == "") {
      $("#email_err").html(
        `<div class="alert alert-warning">email is required</div>`
      );
      error = true;
    } else if (!pattern.test(email)) {
      $("#email_err").html(
        `<div class="alert alert-warning">email is not a valid e-mail address</div>`
      );
      error = true;
    }
    var cab = $('select[name="cab"]').val();
    if (cab === "0") {
      $("#cab_err").html(
        `<div class="alert alert-warning">Please select at least One option</div>`
      );
      error = true;
    }
    var datetime = $('input[name="datetime"]').val();
    if (datetime === "") {
      $("#datetime_err").html(
        `<div class="alert alert-warning">Date and Time are required</div>`
      );
      error = true;
    }
    if (message == "") {
      $("#message_err").html(
        `<div class="alert alert-warning">Message is required</div>`
      );
      error = true;
    }
    // If there are validation errors, prevent form submission
    if (error) {
      e.preventDefault();
    } else {
      // Send AJAX request
      $.ajax({
        type: "POST",
        url: ajax_url, // WordPress AJAX URL
        data: form,
        success: function (response) {
          var res = JSON.parse(response);
          if (res.status === 200){
            alert(res.message);
            $("#form")[0].reset();
          }else{
            alert(res.message);
            // Show error message or perform any other actions
          }
        },
      });
    }
  });

  // update the data into database
  $("#update").submit(function (e) {
    e.preventDefault(); // Prevent the default form submission
    // debugger
    var id = $("#id").val();
    var ajax_url = jQuery("#path").val();
    alert(ajax_url);
    var username = $("input[name=username]").val();
    var email = $("input[name=useremail]").val();
    var cab = $("#cab").val();
    var datetime = $("#input").val();
    var message = $("textarea[name=message]").val();
    $.ajax({
      url: ajax_url,
      method: "POST",
      data: {
        id: id,
        username: username,
        email: email,
        cab: cab,
        datetime: datetime,
        message: message,
      },
      success: function (response) {
        // alert(response);
        var res = JSON.parse(response);
        if (res.status === 200){
          alert(res.message);
          // Show success message or perform any other actions
        }else{
          alert(res.message);
          // Show error message or perform any other actions
        }
      }
    });
   });
   

  });
   // Delete the data into Database

  function deleteItem(id,event){
    event.preventDefault();
  // $("#delete-aj").click(function () {
    var ajax_url = jQuery("#delete").val();
    if (confirm("Are you sure to remove this record ?")) {
      $.ajax({
        url: ajax_url,
        type: "GET",
        data: { id: id },
      success: function (data) {
        var res = JSON.parse(data);
        if (res.status === 200){
          $("#" + id).remove();
          alert(res.message); 
          location.reload()
        }else{
          alert(res.message); 
        }
        },
      });
    }
  // });
}
