<?php session_start();
	include('../include/config.inc.php');	
	if( ( !isset($_SESSION['usrname']) || $_SESSION['usrname'] == '' ) && ( !isset($_SESSION['usrid']) || $_SESSION['usrid'] == '' ) ){
        header( 'location:'. $baseUrl );
    }

	$user_id = $_SESSION['usrid'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Auriv Learning | Student | Forms </title>
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

							<?php
							$sql = "SELECT * FROM tutor_form_master";
							// echo '<pre>';
							// print_r($sql);
							// echo '</pre>';
							// exit();
	                        $result = mysqli_query($con,$sql);
	                       if(mysqli_num_rows($result)>0){
							   ?>
							<div class="table-responsive">
								<table class="payment table table-borderless">
									<thead>
										<tr>
											<th>Tutor name</th>
											<th>Email</th>
											<th>Subject</th>
											<th>Date</th>
											<th>Timestamp</th>
											<th>More Data</th>
										</tr>
										<?php
										while($row = mysqli_fetch_assoc($result)){
											$id= $row['id'];
											$student_name_val = $row['student_name'];
											$student_email_val = $row['student_email'];
											$tutor_email_val = $row['tutor_email'];
											$tutor_name_val = $row['tutor_name'];
											$date_session_val = $row['date_session'];
											$totaltime_session_val = $row['totaltime_session'];
											$totalhours_session_val = $row['totalhours_session'];
											$taught_session_val = $row['taught_session'];
											$homework_val = $row['homework'];
											$notes_val = $row['notes'];
											$videolink_val = $row['videolink'];
											$googledrive_link_val = $row['googledrive_link'];
											$upcoming_class_val = $row['upcoming_class'];
											$next_scheduled_val = $row['next_scheduled'];
											$time_next_scheduled_val = $row['time_next_scheduled'];
											$general_assessment_val = $row['general_assessment'];
											?>
									
									</thead>
									<tr>
									   
										<td><?php echo $tutor_name_val; ?></td>
										<td><?php echo $tutor_email_val; ?></td>
										<td><?php echo $date_session_val; ?></td>
										<td><?php echo $totaltime_session_val; ?></td>
										<td class="text-right"><a href="#" onclick="viewstudentdetails(this,<?php echo $id; ?>)"  class="dark-outline" data-toggle="modal" data-target="#myModal">View</a></td>
									</tr>
									
									<?php 	} ?>
								</table>
								<?php 	} ?>
								<div class="modal fade" id="myModal">
							    <div class="modal-dialog modal-dialog-centered">
							      <div class="modal-content">
							      	<button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
							        <div class="modal-body">
							          <ul class="extra-point mb-0">
							          	<li>
							          		<span class="title">Student name :</span><span id="Student_name" class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">Student email :</span><span id="Student_email" class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">Tutor email :</span><span id="Tutor_email" class="value"></span>
							          	</li>
							          	<!-- <li>
							          		<span class="title">Student email :</span><span id="Student_email" class="value">Avin saji</span>
							          	</li> -->
							          	<li>
							          		<span class="title">Date :</span><span id="Date" class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">Time Slot:</span><span id="Time_Slot" class="value"></span>
							          	</li>
							          	<!-- <li>
							          		<span class="title">Student name :</span><span id="Student_name" class="value">10:30 PM</span>
							          	</li> -->
							          	<!-- <li>
							          		<span class="title">Duration of the session in hours </span><span id="Student_name" class="value"></span>
							          	</li> -->
							          	<li>
							          		<span class="title">Total hours done till date :</span><span id="Total_hours" class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">What was taught in the session :</span><span id="taught_session" class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">Home work or Assignment :</span><span id="Home_work" class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">Notes:</span><span id="Notes" class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">Video link of the recording of the session:</span><span id="Video_link" class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">Google drive link :</span><span id="Google_drive" class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">What is scheduled for the upcoming session:</span><span id="upcoming_session" class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">Date for next scheduled session: </span><span id="date_next_scheduled" class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">Time for the next scheduled session :</span><span id="Time_next scheduled" class="value"></span>
							          	</li>
							          	<li>
							          		<span class="title">General Assessment of the student and additional information: </span><span id="student_additional_information" class="value"></span>
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

	<?php include('../include/footer.inc.php'); ?>

  	<script src="../js/custom.js"></script>

	  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<script>
	function viewstudentdetails(student,studentid){
		// alert(studentid);
		$.ajax({
				url: "studentdetails.php", //backend url
				type: 'post',
				dataType: "json",
				data: {studentid,studentid},
				success: function(response){
				console.log(response.result);
				$("#Student_name").text(response.result.student_name)
				$("#Student_email").text(response.result.student_email)
				$("#Tutor_email").text(response.result.tutor_email)
				$("#Date").text(response.result.date_session)
				$("#Time_Slot").text(response.result.totaltime_session)
				$("#Total_hours").text(response.result.totalhours_session)
				$("#taught_session").text(response.result.taught_session)
				$("#Home_work").text(response.result.homework)
				$("#Notes").text(response.result.notes)
				$("#Video_link").text(response.result.videolink)
				$("#Google_drive").text(response.result.googledrive_link)
				$("#upcoming_session").text(response.result.upcoming_class)
				$("#date_next_scheduled").text(response.result.next_scheduled)
				$("#Time_next scheduled").text(response.result.Time_next_scheduled)
				$("#student_additional_information").text(response.result.general_assessment)
				}
			});
	}
</script>

	</body>
</html>