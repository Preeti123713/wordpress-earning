<?php plugin_dir_url( __FILE__ );
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
    <form id="form" method="Post" action="http://localhost/wordpress/wp-content/plugins/cab-booking/ajax/insert.php">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="useremail"></div>
    <div class="form-group">
      <label>Cabs</label>
      <select id="cab" class="form-control" name="cab">
        <option selected>Choose Cabs</option>
        <option>Regular Cab</option>
        <option>Extended Cab</option>
        <option>Crew Cab</option>
      </select>
    </div>
    <div class="form-group">
      <label>Date And Time</label>
    <input id="input" width="234" name="datetime"/>
    </div>
        <div class="form-group">
    <label>Message</label>
    <textarea class="form-control" rows="3" name="message"></textarea>
  </div>
  <input type="hidden" id="path" value="http://localhost/wordpress/wp-content/plugins/cab-booking/ajax/insert.php" />
   <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
<script>
        $('#input').datetimepicker({
            uiLibrary: 'bootstrap4',
            modal: true,
            footer: true
        });
    </script>
    <?php // wp_enqueue_script( 'insertajax', plugin_dir_url(__FILE__).'js/insertajax.js',NULL,NULL, true ); ?>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@c9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> -->
  </body>
</html>

