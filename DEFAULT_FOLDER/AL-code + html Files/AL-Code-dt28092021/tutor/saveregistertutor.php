<?php include('../include/config.inc.php');
	if(!function_exists('PasswordEncryption')){
		function PasswordEncryption($password){
			return md5(sha1($password));
		}
	}

if( ((!empty($_POST['txtfname'])) && isset($_POST['txtfname'])) && ((!empty($_POST['txtemailid'])) && isset($_POST['txtemailid'])) && ((!empty($_POST['txtphoneno'])) && isset($_POST['txtphoneno'])) && ((!empty($_POST['txtpwd'])) && isset($_POST['txtpwd'])) && ((!empty($_POST['txtcnfrmpwd'])) && isset($_POST['txtcnfrmpwd'])) ){

	if( trim( $_POST['txtpwd'] ) != trim( $_POST['txtcnfrmpwd'] ) ){
		header('Location:register.php?lmsg=Password not match.');
	}else{
		$cdate = date('Y-m-d H:i:s');
		$ip = $_SERVER['REMOTE_ADDR'];
		
		//Sign up details
		$studorparent	= 3;
		$fname	= trim($_POST['txtfname']);	
		$email	= trim($_POST['txtemailid']);	
		$phone	= trim($_POST['txtphoneno']);
		$wportelegramno	= trim($_POST['txtwportelegramno']);
		$pwd = trim($_POST['txtpwd']);
		
		$sql_select = "SELECT * FROM tbl_regusers WHERE email = '".$email."'";
		$check_cntrow = mysqli_query($con,$sql_select);		
		if( mysqli_num_rows($check_cntrow) > 0 ){			
			header('Location:register.php?lmsg=Email already registered.');
		}else {	
			$sql_insert = "INSERT INTO tbl_regusers(username,password,email,fname,phone,wportelegramno,ip,status,utype,created_at) VALUES('".$email."','".PasswordEncryption($pwd)."','".$email."','".$fname."','".$phone."','".$wportelegramno."','".$ip."','active','".$studorparent."','".$cdate."')";
			
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
			 
			$email_body .= '<p style="font-size:16px;color:#000;">Thank you for successfully tutor registration on our site. Please check on the link below to login your account <br/><a href="'.$siteurl.'" style="font-size: 16px;font-weight: 600;text-decoration: none;"> click here. </a></p>';
			$email_body .= "</body></html>";
			if( (mysqli_query($con,$sql_insert)) ){
			//if( (mysqli_query($con,$sql_insert)) && (mail($to,$subject,$email_body,$headers)) ){		
    			header('Location:index.php?lmsg=Thank you for successfully registration...!');    		    			
			}else {
				header('Location:register.php?lmsg=Something wrong.');
			}
		}
	}

}else{
	header('Location:register.php?lmsg=Something wrong.');
}

?>