<?php session_start();
	include('../include/config.inc.php');	
	if( ( !isset($_SESSION['usrname']) || $_SESSION['usrname'] == '' ) && ( !isset($_SESSION['usrid']) || $_SESSION['usrid'] == '' ) ){
        header( 'location:'. $baseUrl );
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Auriv Learning | Student | Track Your Process </title>
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
										<h3 class="mb-0 page-title">Track Your Progress</h3>
									</div>
								</div>
								<div class="col-md-6 col-3 mb-3 text-right">
									<a href="#" class="filter-btn"><i class="fas fa-filter"></i></a>
								</div>
							</div>
						</div>
						<div class="side-content pt-3 pb-0">
							<div class="table-responsive">
								<table class="payment table table-borderless">
									<thead>
										<tr>
											<th>Sr No.</th>
											<th>Date</th>
											<th>Tutor Name</th>
											<th>Student Name</th>
											<th>Subject</th>
											<th>Score</th>
											<th>Feedback</th>
											<th>Study Material</th>
										</tr>
									</thead>
									<tr>
										<td>01.</td>
										<td>21-August-2021</td>
										<td>Mauree Biolog</td>
										<td>Lillian D. Avis</td>
										<td>Class 10 Tuition...</td>
										<td>08/10</td>
										<td class="feedback">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</td>
										<td class="text-right"><a href="#" target="_blank"><img src="../img/drive.png"></a></td>
									</tr>
									<tr>
										<td>01.</td>
										<td>21-August-2021</td>
										<td>Mauree Biolog</td>
										<td>Lillian D. Avis</td>
										<td>Class 10 Tuition...</td>
										<td>08/10</td>
										<td class="feedback">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</td>
										<td class="text-right"><a href="#" target="_blank"><img src="../img/drive.png"></a></td>
									</tr>
									<tr>
										<td>01.</td>
										<td>21-August-2021</td>
										<td>Mauree Biolog</td>
										<td>Lillian D. Avis</td>
										<td>Class 10 Tuition...</td>
										<td>08/10</td>
										<td class="feedback">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</td>
										<td class="text-right"><a href="#" target="_blank"><img src="../img/drive.png"></a></td>
									</tr>
									<tr>
										<td>01.</td>
										<td>21-August-2021</td>
										<td>Mauree Biolog</td>
										<td>Lillian D. Avis</td>
										<td>Class 10 Tuition...</td>
										<td>08/10</td>
										<td class="feedback">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</td>
										<td class="text-right"><a href="#" target="_blank"><img src="../img/drive.png"></a></td>
									</tr>
									<tr>
										<td>01.</td>
										<td>21-August-2021</td>
										<td>Mauree Biolog</td>
										<td>Lillian D. Avis</td>
										<td>Class 10 Tuition...</td>
										<td>08/10</td>
										<td class="feedback">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</td>
										<td class="text-right"><a href="#" target="_blank"><img src="../img/drive.png"></a></td>
									</tr>
								</table>
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