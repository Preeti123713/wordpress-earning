<?php
include('../../../../wp-config.php');
global $wpdb;
global $table_prefix;

// var_dump($_POST); die;
$id = $_POST['id'];
$username = $_POST['usernameame'];
$email = $_POST['useremail'];
$cab = $_POST['cab'];
$datetime = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $_POST['datetime'])));
$message = $_POST['message'];

$sql = "UPDATE wp_cab SET name='$username', email='$email', cabs='$cab', datetime='$datetime' WHERE id=$id";

$query = $wpdb->query($sql);

if ($query === false) {
    echo "Error: " . $sql . "<br>" . esc_sql($wpdb->last_error);
} else {
    echo "Data updated";
}
?>



