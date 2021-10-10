<?php session_start();
	include('../include/config.inc.php');	
	if( ( !isset($_SESSION['usrname']) || $_SESSION['usrname'] == '' ) && ( !isset($_SESSION['usrid']) || $_SESSION['usrid'] == '' ) ){
        header( 'location:'. $baseUrl );
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Auriv Learning | Tutor | My Profile </title>
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

		<?php include( '../student/stud.header.php');?>

		<section class="pt-0 pb-5">
			<div class="container">
				<?php if(isset($_REQUEST['lmsg']) && !empty($_REQUEST['lmsg'])){ ?>										
					<h5 class="text-center text-uppercase sec-color"> <?='**'.$_REQUEST['lmsg'];?> </h5>
				<?php } ?>
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
										<h3 class="mb-0 page-title">My Profile</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="side-content pt-3 pb-0">
							<div class="wizard theme-shadow bg-white p-4 rounded">
								<form>
			        			<div class="row">
		                	<div class="col-md-12 mb-2">
		                      <div class="form-group">
		                      	<h6 class="mb-4">Having an authentic looking profile picture increases your chances of getting quick responsesfrom Tutors & Institutes.</h6>
		                      </div>
		                  </div>
		                  <div class="profile-pic col-md-12 mb-3">
		                      <div class="circle mb-3">
		      									<div class="profile-img position-relative">
		      										<img class="user-profile" src="../img/user.jpg">
		      										<div class="p-image">
													      <i class="fal fa-plus upload-button"></i>
													     	<input class="file-upload" type="file" accept="image/*"/>
													    </div>
		      									</div>
		      								</div>
										  </div>
										  <div class="col-md-12 mb-3">
										  	<h4>Personal Information</h4>
										  </div>
		                  <div class="col-md-6 mb-2">
		                      <div class="form-group">
		                      	<h6 class="font-weight-bold mb-2">Name</h6>
		                         	<input type="text" class="form-control" placeholder="Anne Sullivan">
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
		                  <div class="col-md-6 mb-2">
		                      <div class="form-group">
		                      	<h6 class="font-weight-bold mb-2">Whatsapp/telegram number </h6>
		                         	<input type="text" class="form-control" placeholder=" + 91 45785 12545">
		                      </div>
		                  </div>
		                  <div class="col-md-6 mb-2">
		                      <div class="form-group">
		                      	<h6 class="font-weight-bold mb-2">Gender</h6>
		                         	<input type="text" class="form-control" placeholder="Male">
		                      </div>
		                  </div>
		                  <div class="col-md-6 mb-2">
		                      <div class="form-group">
		                      	<h6 class="font-weight-bold mb-2">Language Known</h6>
		                         	<input type="text" class="form-control" placeholder="English">
		                      </div>
		                  </div>
		                  <div class="col-md-6 mb-2">
		                      <div class="form-group">
		                      	<h6 class="font-weight-bold mb-2">Identification type</h6>
		                         	<input type="text" class="form-control" placeholder="8900 0089 0000 89000">
		                      </div>
		                  </div>
		                  <div class="col-md-6 mb-2">
		                      <div class="form-group">
		                      	<h6 class="font-weight-bold mb-2">Identification Number</h6>
		                         	<input type="text" class="form-control" placeholder="8900 0089 0000 89000">
		                      </div>
		                  </div>
		                  <div class="col-md-6 mb-2">
		                      <div class="form-group">
		                      	<h6 class="font-weight-bold mb-2">Highest qualification</h6>
		                         	<input type="text" class="form-control" placeholder="Masters In Teaching">
		                      </div>
		                  </div>
		                  <div class="col-md-6 mb-2">
		                      <div class="form-group">
		                      	<h6 class="font-weight-bold mb-2">Teaching Experience</h6>
		                         	<input type="text" class="form-control" placeholder="5 years">
		                      </div>
		                  </div>
		                  <div class="col-md-6 mb-2">
		                      <div class="form-group">
		                      	<h6 class="font-weight-bold mb-2">Subject Preference</h6>
		                         	<input type="text" class="form-control" placeholder="Subject Preference">
		                      </div>
		                  </div>
		                  <div class="col-md-6 mb-2">
		                      <div class="form-group">
		                      	<h6 class="font-weight-bold mb-2">Extra curricular Activity Preference</h6>
		                         	<input type="text" class="form-control" placeholder="Research">
		                      </div>
		                  </div>
		                  <div class="col-md-12 mb-3">
		                      <div class="form-group">
		                      	<h6 class="font-weight-bold mb-2">Bio</h6>
		                         	<textarea class="form-control" rows="5" placeholder="Add Your Bio"></textarea>
		                      </div>
		                  </div>
		                </div>
				        </form>
				        <div id="payment-method" class="row">
				        	<div class="col-md-12 mb-3">
		                <h4>Bank Information</h4>
		              </div>
		              <div class="col-lg-4 col-md-6 mb-3">
		              	<div class="payment-box">
		              		<div class="d-flex align-items-center">
		              			<img src="../img/phone-pay.svg" class="payment-ico mr-2">
		              			<h5 class="mb-0 dash-color">Add Phonepay Number</h5>
		              		</div>
		              		<a data-toggle="collapse" href="#phonepay" role="button" aria-expanded="false" aria-controls="collapseExample" class="collapsed"><i class="fal fa-minus-circle add-more"></i></a> 
		              		<div class="collapse" id="phonepay" data-parent="#payment-method">
											  <div class="more-content pt-3 pb-3">
											    <form>
											    	<div class="form-group">
			                      	<input type="text" class="form-control" placeholder="+ 91 78945 78956">
			                      </div>
			                      <div class="form-group">
			                      	<a class="login-btn border-0 font-weight-bold">Add</a>
			                      </div>
											    </form>
											  </div>
											</div>
		              	</div>
		              </div>
		              <div class="col-lg-4 col-md-6 mb-3">
		              	<div class="payment-box">
		              		<div class="d-flex align-items-center">
		              			<img src="../img/google-pay.svg" class="payment-ico mr-2">
		              			<h5 class="mb-0 dash-color">Add G-Pay Number</h5>
		              		</div>
		              		<a data-toggle="collapse" href="#googlepay" role="button" aria-expanded="false" aria-controls="collapseExample" class="collapsed"><i class="fal fa-minus-circle add-more"></i></a> 
		              		<div class="collapse" id="googlepay" data-parent="#payment-method">
											  <div class="more-content pt-3 pb-3">
											    <form>
											    	<div class="form-group">
			                      	<input type="text" class="form-control" placeholder="+ 91 78945 78956">
			                      </div>
			                      <div class="form-group">
			                      	<a class="login-btn border-0 font-weight-bold">Add</a>
			                      </div>
											    </form>
											  </div>
											</div>
		              	</div>
		              </div>
		              <div class="col-lg-4 col-md-6 mb-3">
		              	<div class="payment-box">
		              		<div class="d-flex align-items-center">
		              			<img src="../img/upi.svg" class="payment-ico mr-2">
		              			<h5 class="mb-0 dash-color">Add UPI</h5>
		              		</div>
		              		<a data-toggle="collapse" href="#upi" role="button" aria-expanded="false" aria-controls="collapseExample" class="collapsed"><i class="fal fa-minus-circle add-more"></i></a> 
		              		<div class="collapse" id="upi" data-parent="#payment-method">
											  <div class="more-content pt-3 pb-3">
											    <form>
											    	<div class="form-group">
			                      	<input type="text" class="form-control" placeholder="Enter UPI Id">
			                      </div>
			                      <div class="form-group">
			                      	<a class="login-btn border-0 font-weight-bold">Add</a>
			                      </div>
											    </form>
											  </div>
											</div>
		              	</div>
		              </div>
		              <div class="col-lg-8 col-md-6 mb-3">
		              	<div class="payment-box">
		              		<div class="d-flex align-items-center">
		              			<h5 class="mb-0 dash-color">Add Your Bank Account</h5>
		              		</div>
		              		<a data-toggle="collapse" href="#bank" role="button" aria-expanded="false" aria-controls="collapseExample" class="collapsed"><i class="fal fa-minus-circle add-more"></i></a> 
		              		<div class="collapse" id="bank" data-parent="#payment-method">
											  <div class="more-content pt-3 pb-3">
											    <form>
											    	<div class="row">
											    		<div class="col-lg-6 mb-2">
											    			<div class="form-group">
											    				<h6 class="font-weight-bold mb-2">Bank Account Number</h6>
					                      	<input type="text" class="form-control" placeholder="8900 0089 0000 89000">
					                      </div>
											    		</div>
											    		<div class="col-lg-6 mb-2">
											    			<div class="form-group">
											    				<h6 class="font-weight-bold mb-2">Confirm Bank Account Number</h6>
					                      	<input type="text" class="form-control" placeholder="8900 0089 0000 89000">
					                      </div>
											    		</div>
											    		<div class="col-lg-6 mb-2">
											    			<div class="form-group">
											    				<h6 class="font-weight-bold mb-2">IFSC CODE</h6>
					                      	<input type="text" class="form-control" placeholder="BARB0123">
					                      </div>
											    		</div>
											    		<div class="col-lg-6 mb-2">
											    			<div class="form-group">
											    				<h6 class="font-weight-bold mb-2">Bank Branch</h6>
					                      	<input type="text" class="form-control" placeholder="XYZ Branch">
					                      </div>
											    		</div>
											    		<div class="col-md-12">
											    			 <div class="form-group">
					                      	<a class="login-btn border-0 font-weight-bold w-auto">Add Bank Account</a>
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