<?php
include('../../../../wp-config.php');
global $wpdb;
global $table_prefix;


$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$cab = $_POST['cab'];
$datetime = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $_POST['datetime'])));
$message = $_POST['message'];

$sql = "UPDATE wp_cab SET name='$username', email='$email', cabs='$cab', datetime='$datetime', message='$message' WHERE id=$id";
$query = $wpdb->query($sql); 
// print_r($query); 
// $query = $wpdb->query($sql);

if ($query === false) {
  $res = [
    'status' => 500,
    'message' => 'Record is not updated'
  ];
} else {
  $res = [
    'status' => 200,
    'message' => 'Record is updated'
  ];
}

echo json_encode($res);
return;
?>



