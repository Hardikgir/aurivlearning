<?php session_start();
	include('../include/config.inc.php');	
	if( ( !isset($_SESSION['usrname']) || $_SESSION['usrname'] == '' ) && ( !isset($_SESSION['usrid']) || $_SESSION['usrid'] == '' ) ){
        header( 'location:'. $baseUrl );
    }
	// echo '<pre>';
	// print_r($_SESSION);
	// echo '</pre>';
	// exit();

    $user_id = $_SESSION['usrid'];
	
	
	// echo '<pre>';
	// print_r($row);
	// echo '</pre>';
	// exit();


?>
<!DOCTYPE html>
<html>
	<head>
		<title> Auriv Learning | Student | Classes Summary </title>		
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
										<h3 class="mb-0 page-title">Classes Summary</h3>
									</div>
								</div>
								<div class="col-md-6 col-3 mb-3 text-right">
									<a href="#" class="filter-btn"><i class="fas fa-filter"></i></a>
								</div>
							</div>
						</div>
						<div class="side-content pt-3 pb-0">
							<div class="wizard">
								<form>
									<div class="row">
										<div class="col-lg-4 col-md-5 mb-1">
											<div class="form-group d-flex align-items-center">
													<h6 class="mb-0 mr-2 font-weight-bold">From</h6>
				                  <input type="date" class="form-control" name="from">
				              </div>
				            </div>
				            <div class="col-lg-4 col-md-5 mb-1">
				              <div class="form-group d-flex align-items-center">
													<h6 class="mb-0 mr-2 font-weight-bold">To</h6>
				                  <input type="date" class="form-control" name="to">
				              </div>
										</div>
										<div class="col-lg-4 col-md-2 mb-4">
				              <div class="form-group d-flex align-items-center justify-content-center justify-content-md-start">
													<input type="submit" value="search" class="login-btn font-weight-bold border-0">
				              </div>
										</div>
									</div>
								</form>
							</div>
							<?php 
							$sql = "SELECT * FROM tbl_trackprogress WHERE student_id=" .$user_id;
							// echo $sql ;
							$result = mysqli_query($con,$sql);
								$total_class = 0;
							if(mysqli_affected_rows($con)>0){
								$totalclass = mysqli_affected_rows($con);
							}	
							// $totalclass = mysqli_affected_rows($con);
							// echo '<pre> asdsads';
							// print_r(mysqli_affected_rows($con));
							// echo '</pre>';
							// exit();
							?>
							
							<div class="row">
								<div class="col-lg-4 col-md-6 mb-4">
									<div class="class-box">
										<div class="class-title">
											<div class="class-count">A</div>
											<h6 class="mb-0">Total Classes</h6>
										</div>
										<div class="class-content">
											<h3 class="mb-0"><?php echo $totalclass; ?></h3>
										</div>
									</div>
								</div>
								<?php 
								while($row = mysqli_fetch_assoc($result) ){ ?>
								
								
								<div class="col-lg-4 col-md-6 mb-4">
									<div class="class-box">
										<div class="class-title">
											<div class="class-count">B</div>
											<h6 class="mb-0"><?php echo $row['subject'] ?> </h6>
										</div>
										<div class="class-content">
											<h3 class="mb-0"><?php echo $row['score']; ?></h3>
										</div>
									</div>
								</div>
								<?php } ?>
								<!-- <div class="col-lg-4 col-md-6 mb-4">
									<div class="class-box">
										<div class="class-title">
											<div class="class-count">C</div>
											<h6 class="mb-0">Hindi - Sham</h6>
										</div>
										<div class="class-content">
											<h3 class="mb-0">04</h3>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 mb-4">
									<div class="class-box">
										<div class="class-title">
											<div class="class-count">D</div>
											<h6 class="mb-0">Science  - Ram</h6>
										</div>
										<div class="class-content">
											<h3 class="mb-0">08</h3>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 mb-4">
									<div class="class-box">
										<div class="class-title">
											<div class="class-count">E</div>
											<h6 class="mb-0">Maths - Aivin</h6>
										</div>
										<div class="class-content">
											<h3 class="mb-0">03</h3>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 mb-4">
									<div class="class-box">
										<div class="class-title">
											<div class="class-count">F</div>
											<h6 class="mb-0">Maths - Aivin</h6>
										</div>
										<div class="class-content">
											<h3 class="mb-0">03</h3>
										</div>
									</div>
								</div> -->
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