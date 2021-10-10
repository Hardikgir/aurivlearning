<?php 
session_start();
include('../../include/config.inc.php');
//  echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit();

$user_id = $_POST['studentid'];
$change_status = $_POST['change_status'];
$action = $_POST['action'];

if($change_status == '1'){
    $statu_val = 'active';
}else{
    $statu_val = 'inactive';
}
$sql = "UPDATE `tbl_regusers` SET `status` = '".$statu_val."' WHERE `tbl_regusers`.`user_id` = ".$user_id; 
$result = mysqli_query($con,$sql);

if(!empty($result)){
    $data ['massage']= "Status Update Successfully";
    $data ['status'] = "1";
}
else{
    $data ['massage']= "Data not found";
    $data ['status'] = "1";
}

echo json_encode($data);

?>