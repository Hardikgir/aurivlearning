<?php session_start(); 
	include('include/config.inc.php');
	$user_name=$_POST["txtemailid"];
	$password=$_POST["txtpwd"];
	function PasswordEncryption($password){
		return md5(sha1($password));
	}

	$sql = "SELECT * FROM tbl_regusers WHERE email='$user_name' AND password='".PasswordEncryption($password)."' LIMIT 1";
	$reslogin=mysqli_query($con,$sql);
	if(mysqli_num_rows($reslogin)>0){
		
		$row=mysqli_fetch_array($reslogin);

		
		if($row['status'] == 'inactive'){
			$_SESSION['usermsg'] = 1;
			header('Location:login.php');
			exit("asdasdasdasd");
		}
		


		$_SESSION['usrname']=$row['fname'];
		$_SESSION['usremail']=$row['email'];
		$_SESSION['usrid']=$row['user_id'];
		$_SESSION['usrtype']=$row['utype'];
		$_SESSION['location'] = $row['location'];
		$_SESSION['user_profile'] = $row['profileimg'];
		$cdate = date('Y-m-d H:i:s');
		$lastip = $_SERVER['REMOTE_ADDR'];
		$updatelogin = "UPDATE tbl_regusers SET last_login = '".$cdate."' ,last_ip = '".$lastip."' WHERE user_id = ".$_SESSION['usrid'];
		if(mysqli_query($con,$updatelogin)){				 
			$_SESSION['usermsg'] = 1;
			header('Location:student/myprofile.php');						
		}else{
			$_SESSION['usermsg'] = 2;
			header('Location:login.php');
		}    
  	} else{
		$_SESSION['usermsg'] = 3;
		header('Location:login.php');
	} 
?>