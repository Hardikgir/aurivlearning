<?php include('include/config.inc.php');
	if(!function_exists('PasswordEncryption')){
		function PasswordEncryption($password){
			return md5(sha1($password));
		}
	}


	echo '<pre> POST :: ';
	print_r($_POST);
	echo '</pre>';
	// exit();


if( ((!empty($_POST['txtfname'])) && isset($_POST['txtfname'])) && ((!empty($_POST['txtemail'])) && isset($_POST['txtemail'])) && ((!empty($_POST['txtphone'])) && isset($_POST['txtphone'])) && ((!empty($_POST['txtpwd'])) && isset($_POST['txtpwd'])) && ((!empty($_POST['txtcnfmpwd'])) && isset($_POST['txtcnfmpwd'])) ){

	if( trim( $_POST['txtpwd'] ) != trim( $_POST['txtcnfmpwd'] ) ){
		header('Location:register.php?lmsg=Password not match.');
	}else{
		$cdate = date('Y-m-d H:i:s');
		$ip = $_SERVER['REMOTE_ADDR'];
		
		//Sign up details
		$studorparent	= trim($_POST['gpstudorparent']);
		$fname	= trim($_POST['txtfname']);	
		$email	= trim($_POST['txtemail']);	
		$phone	= trim($_POST['txtphone']);
		$wportelegramno	= trim($_POST['txtwportelegramno']);
		$pwd = trim($_POST['txtpwd']);

		$priceslab = trim($_POST['gpriceslab']);

		//Select Details
		$grade = trim($_POST['selgrade']);
		$age = trim($_POST['selage']);
		$subject = trim($_POST['selsubject']);
		$syllabus = trim($_POST['selsyllabus']);
		$activity = trim($_POST['selactivity']);
		$language = trim($_POST['selanguage']);
		$aboutyourequirement = trim($_POST['txtaboutyourequirement']);

		//Preferences
		$gender = trim($_POST['gender']);
		$preferencelanguage = trim($_POST['selpreferencelanguage']);
		$takendemominute = trim($_POST['txttakendemominute']);
		$additionalinformation = trim($_POST['txtadditionalinformation']);
		$preferredays = trim($_POST['gpreferredays']);
		$demotime = trim($_POST['txtdemotime']);
		$demodate = trim($_POST['txtdemodate']);

		$sql_select = "SELECT * FROM tbl_regusers WHERE email = '".$email."'";
		$check_cntrow = mysqli_query($con,$sql_select);		
		if( mysqli_num_rows($check_cntrow) > 0 ){			
			header('Location:register.php?lmsg=Email already registered.');
		}else {	
			$sql_insert = "INSERT INTO tbl_regusers(username,password,email,fname,gender,phone,wportelegramno,ip,status,utype,created_at) VALUES('".$email."','".PasswordEncryption($pwd)."','".$email."','".$fname."','".$gender."','".$phone."','".$wportelegramno."','".$ip."','inactive','".$studorparent."','".$cdate."')";

			mysqli_query($con,$sql_insert);
			$regid = mysqli_insert_id($con);
			
			$sql_insert2 = "INSERT INTO tbl_stud_preference_details(regid,grade,age,subject,syllabus,activity,language,aboutyourequirement,preferencelanguage,takendemominute,additionalinformation,preferredays,demotime,demodate,created_at) VALUES ('".$regid."','".$grade."','".$age."','".$subject."','".$syllabus."','".$activity."','".$language."','".$aboutyourequirement."','".$preferencelanguage."','".$takendemominute."','".$additionalinformation."','".$preferredays."','".$demotime."','".$demodate."','".$cdate."')";

			$to = $email;
			$subject =' Thank you for successfully registration...!';
			$headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= "From:" ."website@mrinvito.com";				
    		$email_body = '<html><head>
			           <title>Thank you for successfully registration...!</title>
			           </head>
			           <body>';
			$email_body .= '<h1>Hi ' . ucfirst($fname). ' !</h1>';
			 
			$email_body .= '<p style="font-size:16px;color:#000;">Thank you for successfully registration on our site. Please check on the link below to login your account <br/><a href="'.$siteurl.'" style="font-size: 16px;font-weight: 600;text-decoration: none;"> click here. </a></p>';
			$email_body .= "</body></html>";
			//if( (mysqli_query($con,$sql_insert2)) ){
			// if( (mysqli_query($con,$sql_insert2)) && (mail($to,$subject,$email_body,$headers)) ){			
			if(mysqli_query($con,$sql_insert2)){	
				
				$sql_payment_insert = "INSERT INTO `tbl_payment_master` (`student_id`, `amount`, `payment_mode`, `description`, `status`) VALUES (".$regid.", ".$priceslab.", 'paypal', 'Registration Fee', '3')"; 
				mysqli_query($con,$sql_payment_insert);
    			header('Location:login.php?lmsg=Thank you for successfully registration...!');    		    			
			}else {
				header('Location:register.php?lmsg=Something wrong.');
			}
		}
	}

}else{
	header('Location:register.php?lmsg=Something wrong.');
}

?>