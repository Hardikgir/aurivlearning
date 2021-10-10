<?php session_start();
	include('../include/config.inc.php');	
	if( ( !isset($_SESSION['usrname']) || $_SESSION['usrname'] == '' ) && ( !isset($_SESSION['usrid']) || $_SESSION['usrid'] == '' ) ){
        header( 'location:'. $baseUrl );
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Auriv Learning | Tutor | Track Your Process </title>
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
										<h3 class="mb-0 page-title">Add Student Progress</h3>
									</div>
								</div>
								<div class="col-md-6 col-3 mb-3 text-right">
									<a href="#" data-toggle="modal" data-target="#addModal" class="filter-btn"><i class="fal fa-plus"></i></a>
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
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tr>
										<td>01.</td>
										<td>21-August-2021</td>
										<td>Mauree Biolog</td>
										<td>Lillian D. Avis</td>
										<td>Class 10 Tuition...</td>
										<td>08/10</td>
										<td class="feedback">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
										<td class="text-right"><a href="#" target="_blank"><img src="../img/drive.png"></a></td>
										<td class="text-right"><a href="#" class="delete-btn"><i class="far fa-trash-alt"></i></a></td>
									</tr>
									<tr>
										<td>01.</td>
										<td>21-August-2021</td>
										<td>Mauree Biolog</td>
										<td>Lillian D. Avis</td>
										<td>Class 10 Tuition...</td>
										<td>08/10</td>
										<td class="feedback">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
										<td class="text-right"><a href="#" target="_blank"><img src="../img/drive.png"></a></td>
										<td class="text-right"><a href="#" class="delete-btn"><i class="far fa-trash-alt"></i></a></td>
									</tr>
									<tr>
										<td>01.</td>
										<td>21-August-2021</td>
										<td>Mauree Biolog</td>
										<td>Lillian D. Avis</td>
										<td>Class 10 Tuition...</td>
										<td>08/10</td>
										<td class="feedback">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
										<td class="text-right"><a href="#" target="_blank"><img src="../img/drive.png"></a></td>
										<td class="text-right"><a href="#" class="delete-btn"><i class="far fa-trash-alt"></i></a></td>
									</tr>
								</table>
								<div class="modal fade" id="addModal">
							    <div class="modal-dialog modal-dialog-centered">
							      <div class="modal-content">
							      	<button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
							        <div class="modal-body">
							        	<div class="wizard">
								          <form>
									        	<div class="row mb-3">
							                <div class="col-md-6">
							                   	<div class="form-group">
					                    			<h6 class="font-weight-bold mb-3">Select Date</h6>
					                        	<input type="time" class="form-control position-relative" required>
							                		</div>
							                </div>
							                <div class="col-md-6">
							                    <div class="form-group">
							                    	<h6 class="font-weight-bold mb-3">Tutor Name</h6>
							                      <select class="form-control">
							                      	<option>Select Tutor</option>
							                      	<option>abc</option>
							                      	<option>zyx</option>
							                      	<option>demo</option>
							                      </select>
							                    </div>
							                </div>
							                <div class="col-md-6">
							                    <div class="form-group">
							                    	<h6 class="font-weight-bold mb-3">Student Name</h6>
							                      <select class="form-control">
							                      	<option>Select Student</option>
							                      	<option>abc</option>
							                      	<option>zyx</option>
							                      	<option>demo</option>
							                      </select>
							                    </div>
							                </div>
							                <div class="col-md-6">
							                    <div class="form-group">
							                    	<h6 class="font-weight-bold mb-3">Subject</h6>
							                       <input type="text" class="form-control" placeholder="Subject">
							                    </div>
							                </div>
							                <div class="col-md-6">
							                	<div class="form-group">
							                  		<h6 class="font-weight-bold mb-3">Score:</h6>
							                      <input type="text" class="form-control" placeholder="Score">
							                  </div>
							                </div>
							                <div class="col-md-6">
						                      <div class="form-group">
						                      	<h6 class="font-weight-bold mb-3">Google drive link</h6>
						                        <input type="url" class="form-control" placeholder="">
						                      </div>
						                  </div>
							                <div class="col-md-12">
							                    <div class="form-group">
							                    	<h6 class="font-weight-bold mb-3">Feedback</h6>
							                       	<textarea class="form-control" rows="5" placeholder="Feedback"></textarea>
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