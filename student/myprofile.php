<?php session_start();
	include('../include/config.inc.php');	
	if( ( !isset($_SESSION['usrname']) || $_SESSION['usrname'] == '' ) && ( !isset($_SESSION['usrid']) || $_SESSION['usrid'] == '' ) ){
        header( 'location:'. $baseUrl );
    }

	// echo '<pre>';
	// print_r($_SESSION);
	// echo '</pre>';
	// exit();

	// echo '<pre>';
	// print_r($_SESSION['usrid']);
	// echo '</pre>';
	// exit();
	$user_id = $_SESSION['usrid'];
	$sql = "SELECT * FROM `tbl_regusers` where user_id = ".$user_id;
	$sql = 'SELECT tbl_stud_preference_details.*, tbl_regusers.* FROM tbl_stud_preference_details INNER JOIN tbl_regusers ON tbl_stud_preference_details.regid=tbl_regusers.user_id WHERE tbl_regusers.user_id = '.$user_id;
	// echo $sql;
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);



	// echo '<pre> row :- ';
	// print_r($row);
	// echo '</pre>';
	// exit();
	$profile_img = $baseUrl.'Profile_image/dummy_profile.png';
	if(!empty($row['profileimg'])){
		$profile_img = $baseUrl."Profile_image/".$row['profileimg'];
	}
	// echo $profile_img;
	//$wportelegramno_val = $row['wportelegramno'];


	


?>
<!DOCTYPE html>
<html>
	<head>
		<title> Auriv Learning | Student | My Profile </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">  
		<!-- bootstarp -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<script src="../js/jquery.min.js"></script>
		<script src="../js/popper.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/wow.min.js"></script>
		<script src="../js/jquery.matchHeight-min.js"></script>
		<!-- owl carousel -->  
		<link rel="stylesheet" href="../css/owl.carousel.min.css">
		<link rel="stylesheet" href="../css/owl.theme.default.min.css">
		<script src="../js/owl.carousel.js"></script>
		<!-- custom js -->
		<!-- custom css -->
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/responsive.css">
		<link rel="stylesheet" href="../css/animate.css">
		<!-- fonts -->
		<script src="../js/font-awesome-5-pro.js"></script>
	</head>

	<body>
		<?php include('stud.header.php');?>		
		<section class="pt-0 pb-5">
			<div class="container">
				<?php if(isset($_REQUEST['lmsg']) && !empty($_REQUEST['lmsg'])){ ?>										
						<h5 class="text-center text-uppercase sec-color"> <?='**'.$_REQUEST['lmsg'];?> </h5>
					<?php } ?>
				<div class="row">					
					<div class="col-xl-3">
						<?php include('stud.sidebar.php');?>
					</div>
					<div class="col-xl-9">
						<div class="content-title">
							<div class="row align-items-center position-relative mt-lg-5">
								<div class="col-md-6 col-9 mb-3">
									<div class="d-flex align-items-center">
										<button type="button" id="sidebarCollapse" class="btn btn-primary d-xl-none mr-3">
											<i class="fa fa-bars"></i>
										</button>
										<h3 class="mb-0 page-title">My Profile</h3>
									</div>
								</div>
							</div>
						</div>
						<?php 
							if(isset($_SESSION['usermsg'])){
								if($_SESSION['usermsg'] == '1'){
									echo '<div class="alert alert-success" id="UserAcknowledgementMSG" role="alert">Your Profile is Update Successfully...</div>';
									unset($_SESSION['usermsg']);
								}else{
									echo '<div class="alert alert-danger" id="UserAcknowledgementMSG" role="alert">Your Profile is Not Update. Please Try Again...!</div>';
									unset($_SESSION['usermsg']);
								}
							}	
							?>
						<div class="side-content pt-3 pb-0">
							<div class="wizard theme-shadow bg-white p-4 rounded">
								<form method="post" action="myprofileupdate.php" enctype="multipart/form-data">
					        		<div class="row">
					                	<div class="col-md-12 mb-2">
					                      	<div class="form-group">
					                      		<h6 class="mb-4">Having an authentic looking profile picture increases your chances of getting quick responsesfrom Tutors & Institutes.</h6>
					                      	</div>
					                  	</div>
				                  		<div class="profile-pic col-md-12 mb-2">
				                      		<div class="circle mb-3">
												<div class="profile-img position-relative">
													<img class="user-profile" src="<?php echo $profile_img; ?>">
													<div class="p-image">
												      	<i class="fal fa-plus upload-button"></i>
												     	<input class="file-upload" name="profile_img" type="file" accept="image/*"/>
												    </div>
												</div>
											</div>
										</div>
						                <div class="col-md-6 mb-2">
					                      	<div class="form-group">
					                      		<h6 class="font-weight-bold mb-2">Name</h6>
					                         	<input type="text" class="form-control" name="fname" value="<?php if(!empty($row['fname'])) {echo $row['fname'];} ?>" placeholder="Bhavin Jekson" />
					                      	</div>
						                </div>
										<div class="col-md-6 mb-2">
										  	<div class="form-group">
										  		<h6 class="font-weight-bold mb-2">Email</h6>
										     	<input type="email" class="form-control" name="email" value="<?php if(!empty($row['email'])) {echo $row['email'];} ?>"  placeholder="xyz@gmail.com">
										  	</div>
										</div>
										<div class="col-md-6 mb-2">
										  	<div class="form-group">
										  		<h6 class="font-weight-bold mb-2">Phone number</h6>
										     	<input type="text" class="form-control" name="phone" value="<?php if(!empty($row['phone'])) {echo $row['phone'];} ?>" placeholder="Phone number">
										  	</div>
										</div>
										<div class="col-md-6 mb-2">
										  	<div class="form-group">
										  		<h6 class="font-weight-bold mb-2">Whatsapp/telegram number </h6>
										     	<input type="text" class="form-control" name="wportelegramno" value="<?php if(!empty($row['wportelegramno'])) {echo $row['wportelegramno'];} ?>" placeholder="Whatsapp/telegram number">
										  	</div>
										</div>
				                  		<div class="col-md-12">
				                  			<div class="form-group">
				                    			<h6 class="font-weight-bold mb-4">Gender</h6>
				                        		<div class="theme-radio radio-inline">
							      					<input type="radio" id="Male" name="gender" value="1" <?php if(!empty($row['gender'])) if($row['gender'] == "1"){ echo "checked"; } ?> >
													<label for="Male" class="text-uppercase">Male</label>
											    </div>
											    <div class="theme-radio radio-inline ml-2">
											      	<input type="radio" id="Female" name="gender" value="2" <?php if(!empty($row['gender'])) if($row['gender'] == "2"){ echo "checked"; } ?> >
													<label for="Female" class="text-uppercase">Female</label>
											    </div>
											    <div class="theme-radio radio-inline ml-2">
											      	<input type="radio" id="Other" name="gender" value="3" <?php if(!empty($row['gender'])) if($row['gender'] == "3"){ echo "checked"; } ?> >
													<label for="Other" class="text-uppercase">Other</label>
									    		</div>
											</div>
				                  		</div>
										<div class="col-md-6 mb-2">
										  	<div class="form-group">
										  		<h6 class="font-weight-bold mb-2">Grade</h6>
												  <select class="form-control" name="selgrade">
						                                            	<option value=""> <?php if(!empty($row['grade'])) if($row['grade'] == ""){ echo "selected"; }?> Select Grade </option>
						                                            	<option value="1" <?php if(!empty($row['grade'])) if($row['grade'] == "1"){ echo "selected"; }?>  >A </option>
						                                            	<option value="2" <?php if(!empty($row['grade'])) if($row['grade'] == "2"){ echo "selected"; }?> > B </option>
						                                            	<option value="3" <?php if(!empty($row['grade'])) if($row['grade'] == "3"){ echo "selected"; }?> > C </option>
						                                            </select>
										  	</div>
										</div>
										<div class="col-md-6 mb-2">
										  	<div class="form-group">
										  		<h6 class="font-weight-bold mb-2">Syllabus</h6>
										     	<input type="text" class="form-control" name="syllabus" value="<?php if(!empty($row['syllabus']))  {echo $row['syllabus'];} ?>" placeholder="Maths">
										  	</div>
										</div>
										<div class="col-md-6 mb-2">
										  	<div class="form-group">
										  		<h6 class="font-weight-bold mb-2">Preferred Language</h6>
										     	<input type="text" class="form-control" name="preferencelanguage" value="<?php if(!empty($row['preferencelanguage'])) {echo $row['preferencelanguage'];} ?>" placeholder="English">
										  </div>
										</div>
										<div class="col-md-6 mb-2">
										  	<div class="form-group">
										  		<h6 class="font-weight-bold mb-2">Parent Name</h6>
										     	<input type="text" class="form-control" name="parent_name"  value="<?php if(!empty($row['parent_name'])) {echo $row['parent_name'];} ?>"  placeholder="Parent Name">
										  	</div>
										</div>
										<div class="col-md-6 mb-2">
										  	<div class="form-group">
										  		<h6 class="font-weight-bold mb-2">Parent Email</h6>
										     	<input type="text" class="form-control" name="parent_email"  value="<?php if(!empty($row['parent_email'])) {echo $row['parent_email'];} ?>"  placeholder="Parent Email">
										  	</div>
										</div>
										<div class="col-md-6 mb-2">
										 	<div class="form-group">
										  		<h6 class="font-weight-bold mb-2">Location</h6>
										     	<input type="text" class="form-control" name="location"  value="<?php if(!empty($row['location'])) {echo $row['location'];} ?>" placeholder="Location">
										  	</div>
										</div>
										<div class="col-md-6 mb-2">
										  	<div class="form-group">
										  		<h6 class="font-weight-bold mb-2">School / College</h6>
										     	<input type="text" class="form-control" name="school_college"  value="<?php if(!empty($row['school_college'])) {echo $row['school_college'];} ?>" placeholder="School / College">
										  	</div>
										</div>
										<div class="col-md-6 mb-2">
										  	<div class="form-group">
										  		<h6 class="font-weight-bold mb-2">Location of School / College</h6>
										     	<input type="text" class="form-control" name="location_of_school_college"  value="<?php if(!empty($row['location_of_school_college'])) {echo $row['location_of_school_college'];} ?>"  placeholder="Location of School / College">
										  	</div>
										</div>
										<div class="col-md-12">
											<div class="form-group mb-0">
												<input type="submit" value="submit" name="submit" class="login-btn font-weight-bold	 border-0" required>
											</div>
										</div>
				            		</div>
						        </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php include('../include/footer.inc.php'); ?>

  		<script src="../js/custom.js"></script>
		  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
			<script type="text/javascript"> 
			$(document).ready( function() {
				$('#UserAcknowledgementMSG').delay(3000).fadeOut();
			});
		</script>

	</body>
</html>