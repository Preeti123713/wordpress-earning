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
add_menu_page('Cab Booking','Cab Booking','administrator','cab-booking','Cab_Booking_Listing');
}

function Cab_Booking_Listing(){
 include('cab_booking_listing.php');
}
add_action('admin_enqueue_scripts','insertajax');
function insertajax() {
    wp_enqueue_script( 'insertajax', plugins_url( '/js/insertajax.js', __FILE__ ), array('jQuery'), '1.0.0', true);
  
}
add_action( 'wp_enqueue_scripts', 'my_plugin_scripts' );
function my_plugin_scripts() {
  wp_enqueue_script( 'insertajax', plugins_url( '/js/insertajax.js', __FILE__ ), array('jQuery'), '1.0.0', true);

}

function Cab_Booking_form() {
  ob_start();
  include 'Cab_Booking_form_shortcode.php'; 
  return ob_get_clean();
}
add_shortcode('cab_booking','Cab_Booking_form');

  // Register the script first
  // wp-content/plugins/cab-booking/js/.js
  // /Include Javascript library
  wp_register_script('insertajax', plugin_dir_url(__FILE__) . 'js/insertajax.js', NULL,NULL, true);
  
  // add_action('init', 'register_script');
  // function register_script() {
  //     wp_register_script( 'insertajax', plugins_url('/js/insertajax.js', __FILE__), array('jquery'), '2.5.1' );
  
  // //     wp_register_style( 'new_style', plugins_url('/css/new-style.css', __FILE__), false, '1.0.0', 'all');
  // }
  
  // // use the registered jquery and style above
  // add_action('wp_enqueue_scripts', 'enqueue_style');
  
  // function enqueue_style(){
  //    wp_enqueue_script('custom_jquery');
  
  //    wp_enqueue_style( 'new_style' );
  // }

