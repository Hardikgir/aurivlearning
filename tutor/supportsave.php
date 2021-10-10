<?php 

session_start();
include('../include/config.inc.php');

$user_id = $_SESSION['usrid'];
$usrtype = $_SESSION['usrtype'];

$fname_value = $_POST['fname'];
$email_value = $_POST['email'];
$phone_value = $_POST['phone'];
$message_value = $_POST['message'];

$student_support_sql = "INSERT INTO `support_master` (`user_id`,`utype`, `fname`, `email`, `phone`, `message`) VALUES ($user_id,'$usrtype', '$fname_value', '$email_value', '$phone_value', '$message_value')";

// echo '<pre>';
// print_r($usrtype );
// echo '</pre>';
// exit();

$result_profile = mysqli_query($con,$student_support_sql);
if($result_profile == '1'){
    header('Location: '.$baseUrl.'tutor/support.php');    
}

?>