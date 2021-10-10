<?php session_start();
	include('../include/config.inc.php');
    
     $id = $_GET['id'];
    //  $sql = "DELETE FROM tutor_form_master WHERE id=" .$id;

     $sql = "UPDATE tutor_form_master SET status='0' WHERE id=" .$id;
     $result = mysqli_query($con,$sql);

     if($result){
        $_SESSION['usermsg'] = 1;
		header('Location:forms.php');	
     }else{
        $_SESSION['usermsg'] = 1;
		header('Location:forms.php');	
     }



     
     













?>    