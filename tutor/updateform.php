<?php session_start();
	include('../include/config.inc.php');	
	if( ( !isset($_SESSION['usrname']) || $_SESSION['usrname'] == '' ) && ( !isset($_SESSION['usrid']) || $_SESSION['usrid'] == '' ) ){
        header( 'location:'. $baseUrl );
    }
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
// exit();

?>
<!DOCTYPE html>
<html>
	<head>
		<title> Auriv Learning | Tutor | Create New Form </title>		
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

		<?php include( 'tutor.header.php');?>

		<section class="pt-0 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-xl-3">
						<?php include('sidebar.php');?>
					</div>
					<div class="col-xl-9">
						<div class="content-title">
							<div class="row align-items-center position-relative mt-lg-5">
								<div class="col-md-6 col-9 mb-3">
									<div class="d-flex align-items-center">
										<button type="button" id="sidebarCollapse" class="btn btn-primary d-xl-none mr-3">
											<i class="fa fa-bars"></i>
										</button>
										<h3 class="mb-0 page-title">Update Form </h3>
									</div>
								</div>
							</div>
						</div>
						
						<div class="side-content pt-3 pb-0">
							<?php 

                            echo '<pre>';
                            print_r($_GET);
                            echo '</pre>';
                            $id = $_GET['id'];
                            $user_id = $_SESSION['usrid'];
	                        $sql = "SELECT * FROM `tutor_form_master` where tutor_id = ".$user_id." AND id = ".$id." AND status = '
                            1' ";
                            $result = mysqli_query($con,$sql);
                            $row = mysqli_fetch_assoc($result);                          
                            echo '<pre>';
                            print_r($row);
                            echo '</pre>';
                            // exit();
							?>
							<div class="wizard theme-shadow bg-white p-4 rounded">
								<form action="PhpFormSave.php" method="post">
				        			<div class="row">
					                  <div class="col-lg-4 col-md-6 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">Student Name* </h6>
					                        <input type="text" class="form-control" name="student_name" value="<?php echo $row['student_name']; ?>" placeholder="Enter Student Name" required>
					                      </div>
					                  </div>
					                  <div class="col-lg-4 col-md-6 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">Student Email*</h6>
					                        <input type="email" class="form-control" name="student_email" value="<?php echo $row['student_email']; ?>" placeholder="Enter Student Email" required>
					                      </div>
					                  </div>
					                  <div class="col-lg-4 col-md-6 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">Tutor Email* </h6>
					                        <input type="email" class="form-control" name="tutor_email" value="<?php echo $row['tutor_email']; ?>" placeholder="Enter Tutor Email" required>
					                      </div>
					                  </div>
					                  <div class="col-lg-4 col-md-6 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">Tutor Name </h6>
					                        <input type="text" class="form-control" name="tutor_name" value="<?php echo $row['tutor_name']; ?>" placeholder="Enter Tutor Name">
					                      </div>
					                  </div>
					                  <div class="col-lg-4 col-md-6 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">Date of Session*</h6>
					                        <input type="date" class="form-control" value="<?php echo $row['date_session']; ?>" name="date_session" required>
					                      </div>
					                  </div>
					                  <div class="col-lg-4 col-md-6 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">Total time duration of the Session* </h6>
					                        <input type="text" class="form-control" value="<?php echo $row['totaltime_session']; ?>" name="totaltime_session" required>
					                      </div>
					                  </div>
					                  <div class="col-lg-4 col-md-6 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">Total Hours of sessions done till date*</h6>
					                        <input type="text" class="form-control" value="<?php echo $row['totalhours_session']; ?>" name="totalhours_session" required>
					                      </div>
					                  </div>
					                  <div class="col-lg-8 col-md-6 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">What was taught in the session</h6>
					                        <input type="text" class="form-control" value="<?php echo $row['taught_session']; ?>" name="taught_session" placeholder="">
					                      </div>
					                  </div>
					                  <div class="col-lg-12 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">Homework or Assignment</h6>
					                        <input type="text" class="form-control" value="<?php echo $row['homework']; ?>" name="homework" placeholder="">
					                      </div>
					                  </div>
					                  <div class="col-lg-12 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">Notes</h6>
					                        <textarea class="form-control" name="notes" ><?php echo $row['notes']; ?></textarea>
					                      </div>
					                  </div>
					                  <div class="col-md-6 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">Video link of the class recording</h6>
					                        <input type="url" class="form-control" value="<?php echo $row['videolink']; ?>" name="videolink" placeholder="">
					                      </div>
					                  </div>
					                  <div class="col-md-6 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">Google drive link</h6>
					                        <input type="url" class="form-control" value="<?php echo $row['googledrive_link']; ?>" name="googledrive_link" placeholder="">
					                      </div>
					                  </div>
					                  <div class="col-md-6 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">What is scheduled for the upcoming class</h6>
					                        <input type="text" class="form-control" value="<?php echo $row['upcoming_class']; ?>" name="upcoming_class" placeholder="">
					                      </div>
					                  </div>
					                  <div class="col-md-6 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">Date for the next scheduled session*</h6>
					                        <input type="date" class="form-control" value="<?php echo $row['next_scheduled']; ?>" name="next_scheduled" required>
					                      </div>
					                  </div>
					                  <div class="col-md-12 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">Time slot for the next scheduled session*</h6>
					                        <input type="time" class="form-control" value="<?php echo $row['time_next_scheduled']; ?>" name="time_next_scheduled" required>
					                      </div>
					                  </div>
					                  <div class="col-md-12 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">General Assessment or Information about the student</h6>
					                        <input type="text" class="form-control" value="<?php echo $row['general_assessment']; ?>" name="general_assessment" placeholder="">
					                      </div>
					                  </div>
					                  <div class="col-md-12">
					                  	<div class="form-group mb-0">
                                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					                  		<input type="submit" name="Submit" value="Update" class="login-btn font-weight-bold	 border-0" required>
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

		<?php include('../include/footer.inc.php');?>


		<script src="../js/custom.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
			<script type="text/javascript"> 
			$(document).ready( function() {
				$('#UserAcknowledgementMSG').delay(3000).fadeOut();
			});
		</script>

	</body>
</html>