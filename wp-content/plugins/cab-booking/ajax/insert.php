<?php 


// if (isset( $_POST['submit'] ) ){
//     // print_r($_POST); die;
// $data= array(
//     'name' => $_POST['username'],
//     'email'=> $_POST['useremail'],
//     'cabs' => $_POST['cab'],
//     'datetime'=>date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $_POST['datetime']))),
//     'message'=> $_POST['message'] 
// );
 
// // $table= $table_prefix. 'cab';

// $sql= $wpdb->insert('wp_cab',$data);
// var_dump($wpdb); die;
// if($sql==true){
//     echo "<script>alert('data saved'); </script>";
// }else{
//     echo "<script>alert('failed'); </script>";
// }

//  } 
/*
Plugin Name:Cab Booking
*/
global $wpdb;
global $table_prefix;
echo $table_prefix;
    if (isset($_POST['submit'])) {
        $data = array(
            'name'     => $_POST['username'],
            'email'    => $_POST['useremail'],
            'cabs'     => $_POST['cab'],
            'datetime' => date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $_POST['datetime']))),
            'message'  => $_POST['message']
        );
        $table = $table_prefix.'cab'; // Use 'prefix' instead of 'table_prefix'
        echo $table;
        
        $sql = $GLOBALS['wpdb']->insert($table, $data);

        if ($sql == true) {
            echo "<script>alert('Data saved');</script>";
        } else {
            echo "<script>alert('Failed');</script>";
        }
    }
// }

// add_action('init', 'your_cab_booking_callback');
?>
