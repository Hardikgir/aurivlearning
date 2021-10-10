<?php session_start();
	include('../include/config.inc.php');	
	if( ( !isset($_SESSION['usrname']) || $_SESSION['usrname'] == '' ) && ( !isset($_SESSION['usrid']) || $_SESSION['usrid'] == '' ) ){
        header( 'location:'. $baseUrl );
    }

	$current_usr = $_SESSION['usrid'];
	$getselfprogress_sql	 = "select studenttbl.fname as 'studentname', tutortbl.fname as 'tutorname', trackprogress.* from tbl_regusers studenttbl left join tbl_trackprogress trackprogress on trackprogress.student_id = studenttbl.user_id left join tbl_regusers tutortbl on trackprogress.tutor_id = tutortbl.user_id WHERE trackprogress.created_by = ".$current_usr;
	$getselfprogressresult = mysqli_query($con, $getselfprogress_sql);
	$getselfprogressarray = array();
	if (mysqli_num_rows($getselfprogressresult) > 0) {
		while($progress_row = mysqli_fetch_assoc($getselfprogressresult)) {
			$getselfprogressarray[] = $progress_row;			
		}
	} 

	$getusers_sql	 = "select * from tbl_regusers where utype In(2,3) AND status = 'active'";
	$result = mysqli_query($con, $getusers_sql);
	$getselfprogress_sql	 = "select * from tbl_trackprogress where created_by '".$current_usr."' AND status = 'active'";
	$student_array = array();
	$tutor_array = array();
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			if($row['utype'] == '2'){
				$student_array[$row['user_id']] = $row['fname'];
			}else{
				$tutor_array[$row['user_id']] = $row['fname'];
			}		
		}
	} else {
		$student_array[0] = 'Select Student';
		$tutor_array[0] = 'Select Tutor';
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
						<div id="acknowledgemsg"></div>
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
									<?php 
									if(!empty($getselfprogressarray)){
									$i = 1;
									foreach($getselfprogressarray as $selfprogress){ ?>									
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $selfprogress['select_date'] ?></td>
										<td><?php echo $selfprogress['tutorname'] ?></td>
										<td><?php echo $selfprogress['studentname'] ?></td>
										<td><?php echo $selfprogress['subject'] ?></td>
										<td><?php echo $selfprogress['score'] ?></td>
										<td class="feedback"><?php echo $selfprogress['feedback'] ?></td>
										<td class="text-right"><a href="<?php echo $selfprogress['googledrive'] ?>" target="_blank"><img src="../img/drive.png"></a></td>
										<td class="text-right"><a href="#" class="delete-btn"><i class="far fa-trash-alt"></i></a></td>
									</tr>
									<?php $i++; }  }else{
										echo '<tr><td colspan="9">No Record Found</td></tr>';
									} ?>
									<!-- <tr>
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
									</tr> -->
								</table>
								<div class="modal fade" id="addModal">
							    <div class="modal-dialog modal-dialog-centered">
							      <div class="modal-content">
							      	<button type="button" class="close" id="model_close" data-dismiss="modal"><i class="fal fa-times"></i></button>
							        <div class="modal-body">
							        	<div class="wizard">
								          <form id="trackprograssstore" method="post">
									        	<div class="row mb-3">
							                <div class="col-md-6">
							                   	<div class="form-group">
					                    			<h6 class="font-weight-bold mb-3">Select Date</h6>
					                        	<input type="date" name="select_date" class="form-control position-relative">
							                		</div>
							                </div>
							                <div class="col-md-6">
							                    <div class="form-group">
							                    	<h6 class="font-weight-bold mb-3">Tutor Name</h6>
							                      <select class="form-control" name="tutor_name">
							                      	<option value="">Select Tutor</option>
													<?php foreach($tutor_array as $key=>$studentval){ ?>
							                      	<option value="<?php echo $key; ?>" <?php if($key == $_SESSION['usrid']) { echo "Selected"; } ?> ><?php echo $studentval; ?></option>
													<?php } ?>							                      
							                      </select>
							                    </div>
							                </div>
							                <div class="col-md-6">
							                    <div class="form-group">
							                    	<h6 class="font-weight-bold mb-3">Student Name</h6>
							                      <select class="form-control" name="student_name">
							                      	<option value="">Select Student</option>
							                      	<?php foreach($student_array as $key=>$studentval){ ?>
							                      	<option value="<?php echo $key; ?>"><?php echo $studentval; ?></option>
													<?php } ?>	
							                      </select>
							                    </div>
							                </div>
							                <div class="col-md-6">
							                    <div class="form-group">
							                    	<h6 class="font-weight-bold mb-3">Subject</h6>
							                       <input type="text" class="form-control" name="subject" placeholder="Subject">
							                    </div>
							                </div>
							                <div class="col-md-6">
							                	<div class="form-group">
							                  		<h6 class="font-weight-bold mb-3">Score:</h6>
							                      <input type="number" class="form-control" name="score" placeholder="Score">
							                  </div>
							                </div>
							                <div class="col-md-6">
						                      <div class="form-group">
						                      	<h6 class="font-weight-bold mb-3">Google drive link</h6>
						                        <input type="url" class="form-control" name="googledrive_link" placeholder="">
						                      </div>
						                  </div>
							                <div class="col-md-12">
							                    <div class="form-group">
							                    	<h6 class="font-weight-bold mb-3">Feedback</h6>
							                       	<textarea class="form-control" name="feedback" rows="5" placeholder="Feedback"></textarea>
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
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

		<script>
			$("#trackprograssstore").on('submit', function(e) {
		// console.log("call this");
		var courseform = $(this);
        // var formData = new FormData(this);

		event.preventDefault();
                  $.ajax({
                  url: "trackprograssstore.php", //backend url
                  type: 'post',
				  dataType: "json",
                  data: courseform.serialize(),
                  // data: formData,
                  success: function(response){
                    console.log(response);
                    if(response.status == '1') {
                        // $("#courseform").hide();
                        // $("#addModal").hide();
                        // $('#addModal').modal('toggle');
						// $('#addModal').modal('hide');
						$("#model_close").click();
                        // $('.modal-backdrop').css('opacity','0');
                        // $('.modal-backdrop').remove();
						if(response.status == '1'){
							$('#acknowledgemsg').html('<div class="alert alert-success" role="alert">'+response.message+'</div>');
						}else{
							$('#acknowledgemsg').html('<div class="alert alert-danger" role="alert">'+response.message+'</div>');
						}
                                                                    
                        setTimeout(function(){
                            $('#acknowledgemsg').hide('fast');
                        },3000);
                        // loadcoursePagination(0);
                        // loadPagination(0);
                    }
                    // $("#coursemessage").html(response.message);
                  }
                  });
  });

		</script>


	</body>
</html>