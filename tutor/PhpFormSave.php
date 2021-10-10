<?php session_start();
	include('../include/config.inc.php');

	$user_id = $_SESSION['usrid'];

	$student_name_val = $_POST['student_name'];
	$student_email_val = $_POST['student_email'];
	$tutor_email_val = $_POST['tutor_email'];
	$tutor_name_val = $_POST['tutor_name'];
	$date_session_val = $_POST['date_session'];
	$totaltime_session_val = $_POST['totaltime_session'];
	$totalhours_session_val = $_POST['totalhours_session'];
	$taught_session_val = $_POST['taught_session'];
	$homework_val = $_POST['homework'];
	$notes_val = $_POST['notes'];
	$videolink_val = $_POST['videolink'];
	$googledrive_link_val = $_POST['googledrive_link'];
	$upcoming_class_val = $_POST['upcoming_class'];
	$next_scheduled_val = $_POST['next_scheduled'];
	$time_next_scheduled_val = $_POST['time_next_scheduled'];
	$general_assessment_val = $_POST['general_assessment'];

	if($_POST['Submit'] == 'Save'){
		$sql = "INSERT INTO `tutor_form_master`(`tutor_id`, `student_name`, `student_email`, `tutor_email`, `tutor_name`, `date_session`, `totaltime_session`, `totalhours_session`, `taught_session`, `homework`, `notes`, `videolink`, `googledrive_link`, `upcoming_class`, `next_scheduled`, `time_next_scheduled`, `general_assessment`) VALUES ('$user_id','$student_name_val','$student_email_val','$tutor_email_val','$tutor_name_val','$date_session_val','$totaltime_session_val','$totalhours_session_val','$taught_session_val','$homework_val','$notes_val','$videolink_val','$googledrive_link_val','$upcoming_class_val','$next_scheduled_val','$time_next_scheduled_val','$general_assessment_val')";
	}else{
		$id = $_POST['id'];
		$sql = "update tutor_form_master set student_name='$student_name_val',  student_email='$student_email_val',  tutor_email='$tutor_email_val',  tutor_name='$tutor_name_val',  date_session='$date_session_val',  totaltime_session='$totaltime_session_val',  totalhours_session='$totalhours_session_val',  taught_session='$taught_session_val',  homework='$homework_val',  notes='$notes_val',  videolink='$videolink_val',  googledrive_link='$googledrive_link_val',  upcoming_class='$upcoming_class_val',  notes='$notes_val',  next_scheduled='$next_scheduled_val',  time_next_scheduled='$time_next_scheduled_val',  general_assessment='$general_assessment_val' WHERE id = ".$id;
	}
	

	$result = mysqli_query($con,$sql);
	if($result == '1'){
		if($_POST['Submit'] == 'Save'){
			$_SESSION['usermsg'] = 1;
			header('Location:createform.php');		
		}else{
			$_SESSION['usermsg'] = 4;
			header('Location:forms.php');		
		}
	}else{
		if($_POST['Submit'] == 'Save'){
			$_SESSION['usermsg'] = 0;
			header('Location:createform.php');		
		}else{
			$_SESSION['usermsg'] = 5;
			header('Location:forms.php');		
		}
	}
?>