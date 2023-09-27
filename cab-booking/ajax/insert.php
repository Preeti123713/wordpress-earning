<?php
include( '../../../../wp-config.php' );
global $wpdb;
global $table_prefix;
$nameErr = $emailErr = $megErr = $capErr = $datetimeErr= "";
$name = $_POST["username"]; 
if (empty ($name)) {  
  echo   $nameErr = "Error! You didn't enter the Name.";  
}elseif(!preg_match ("/^[a-zA-z]*$/", $name) ) {  
  $nameErr = "Only alphabets and whitespace are allowed.";  
}else {  
   $name; 
} 
// print_r($_POST['username']); die;
$email = $_POST ["useremail"];  
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $email) ){  
    $emailErr = "Email is not valid.";  
     $emailErr;  
} else {  
    $email;  
}   

if(empty($_POST['cab'])){
   $capErr = "You must select a cab";
}else{
    $cabs = $_POST[ 'cab' ];
}
// $datetime_input = $_POST['datetime'];

// Define the date and time format you expect (e.g., 'Y-m-d H:i:s' for YYYY-MM-DD HH:MM:SS)
// $date_format = 'Y-m-d H:i:s';

// // Create a DateTime object and check if it's valid
// $datetime = DateTime::createFromFormat($date_format, $datetime_input);

// if ($datetime && $datetime->format($date_format) === $datetime_input) {
//     // Valid date and time
//     echo "Date and time is valid: " . $datetime->format($date_format);
// } else {
//     // Invalid date and time
//     $datetimeErr =  "Invalid date and time input";
// }

$datetime = date( 'Y-m-d H:i:s', strtotime( str_replace( '-', '/', $_POST[ 'datetime' ] ) ) );


if (trim($_POST['message']) == "") {
  echo  $megErr= "Please enter a message";
}else{
    $message  = $_POST[ 'message' ];
}
    
    

$table = $table_prefix.'cab';
// Use 'prefix' instead of 'table_prefix'
$sql = "INSERT INTO $table (name,email,cabs,datetime,message) values ('$name','$email','$cabs','$datetime','$message')";
$query = $wpdb->query($sql);
// print_r($query); die;
if ($query === false) {
    echo "Error: " . $sql . "<br>" . esc_sql($wpdb->last_error); 
    $res = [
        'status' => 500,
        'message' => 'Record is not Created'
    ];
    echo json_encode($res);
    return;
}else{
    $res = [
        'status' => 200,
        'message' => 'Record is Created'
    ];
    echo json_encode($res);
    return;
    $to=$_POST['useremail']; //change to ur mail address
$strSubject="Tutorialswebsite | Email | $name";
$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to testing</title> 
    </head> 
    <body> 
        <h1>Thanks you for joining with us!</h1> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Name:</th><td>testing</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Email:</th><td>contact@testing.com</td> 
            </tr> 
            <tr> 
                <th>Website:</th><td><a href="http://www.codexworld.com">www.codexworld.com</a></td> 
            </tr> 
        </table> 
    </body> 
    </html>'; 
$htmladmin = ' 
    <html> 
    <head> 
        <title>Welcome to admin profile</title> 
    </head> 
    <body> 
        <h1>Thanks you for joining with us!</h1> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Name:</th><td>admin</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Email:</th><td>contact@testing.com</td> 
            </tr> 
            <tr> 
                <th>Website:</th><td><a href="http://www.codexworld.com">www.codexworld.com</a></td> 
            </tr> 
        </table> 
    </body> 
    </html>'; 
// $message=str_replace('{{firstname}}', $firstname, $message);

$headers = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .= "Bcc: pradeepku041@gmail.com\r\n";
$headers .= "From: info@tutorials.com";

$mail_sent=mail($to,$strSubject,$htmladmin, $headers); 
if($mail_sent){
echo "<script>alert('Thank you. we will get back to you'); window.location='index.php';exit();</script>";
}else{
echo "<script>alert('Sorry.Request not send'); window.location='index.php';exit();</script>";
}
$admin = get_option( 'admin_email' );
$headers = 'From: nriya5892@gmail.com';
mail( $admin, $subject, $htmlContent, $headers );

}
// update the data into database 
