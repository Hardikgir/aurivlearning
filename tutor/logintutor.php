<?php session_start(); 
	include('../include/config.inc.php');
	$user_name=$_POST["txtemailid"];
	$password=$_POST["txtpwd"];
	function PasswordEncryption($password){
		return md5(sha1($password));
	}

	$sql = "SELECT * FROM tbl_regusers WHERE email='$user_name' AND utype='3' AND password='".PasswordEncryption($password)."' AND status = 'active' LIMIT 1";
	$reslogin=mysqli_query($con,$sql);
	if(mysqli_num_rows($reslogin)>0){	    
     	$row=mysqli_fetch_array($reslogin);

		//  echo '<pre>';
		//  print_r($row);
		//  echo '</pre>';
		// //  exit();

		// $_SESSION['usrname']=$row[1];
		// $_SESSION['usremail']=$row[3];
		// $_SESSION['usrid']=$row[0];
		// $_SESSION['usrtype']=$row[21];

		$_SESSION['usrname']=$row['fname'];
		$_SESSION['usremail']=$row['email'];
		$_SESSION['usrid']=$row['user_id'];
		$_SESSION['usrtype']=$row['utype'];

		//$_SESSION['startssn'] = time();
		//$sexpmint = 10;// 10 minute 
		//$_SESSION['expiressn'] = $_SESSION['startssn'] + ($sexpmint * 60); // 60 seconds (1 minute) * 20 = 20 minutes			
		$cdate = date('Y-m-d H:i:s');
		$lastip = $_SERVER['REMOTE_ADDR'];
		$updatelogin = "UPDATE tbl_regusers SET last_login = '".$cdate."' ,last_ip = '".$lastip."' WHERE user_id = ".$_SESSION['usrid'];
		if(mysqli_query($con,$updatelogin)){				 
			header('Location:myprofile.php?lmsg=Welcome to login successfully here.');						
		}else{
			header('Location:index.php?lmsg=Email Id or password wrong.');
		}    
  	} else{
		header('Location:index.php?lmsg=Email Id or password wrong.');
	} 
?>