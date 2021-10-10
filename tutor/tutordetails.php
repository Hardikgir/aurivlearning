<?php 
session_start();
include('../include/config.inc.php');
$studentid = $_REQUEST['studentid'];

$sql = 'SELECT * from tutor_form_master WHERE id = '.$studentid;
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

// echo '<pre>';
// print_r($sql);
// echo '</pre>';
// //exit();

if(!empty($row)){
    $data['message'] = 'Data get Successfully';
    $data['status'] = '1';
    $data['result'] = $row;
}else{
    $data['message'] = 'Data not found';
    $data['status'] = '0';
    // $data['query'] = $sql;
}
echo json_encode($data);

?>