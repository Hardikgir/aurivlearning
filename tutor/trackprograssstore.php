<?php session_start();
	include('../include/config.inc.php');

	$user_id = $_SESSION['usrid'];
	$select_date_val = $_POST['select_date'];
	$tutor_name_val = $_POST['tutor_name'];
	$student_name_val = $_POST['student_name'];
	$subject_val = $_POST['subject'];
	$score_val = $_POST['score'];
	$googledrive_link_val = $_POST['googledrive_link'];
	$feedback_val = $_POST['feedback'];

	$sql = "INSERT INTO `tbl_trackprogress`(`student_id`, `tutor_id`, `select_date`, `subject`, `score`, `googledrive`, `feedback`,`created_by`) VALUES ('$student_name_val','$tutor_name_val','$select_date_val','$subject_val','$score_val','$googledrive_link_val','$feedback_val',$user_id)";


    
	$result = mysqli_query($con,$sql);
	if($result == '1'){
        $data['message'] = 'Data Saved Successfully';
        $data['status'] = '1';
        // $data['query'] = $sql;
    }else{
        $data['message'] = 'Data is not Saved';
        $data['status'] = '0';
        // $data['query'] = $sql;
    }
echo json_encode($data);

?>