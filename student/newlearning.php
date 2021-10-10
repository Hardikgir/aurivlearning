<?php session_start();
	include('../include/config.inc.php');	
	if( ( !isset($_SESSION['usrname']) || $_SESSION['usrname'] == '' ) && ( !isset($_SESSION['usrid']) || $_SESSION['usrid'] == '' ) ){
        header( 'location:'. $baseUrl );
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Auriv Learning | Student | New Learning </title>
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
										<h3 class="mb-0 page-title">Post-New Learning Requirement</h3>
									</div>
								</div>
								<div class="col-md-6 col-3 mb-3 text-right">
									<a href="#" class="filter-btn"><i class="fas fa-filter"></i></a>
								</div>
							</div>
						</div>
						<div class="side-content pt-3 pb-0">
							<div class="wizard theme-shadow bg-white p-4 rounded">
								<form action="newlearningsave.php" method="post">
				        	<div class="row mb-3">
		                <div class="col-md-6">
		                    <div class="form-group">
		                    	<h6 class="font-weight-bold mb-3">Name</h6>
		                       	<input type="text" class="form-control" name="Name" nam placeholder="Name">
		                    </div>
		                </div>
		                <div class="col-md-6">
		                    <div class="form-group">
		                    	<h6 class="font-weight-bold mb-3">Grade</h6>
		                       	<input type="text" class="form-control" name = "Grade" placeholder="Select Preferences:">
		                    </div>
		                </div>
		                <div class="col-md-12">
		                    <div class="form-group">
		                    	<h6 class="font-weight-bold mb-3">Subject/Extracurricular Activity:</h6>
		                       	<input type="text" class="form-control" name="Subject/Extracurricular_Activity" placeholder="Subject/Extracurricular Activity:">
		                    </div>
		                </div>
		                <div class="col-md-6">
		                	<div class="form-group">
		                  		<h6 class="font-weight-bold mb-3">Language:</h6>
		                      <select class="form-control" name="language">
		                      	<option>Select Language</option>
		                      	<option>English</option>
		                      	<option>Hindi</option>
		                      	<option>Urdu</option>
		                      </select>
		                  </div>
		                </div>
		                <div class="col-md-6">
		                	<div class="form-group">
		                  	<h6 class="font-weight-bold mb-4">Tutor Grade</h6>
		                  	<div class="theme-radio radio-inline">
						      				<input type="radio" id="Silver" name="Tutor_Grade" value="1" required checked="">
													<label for="Silver" class="text-uppercase">Silver</label>
										    </div>
										    <div class="theme-radio radio-inline ml-2">
										      	<input type="radio" id="Gold" name="Tutor_Grade" value="2">
														<label for="Gold" class="text-uppercase">Gold</label>
										    </div>
										    <div class="theme-radio radio-inline ml-2">
										      	<input type="radio" id="Platinum" name="Tutor_Grade" value="3">
														<label for="Platinum" class="text-uppercase">Platinum</label>
								    		</div>
											</div>
		                </div>
		                <div class="col-md-6">
		                	<div class="form-group">
		                  	<h6 class="font-weight-bold mb-4">Tutor Gender</h6>
		                      <div class="theme-radio radio-inline">
								      			<input type="radio" id="Male" name="gender" value="1" required checked="">
														<label for="Male" class="text-uppercase">Male</label>
												    </div>
												    <div class="theme-radio radio-inline ml-2">
												      	<input type="radio" id="Female" name="gender" value="2">
														<label for="Female" class="text-uppercase">Female</label>
												    </div>
												    <div class="theme-radio radio-inline ml-2">
												      	<input type="radio" id="Other" name="gender" value="3">
														<label for="Other" class="text-uppercase">Other</label>
										    </div>
											</div>
		                </div>
		                <div class="col-md-6">
					              <div class="form-group">
					                  <h6 class="font-weight-bold mb-4">Timing*</h6>
					                  <div class="theme-radio radio-inline">
												      	<input type="radio" id="weekdays" name="timing" value="1" required checked="">
															<label for="weekdays" class="text-uppercase">weekdays</label>
												    </div>
												    <div class="theme-radio radio-inline ml-2">
												      	<input type="radio" id="weekends" name="timing" value="2">
														<label for="weekends" class="text-uppercase">weekends</label>
												    </div>
												    <div class="theme-radio radio-inline ml-2">
												      	<input type="radio" id="tany" name="timing" value="3">
														<label for="tany" class="text-uppercase">All</label>
												    </div>
												</div>
		                </div>
		                <div class="col-md-12">
		                    <div class="form-group">
		                    	<h6 class="font-weight-bold mb-3">Any request or Information</h6>
		                       	<textarea class="form-control" rows="5" name="Any_request_or_Information" placeholder="Any request or Information"></textarea>
		                    </div>
		                </div>
		                <div class="col-md-12">
		                	<h6 class="font-weight-bold mb-3">Time and date for the demo.</h6>
		                </div>
		                <div class="col-md-6">
		                	<div class="form-group">
		                		<input type="time" name="Time_and_date_for_the_demo" class="form-control position-relative" >
		                	</div>
		                </div>
		                <div class="col-md-6">
		                	<div class="form-group">
		                		<input type="date" name="Time_and_date_for_the_demo" class="form-control position-relative" >
		                	</div>
		                </div>
		                <div class="col-md-12">
		                	<div class="form-group mb-0">
		                		<input type="submit" value="Save" class="login-btn font-weight-bold	 border-0" required>
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

	</body>
</html>