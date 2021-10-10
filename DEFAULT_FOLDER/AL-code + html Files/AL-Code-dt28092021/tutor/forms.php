<?php session_start();
	include('../include/config.inc.php');	
	if( ( !isset($_SESSION['usrname']) || $_SESSION['usrname'] == '' ) && ( !isset($_SESSION['usrid']) || $_SESSION['usrid'] == '' ) ){
        header( 'location:'. $baseUrl );
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Auriv Learning | Tutor | Forms </title>
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
										<h3 class="mb-0 page-title">Forms</h3>
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
										<div class="col-lg-4 col-md-2 mb-1">
				              <div class="form-group d-flex align-items-center justify-content-center justify-content-md-start">
													<input type="submit" value="search" class="login-btn font-weight-bold border-0">
				              </div>
										</div>
									</div>
								</form>
							</div>

							<div class="table-responsive">
								<table class="payment table table-borderless">
									<thead>
										<tr>
											<th>Sr No.</th>
											<th>Date</th>
											<th>Student Name</th>
											<th>Student Email</th>
											<th>Subject</th>
											<th>View </th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tr>
										<td>01.</td>
										<td>21-August-2021</td>
										<td>Rahul Patel</td>
										<td>Rahul@gamil.com</td>
										<td>Maths</td>
										<td><a href="#" class="dark-outline" data-toggle="modal" data-target="#myModal">View</a></td>
										<td class="text-right"><a href="#" class="delete-btn"><i class="far fa-trash-alt"></i></a></td>
									</tr>
									<tr>
										<td>01.</td>
										<td>21-August-2021</td>
										<td>Rahul Patel</td>
										<td>Rahul@gamil.com</td>
										<td>Maths</td>
										<td><a href="#" class="dark-outline" data-toggle="modal" data-target="#myModal">View</a></td>
										<td class="text-right"><a href="#" class="delete-btn"><i class="far fa-trash-alt"></i></a></td>
									</tr>
									<tr>
										<td>01.</td>
										<td>21-August-2021</td>
										<td>Rahul Patel</td>
										<td>Rahul@gamil.com</td>
										<td>Maths</td>
										<td><a href="#" class="dark-outline" data-toggle="modal" data-target="#myModal">View</a></td>
										<td class="text-right"><a href="#" class="delete-btn"><i class="far fa-trash-alt"></i></a></td>
									</tr>
									<tr>
										<td>01.</td>
										<td>21-August-2021</td>
										<td>Rahul Patel</td>
										<td>Rahul@gamil.com</td>
										<td>Maths</td>
										<td><a href="#" class="dark-outline" data-toggle="modal" data-target="#myModal">View</a></td>
										<td class="text-right"><a href="#" class="delete-btn"><i class="far fa-trash-alt"></i></a></td>
									</tr>
								</table>
								<div class="modal fade" id="myModal">
							    <div class="modal-dialog modal-dialog-centered">
							      <div class="modal-content">
							      	<button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
							        <div class="modal-body">
							          <ul class="extra-point mb-0">
							          	<li>
							          		<span class="title">Student name :</span><span class="value">Avin saji</span>
							          	</li>
							          	<li>
							          		<span class="title">Student email :</span><span class="value">aivinsaji22@gmail.com</span>
							          	</li>
							          	<li>
							          		<span class="title">Tutor email :</span><span class="value">shrjanin11@gmail.com</span>
							          	</li>
							          	<li>
							          		<span class="title">Student email :</span><span class="value">Avin saji</span>
							          	</li>
							          	<li>
							          		<span class="title">Date :</span><span class="value">10-10-2021</span>
							          	</li>
							          	<li>
							          		<span class="title">Time Slot:</span><span class="value">Avin saji</span>
							          	</li>
							          	<li>
							          		<span class="title">Student name :</span><span class="value">10:30 PM</span>
							          	</li>
							          	<li>
							          		<span class="title">Duration of the session in hours </span><span class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">Total hours done till date :</span><span class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">What was taught in the session :</span><span class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">Home work or Assignment :</span><span class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">Notes:</span><span class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">Video link of the recording of the session:</span><span class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">Google drive link :</span><span class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">What is scheduled for the upcoming session:</span><span class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">Date for next scheduled session: </span><span class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">Time for the next scheduled session :</span><span class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">General Assessment of the student and additional information: </span><span class="value"></span>
							          	</li>
							          </ul>
							        </div>
							      </div>
							    </div>
							  </div>
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