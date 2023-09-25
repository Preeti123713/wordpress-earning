<?php
include( 'include/header.php' );
?>
<div class = 'container'>
<div id="info" style="display: none;"></div>
<div id="message"></div>
<!-- C:\xampp\htdocs\wordpress\wp-content\plugins\cab-booking\Cab_Booking_form_shortcode.php -->
<form id = 'form' method = 'Post'>
<div class = 'form-group'>
<label>Name</label>
<input type = 'text' class = 'form-control' name = 'username' >
<span class="error" id="username_err"><?php echo $nameErr;?></span>
</div>
<div class = 'form-group'>
<label>Email address</label>
<input type = 'email' class = 'form-control' name = 'useremail' ><?php echo $emailErr;?></div>
<span class="error" id="email_err"> </span>
    <div class = 'form-group'>
    <label>Cabs</label>
    <select id = 'cab' class = 'form-control' name = 'cab'  >
    <option selected value="0">Choose Cabs</option>
    <option value = 'Regular Cab'>Regular Cab</option>
    <option value = 'Extended Cab'>Extended Cab</option>
    <option value = 'Crew Cab'>Crew Cab</option>
    </select>
    <span class="error" id="cab_err"><?php echo $capErr;?></span>
        </div>
        <div class = 'form-group'>
        <label>Date And Time</label>
        <input id = 'input' width = '234' name = 'datetime'  />
        <span class="error" id="datetime_err"></span><?php echo $datetimeErr; ?></div>
            <div class = 'form-group'>
            <label>Message</label>
            <textarea class = 'form-control' rows= '3' name = 'message'><?php echo $megErr; ?></textarea>
            <span class="error" id="message_err"> </span>
                </div>
                <input type = 'hidden' id = 'path' value = 'http://localhost/wordpress/wp-content/plugins/cab-booking/ajax/insert.php' />
                <button type = 'submit' class = 'btn btn-primary' name = 'submit'>Submit</button>
                <div id="error_message" class="ajax_response" style="float:left"></div>
                <div id="info" style="display: none;">success</div>
                </form>
                
                </div>
                <?php include( 'include/footer.php' );
                ?>
               <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
                <script>
                $( '#input' ).datetimepicker( {
                    uiLibrary: 'bootstrap4',
                    modal: true,
                    footer: true
                }
            );
            </script>
            