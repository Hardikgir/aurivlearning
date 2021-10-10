<!DOCTYPE html>
<html lang="en">
<?php session_start();
	include('../include/config.inc.php');

	$totaladminsql = 'select count(*) as total_admin from tbl_regusers where utype = "0"';
	$totalstudentsql = 'select count(*) as total_student from tbl_regusers where utype = "1"';
	$totalactivestudentsql = 'select count(*) as total_active_student from tbl_regusers where utype = "1" AND status = "active"';

	$totaltutorsql = 'select count(*) as total_tutor from tbl_regusers where utype = "3"';
	$totalactivetutorsql = 'select count(*) as total_active_tutor from tbl_regusers where utype = "3" AND status = "active"';

	$adminresult = mysqli_query($con,$totaladminsql);
	$admincount = mysqli_fetch_assoc($adminresult);

	$studentresult = mysqli_query($con,$totalstudentsql);
	$studentcount = mysqli_fetch_assoc($studentresult);

	$totalactivestudentresult = mysqli_query($con,$totalactivestudentsql);
	$totalactivestudentcount = mysqli_fetch_assoc($totalactivestudentresult);

	$tutorresult = mysqli_query($con,$totaltutorsql);
	$tutorcount = mysqli_fetch_assoc($tutorresult);

	$totalactivetutorresult = mysqli_query($con,$totalactivetutorsql);
	$totalactivetutorcount = mysqli_fetch_assoc($totalactivetutorresult);
	
	// exit();
	?>
<?php include('common/head.php'); ?>
<body>

<div class="dash wrapper d-flex align-items-stretch">


	<?php include('common/sidebar.php'); ?>

 	<div id="content" class="position-relative">
	 <?php include('common/headercommon.php') ?>
		
		<!-- Section -->
		<div class="container-fluid mb-lg-5">
			<div class="row">
				<div class="col-lg-12 mb-3">
					<ul class="breadcrumbs font-weight-bold d-flex justify-content-end">
						<li>Dashboard</li>	
					</ul>
				</div>				
				<div class="col-lg-12">
					<div class="row">
						<div class="col-xl-3 col-lg-6 col-sm-6 mb-3">
							<div class="card-block blue p-3">
								<a href="#" name="card-list">
									<div class="row align-items-center">
										<div class="col-8">
											<div class="card-point">
												<h2><?php echo $studentcount['total_student']; ?></h2>
												<h6 class="mb-0">Total Student</h6>
											</div>
										</div>
										<div class="col-4 text-right">
											<div class="card-ico">
												<i class="fas fa-user"></i>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-sm-6 mb-3">
							<div class="card-block blue p-3">
								<a href="#" name="card-list">
									<div class="row align-items-center">
										<div class="col-8">
											<div class="card-point">
												<h2><?php echo $tutorcount['total_tutor']; ?></h2>
												<h6 class="mb-0">Tutor</h6>
											</div>
										</div>
										<div class="col-4 text-right">
											<div class="card-ico">
												<i class="fas fa-user"></i>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<!-- <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
							<div class="card-block blue p-3">
								<a href="#" name="card-list">
									<div class="row align-items-center">
										<div class="col-8">
											<div class="card-point">
												<h2>35</h2>
												<h6 class="mb-0">Rider - New</h6>
											</div>
										</div>
										<div class="col-4 text-right">
											<div class="card-ico">
												<i class="fas fa-user"></i>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
							<div class="card-block blue p-3">
								<a href="#" name="card-list">
									<div class="row align-items-center">
										<div class="col-8">
											<div class="card-point">
												<h2>08</h2>
												<h6 class="mb-0">User - New</h6>
											</div>
										</div>
										<div class="col-4 text-right">
											<div class="card-ico">
												<i class="fas fa-user"></i>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div> -->
					</div>
					<div class="row">
						<div class="col-xl-3 col-lg-6 col-sm-6 mb-3">
							<div class="card-block green p-3">
								<a href="#" name="card-list">
									<div class="row align-items-center">
										<div class="col-8">
											<div class="card-point">
												<h2><?php echo $totalactivestudentcount['total_active_student']; ?></h2>
												<h6 class="mb-0">Active Student</h6>
											</div>
										</div>
										<div class="col-4 text-right">
											<div class="card-ico">
												<i class="fas fa-user"></i>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-sm-6 mb-3">
							<div class="card-block green p-3">
								<a href="#" name="card-list">
									<div class="row align-items-center">
										<div class="col-8">
											<div class="card-point">
												<h2><?php echo $totalactivetutorcount ['total_active_tutor']; ?></h2>
												<h6 class="mb-0">Active Tutor</h6>
											</div>
										</div>
										<div class="col-4 text-right">
											<div class="card-ico">
												<i class="fas fa-user"></i>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<!-- <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
							<div class="card-block green p-3">
								<a href="#" name="card-list">
									<div class="row align-items-center">
										<div class="col-8">
											<div class="card-point">
												<h2>29</h2>
												<h6 class="mb-0">Rider - Complete</h6>
											</div>
										</div>
										<div class="col-4 text-right">
											<div class="card-ico">
												<i class="fas fa-user"></i>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div> -->
					</div>
					<!-- <div class="row">
						<div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
							<div class="card-block purple p-3">
								<a href="#" name="card-list">
									<div class="row align-items-center">
										<div class="col-8">
											<div class="card-point">
												<h2>7</h2>
												<h6 class="mb-0">Restaurant - In Progress</h6>
											</div>
										</div>
										<div class="col-4 text-right">
											<div class="card-ico">
												<i class="fas fa-user"></i>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
							<div class="card-block purple p-3">
								<a href="#" name="card-list">
									<div class="row align-items-center">
										<div class="col-8">
											<div class="card-point">
												<h2>0</h2>
												<h6 class="mb-0">Restaurant - In Progress</h6>
											</div>
										</div>
										<div class="col-4 text-right">
											<div class="card-ico">
												<i class="fas fa-user"></i>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
							<div class="card-block purple p-3">
								<a href="#" name="card-list">
									<div class="row align-items-center">
										<div class="col-8">
											<div class="card-point">
												<h2>6</h2>
												<h6 class="mb-0">Rider - In Progress</h6>
											</div>
										</div>
										<div class="col-4 text-right">
											<div class="card-ico">
												<i class="fas fa-user"></i>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div> -->
				</div>
				<!-- <div class="col-lg-12">
					<div class="row align-items-center mb-3">
						<div class="col-lg-12 mb-3">
							<h4 class="mb-0 page-title text-uppercase"><span class="vline"></span>Incomplete Partner Setup</h4>
						</div>
					</div>
				</div>
				<div class="col-md-12 mb-4">
				    <div class="card-block p-4">
				    	<div class="row align-items-center flex-column-reverse flex-md-row">
				    		<div class="col-xl-8 col-md-4 col-12 mb-3 mb-md-0">
				    			<a href="add-rider.html" class="theme-btn"><i class="fal fa-plus mr-2" aria-hidden="true"></i> ADD Partner </a>
				    		</div>
				    		<div class="col-xl-4 col-md-8 col-12">
				    			<form class="filter">
				    				<div class="row">
				    					<div class="col-9">
				                <div class="form-group input-group mb-0 border shadow-none input-group-sm">
											    <input type="text" name="keyword" placeholder="Search for..." class="form-control shadow-none border-0">
											    <div class="input-group-prepend">
											       <span class="input-group-text border-0 bg-transparent">
										       		<button type="submit" class="bg-transparent border-0"><i class="far fa-search" aria-hidden="true"></i></button>
										      	 </span>
											    </div>
											  </div>
											</div>
											<div class="col-3 mb-3 mb-md-0 text-right">
												<a href="#" class="filter-btn"><img src="img/sorting-ico.svg"></a>
											</div>
				    				</div>
				    			</form>
				    		</div>
				    	</div>
				    	<hr>
							<div class="table-responsive">
					    	<table class="table table-borderless table-striped">
					        <thead>
					            <tr>
				                <th scope="col">No.</th>
				                <th scope="col">ID</th>
				                <th scope="col">Name</th>
				                <th scope="col">Service Area</th>
				                <th scope="col">Registered Date</th>
				                <th scope="col">Type</th>
				                <th scope="col">Status</th>
					            </tr>
					         </thead>
					        <tbody>
				            <tr>
			                <td>01</td>
			                <td>6684</td>
			                <td>Vientaine Hot Pot</td>
			                <td>Service Area Name</td>
			                <td>13-July-2021</td>
			                <td>Restaurant</td>
			                <td class="text-success">Active</td>
				            </tr>
				            <tr>
			                <td>01</td>
			                <td>6684</td>
			                <td>Vientaine Hot Pot</td>
			                <td>Service Area Name</td>
			                <td>13-July-2021</td>
			                <td>Merchant</td>
			                <td class="text-danger">In Active</td>
				            </tr>
				            <tr>
			                <td>01</td>
			                <td>6684</td>
			                <td>Vientaine Hot Pot</td>
			                <td>Service Area Name</td>
			                <td>13-July-2021</td>
			                <td>Merchant</td>
			                <td class="text-danger">In Active</td>
				            </tr>
				            <tr>
			                <td>01</td>
			                <td>6684</td>
			                <td>Vientaine Hot Pot</td>
			                <td>Service Area Name</td>
			                <td>13-July-2021</td>
			                <td>Restaurant</td>
			                <td class="text-success">Active</td>
				            </tr>
				            <tr>
			                <td>01</td>
			                <td>6684</td>
			                <td>Vientaine Hot Pot</td>
			                <td>Service Area Name</td>
			                <td>13-July-2021</td>
			                <td>Restaurant</td>
			                <td class="text-success">Active</td>
				            </tr>
					        </tbody>
					      </table>
							</div>
						</div>
				</div> -->
				<!-- <div class="col-lg-12">
					<div class="row align-items-center mb-3">
						<div class="col-lg-12 mb-3">
							<h4 class="mb-0 page-title text-uppercase"><span class="vline"></span>Incomplete Rider Setup</h4>
						</div>
					</div>
				</div>
				<div class="col-md-12">
				    <div class="card-block p-4">
				    	<div class="row align-items-center flex-column-reverse flex-md-row">
				    		<div class="col-xl-8 col-md-4 col-12 mb-3 mb-md-0">
				    			<a href="add-rider.html" class="theme-btn"><i class="fal fa-plus mr-2" aria-hidden="true"></i> ADD Rider </a>
				    		</div>
				    		<div class="col-xl-4 col-md-8 col-12">
				    			<form class="filter">
				    				<div class="row">
				    					<div class="col-9">
				                <div class="form-group input-group mb-0 border shadow-none input-group-sm">
											    <input type="text" name="keyword" placeholder="Search for..." class="form-control shadow-none border-0">
											    <div class="input-group-prepend">
											       <span class="input-group-text border-0 bg-transparent">
										       		<button type="submit" class="bg-transparent border-0"><i class="far fa-search" aria-hidden="true"></i></button>
										      	 </span>
											    </div>
											  </div>
											</div>
											<div class="col-3 mb-3 mb-md-0 text-right">
												<a href="#" class="filter-btn"><img src="img/sorting-ico.svg"></a>
											</div>
				    				</div>
				    			</form>
				    		</div>
				    	</div>
				    	<hr>
							<div class="table-responsive">
					    	<table class="table table-borderless table-striped">
					        <thead>
					            <tr>
				                <th scope="col">No.</th>
				                <th scope="col">ID</th>
				                <th scope="col">Rider Name</th>
				                <th scope="col">Phone</th>
				                <th scope="col">Service Area</th>
				                <th scope="col">Registered Date</th>
				                <th scope="col">Type</th>
				                <th scope="col">Wallet</th>
				                <th scope="col">Order Status</th>
				                <th scope="col">Status</th>
				                <th scope="col">On/Offline</th>
					            </tr>
					         </thead>
					        <tbody>
				            <tr>
			                <td>01</td>
			                <td>6684</td>
			                <td>Vientaine Hot Pot</td>
			                <td>+852 0955 99589</td>
			                <td>Service Area Name</td>
			                <td>13-July-2021</td>
			                <td>Staff</td>
			                <td>11,222,.55</td>
			                <td class="text-warning">In Process </td>
			                <td class="text-success">Active</td>
			                <td>
			                	<label class="switch">
												  <input type="checkbox" checked="">
												  <span class="slider round"></span>
												</label>
											</td>
				            </tr>
				            <tr>
			                <td>01</td>
			                <td>6684</td>
			                <td>Vientaine Hot Pot</td>
			                <td>+852 0955 99589</td>
			                <td>Service Area Name</td>
			                <td>13-July-2021</td>
			                <td>Independant</td>
			                <td>11,222,.55</td>
			                <td class="text-success">Completed</td>
			                <td class="text-success">Active</td>
			                <td>
			                	<label class="switch">
												  <input type="checkbox">
												  <span class="slider round"></span>
												</label>
											</td>
				            </tr>
				            <tr>
			                <td>01</td>
			                <td>6684</td>
			                <td>Vientaine Hot Pot</td>
			                <td>+852 0955 99589</td>
			                <td>Service Area Name</td>
			                <td>13-July-2021</td>
			                <td>Temp</td>
			                <td>11,222,.55</td>
			                <td class="text-danger">Cancelled</td>
			                <td class="text-success">Active</td>
			                <td>
			                	<label class="switch">
												  <input type="checkbox">
												  <span class="slider round"></span>
												</label>
											</td>
				            </tr><tr>
			                <td>01</td>
			                <td>6684</td>
			                <td>Vientaine Hot Pot</td>
			                <td>+852 0955 99589</td>
			                <td>Service Area Name</td>
			                <td>13-July-2021</td>
			                <td>Staff</td>
			                <td>11,222,.55</td>
			                <td class="text-warning">In Process </td>
			                <td class="text-success">Active</td>
			                <td>
			                	<label class="switch">
												  <input type="checkbox" checked="">
												  <span class="slider round"></span>
												</label>
											</td>
				            </tr>
				            <tr>
			                <td>01</td>
			                <td>6684</td>
			                <td>Vientaine Hot Pot</td>
			                <td>+852 0955 99589</td>
			                <td>Service Area Name</td>
			                <td>13-July-2021</td>
			                <td>Independant</td>
			                <td>11,222,.55</td>
			                <td class="text-success">Completed</td>
			                <td class="text-success">Active</td>
			                <td>
			                	<label class="switch">
												  <input type="checkbox">
												  <span class="slider round"></span>
												</label>
											</td>
				            </tr>
				            <tr>
			                <td>01</td>
			                <td>6684</td>
			                <td>Vientaine Hot Pot</td>
			                <td>+852 0955 99589</td>
			                <td>Service Area Name</td>
			                <td>13-July-2021</td>
			                <td>Temp</td>
			                <td>11,222,.55</td>
			                <td class="text-danger">Cancelled</td>
			                <td class="text-success">Active</td>
			               <td>
			                	<label class="switch">
												  <input type="checkbox">
												  <span class="slider round"></span>
												</label>
											</td>
				            </tr>
				          	</tbody>
					      </table>
							</div>
						</div>
				</div> -->
			</div>
		</div>

		<div id="footer-bar" class="container-fluid">
			<div class="bottom-footer pt-2 pb-3">
				<div class="row">
					<div class="col-lg-8 text-center text-lg-left">
						<span>©All Rights Reserved Copy Rights of D Company Co., LTD 2021</span>
					</div>
					<div class="col-lg-4 text-center text-lg-right">
						<span>Powered by D Company Co., LTD</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/font-awesome-5-pro.js"></script>

</body>
</html>