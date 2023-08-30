<?php
/*
Plugin Name:Cab Booking
Plugin URI: https://larachamp.com/
Description: This plugin take users detail from form and send email to users and admin both.
Version: 1.0
Author: Preeti Rawat
Author URI:https://www.dreamhost.com/blog/how-to-create-your-first-wordpress-plugin/
*/
register_activation_hook( __FILE__, 'Activate_Cab_Booking' );
register_deactivation_hook( __FILE__, 'Deactivate_Cab_Booking' );
function Activate_Cab_Booking() {
  global $table_prefix, $wpdb;
  $charset_collate = $wpdb->get_charset_collate();
  $table = $table_prefix . 'cab';
  $sql = "CREATE TABLE $table (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `cabs` varchar(100) NOT NULL,
    `datetime` datetime NOT NULL,
    `message` varchar(200) NOT NULL,
    PRIMARY KEY(id)
  ) $charset_collate;";
 $wpdb->query($sql);
}

function Deactivate_Cab_Booking()
 {
    global $table_prefix, $wpdb;
    $table = $table_prefix . 'cab';
  $sql= "DROP TABLE `wordpress`. $table";
 $wpdb->query($sql);
}

add_action('admin_menu','Cab_Booking');
function Cab_Booking(){
add_menu_page('Cab Booking','Cab Booking',8,__FILE__,'Cab_Booking_Listing');
}

function Cab_Booking_Listing(){
 include('cab_booking_listing.php');
}
add_shortcode('cab_booking','Cab_Booking_form');
function Cab_Booking_form() {
  ob_start();
  ?>
  <?php include 'Cab_Booking_form_shortcode.php'; ?>
  <?php
  return ob_get_clean();
}