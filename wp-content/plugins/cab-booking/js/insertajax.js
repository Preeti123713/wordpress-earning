$(document).ready(function() {
    alert('heelo');
    $('#form').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission
        var ajax_url= document.querySelector('#path').value;
        // Collect form data
        var formData = {
            // action: 'insert_data', // This will be used to identify the AJAX action in PHP
            username: $('input[name=username]').val(),
            useremail: $('input[name=useremail]').val(),
            cab: $('#cab').val(),
            datetime: $('#input').val(),
            message: $('textarea[name=message]').val()
        };
        
        // Send AJAX request
        $.ajax({
            type: 'POST',
            // C:\xampp\htdocs\wordpress\wp-content\plugins\cab-booking\insert.php
            url:  ajax_url,// WordPress AJAX URL
            data: formData,
            success: function(response) {
                $('#msg').html(response); // Display success message or error
            }
        });
    });
});
