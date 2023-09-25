<?php 
if(isset($_GET['id']))
{
     $sql = "DELETE FROM wp_cab WHERE id=".$_GET['id'];
     $query = $wpdb->query($sql);

if ($query === false) {
    echo "Error: " . $sql . "<br>" . esc_sql($wpdb->last_error);
} else {
    echo 'Deleted successfully.';;
}
	
}

?>