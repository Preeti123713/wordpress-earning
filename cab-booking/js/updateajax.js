// update data into database using ajax
$(document).ready(function(){
    $('#update').submit(function(e) {
        $('.table').DataTable();
        e.preventDefault(); // Prevent the default form submission
        // var id = $(this).data("id");
        var id =$('#id').val();
       var username=  $('input[name=username]').val();
       var email= $('input[name=useremail]').val();
         var cab=  $('#cab').val();
         var datetime= $('#input').val();
       var  message= $('textarea[name=message]').val();
        // alert(id);
        var ajax_url= jQuery('#path').val();
       
        $.ajax({
            url:ajax_url,
            method:'POST',
            data:{id:id,
                usernameame:username,
                useremail:email,
                cab:cab,
                datetime:datetime,
                message:message
            },
            success:function(response){
                alert(response);
            }
        });
    });
});











        