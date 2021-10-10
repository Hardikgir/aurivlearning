<?php session_start();
	include('../include/config.inc.php');	
	if( ( !isset($_SESSION['usrname']) || $_SESSION['usrname'] == '' ) && ( !isset($_SESSION['usrid']) || $_SESSION['usrid'] == '' ) ){
        header( 'location:'. $baseUrl );
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Auriv Learning | Tutor | Support </title>  
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
										<h3 class="mb-0 page-title">Support</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="side-content pt-3 pb-0">
							<div class="wizard theme-shadow bg-white p-4 rounded">
								<form>
				        			<div class="row">
					                  <div class="col-md-6 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">Name</h6>
					                        <input type="text" class="form-control" placeholder="Bhavin Jekson">
					                      </div>
					                  </div>
					                  <div class="col-md-6 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">Email</h6>
					                        <input type="email" class="form-control" placeholder="xyz@gmail.com">
					                      </div>
					                  </div>
					                  <div class="col-md-6 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">Phone number</h6>
					                        <input type="text" class="form-control" placeholder="+ 91 78945 78956">
					                      </div>
					                  </div>
					                  <div class="col-md-12 mb-2">
					                      <div class="form-group">
					                      	<h6 class="font-weight-bold mb-2">Add message </h6>
					                        <textarea rows="3" class="form-control" placeholder="Write Your Message"></textarea>
					                      </div>
					                  </div>
					                  <div class="col-md-12">
					                  	<div class="form-group mb-0">
					                  		<input type="submit" value="Submit" class="login-btn font-weight-bold	 border-0" required>
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

	</body>
</html>