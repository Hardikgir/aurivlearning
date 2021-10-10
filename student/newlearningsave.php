<?php session_start();
	include('../include/config.inc.php');

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // exit();

    $user_id = $_SESSION['usrid'];

    $name_val = $_POST['Name'];
    $grade_val = $_POST['Grade'];
    $subject_extracurricular_activity_val = $_POST['Subject/Extracurricular_Activity'];
    $language_val = $_POST['language'];
    $tutor_grade_val = $_POST['Tutor_Grade'];
    $gender_val = $_POST['gender'];
    $timing_val = $_POST['timing'];
    $any_request_or_information_val = $_POST['Any_request_or_Information'];
    $time_and_date_for_the_demo_val = $_POST['Time_and_date_for_the_demo'];
     

    $sql = "INSERT INTO  `new_learning_master`(`user_id`,`fname`, `grade`, `subject_extracurricular_ctivity`,`language`, `tutor_grade`, `tutor_gender`, `timing`, `req_information`, `time_and_date`) VALUES ('$user_id','$name_val','$grade_val','$subject_extracurricular_activity_val','$language_val','$tutor_grade_val','$gender_val','$timing_val','$any_request_or_information_val','$time_and_date_for_the_demo_val')";

    // echo '<pre>';
    // print_r($sql);
    // echo '</pre>';
    // exit();

    $result = mysqli_query($con,$sql);
    if($result == 1){
        header('Location: '.$baseUrl.'student/newlearning.php');
    }
    
    