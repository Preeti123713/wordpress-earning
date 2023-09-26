<?php 
// print_r($_GET['id']); die;
include( '../../../../wp-config.php' );
global $wpdb;

if(isset($_GET['id'])){
     $sql = "DELETE FROM wp_cab WHERE id=".$_GET['id'];
     $query = $wpdb->query($sql);
if ($query === false) {
    echo "Error: " . $sql . "<br>" . esc_sql($wpdb->last_error);
    $res = [
        'status' => 500,
        'message' => 'Record deleted failed!'
    ];
    echo json_encode($res);
    return;
}else{
    $res = [
        'status' => 200,
        'message' => 'Record deleted succesfully!'
    ];
    echo json_encode($res);
    return;
}}

?>