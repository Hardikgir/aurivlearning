<?php session_start();
	include('include/config.inc.php');	
    if(array_key_exists('usrname',$_SESSION) && !empty($_SESSION['usrname']) ) {
		header( 'location:'.$baseUrl );
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Auriv Learning | Login </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">  
		<!-- bootstarp -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.matchHeight-min.js"></script>
		<!-- owl carousel -->  
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<script src="js/owl.carousel.js"></script>
		<!-- custom js -->
		<!-- custom css -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="css/animate.css">
		<!-- fonts -->
		<script src="js/font-awesome-5-pro.js"></script>
	</head>

	<body style="background: url(img/register-bg.png);background-size: cover;">

		<!-- header -->
		<header class="inner-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<nav class="navbar navbar-expand-lg p-0">
							<a class="navbar-brand m-0 p-0" href="<?=$baseUrl;?>">
								<img src="<?=$baseUrl;?>img/logo.png" />
							</a>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header --> 

		<section class="pt-5">
			<div class="container">
				<div class="row pt-5 mt-3 justify-content-center">
			        <div class="col-xl-10 col-lg-12 mt-lg-5">
			            <div class="wizard">			                
							<form method="post" action="loginverify.php" class="bg-white" onsubmit="return checkfieldsVerify();">			                    
			                    <div class="tab-content">
			                        <div class="tab-pane active">
			                            <div class="row justify-content-end">
			                            	<img src="<?=$baseUrl;?>img/right-side.png" class="right-side">
			                            	<div class="col-xl-6 col-lg-6">
			                            		<div class="right-box p-3">
				                            		<div class="mb-4 mb-lg-2 text-center text-lg-right">
				                            			<img src="<?=$baseUrl;?>img/logo.png">
				                            		</div>
				                            		<div class="field-box bg-white">
				                            			<?php if(isset($_REQUEST['lmsg']) && !empty($_REQUEST['lmsg'])){ ?>										
				    										<p class="text-center text-uppercase sec-color"> <?='**'.$_REQUEST['lmsg'];?> </p>
				    									<?php } ?>
														
														<?php 

														// 1 :- Account is not activated 
														// 2 Or 3 :- Email & password is not currect
														if(isset($_SESSION['usermsg'])){
															if($_SESSION['usermsg'] == '1'){
																echo '<div class="alert alert-danger" id="UserAcknowledgementMSG" role="alert">Your Account is Not Activated Yet Please Contact to Admin...</div>';
																unset($_SESSION['usermsg']);
															}else if($_SESSION['usermsg'] == '2' || $_SESSION['usermsg'] == '3'){
																echo '<div class="alert alert-danger" id="UserAcknowledgementMSG" role="alert">Email or Password is Not Currect Please Try Again...</div>';
																unset($_SESSION['usermsg']);
															} 
														}	
														?>
														
						                                <h4 class="sec-color mb-4"> Sign In </h4>
						                                <div class="row">				                                	
						                                    
						                                    <div class="col-md-12">
						                                       	<div class="form-group">
						                                            <input type="email" class="form-control" id="txtemailid" name="txtemailid" placeholder="Email ID">
						                                        </div>
						                                        <div class="fld-error text-danger mb-3"><span id="erruEmail"></span></div>
						                                    </div>						                                    
						                                    
						                                    <div class="col-md-12">
						                                       	<div class="form-group">
						                                            <input type="password" class="form-control" id="txtpwd" name="txtpwd" placeholder="Password">
						                                        </div>
						                                        <div class="fld-error text-danger mb-3"><span id="errPwd"></span></div>
						                                    </div> 

						                                </div>

						                                <div class="row mt-2 mb-4">
						                                	
						                                	<div class="col-lg-4 col-md-3 mb-4 mb-md-0">
						                                		<ul class="list-inline mb-0">
							                                      <li class="text-center text-md-left"><button type="submit" class="dark-outline"> SignUp </button></li>
							                                  	</ul>
						                                	</div>
															
						                                	<div class="col-lg-8 col-md-9 text-md-right text-center">
						                                		<div class="d-md-flex align-items-center justify-content-md-end">
						                                			<a href="<?=$baseUrl;?>register.php" class="dark-outline theme-outline mt-2 mt-md-0"> Create New Profile </a>
						                                		</div>
						                                	</div>
						                            	</div>

						                                <div class="row">						                                	
						                                	<div class="col-lg-12 col-md-12 text-md-right text-center">
						                                		<div class="d-md-flex align-items-center justify-content-md-end">
						                                			<span class="font-weight-bold mr-3">Are you a Tutor?</span>
						                                			<a href="<?=$baseUrl;?>tutor/register.php" class="dark-outline theme-outline mt-2 mt-md-0">Create Free Profile</a>
						                                		</div>
						                                	</div>
						                            	</div>
				                            		</div>
				                            	</div>
			                            	</div>
			                            </div>			                           
			                        </div>			                       
			                        <div class="clearfix"></div>
			                    </div> 
			                </form>
			            </div>
			        </div>
		    	</div>
			</div>
		</section>
		<script src="js/custom.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript"> 
			$(document).ready( function() {
				$('#UserAcknowledgementMSG').delay(3000).fadeOut();
			});
		</script>
		<script type="text/javascript">
			function checkfieldsVerify(){
				
				document.getElementById('erruEmail').innerHTML = "";
				document.getElementById('errPwd').innerHTML = "";				
				if(document.getElementById('txtemailid').value==''){                    
					document.getElementById('txtemailid').focus();
					document.getElementById('erruEmail').innerHTML='Please enter email id..!';
					return false;
				}				
				if(document.getElementById('txtpwd').value==''){
					document.getElementById('txtpwd').focus();
					document.getElementById('errPwd').innerHTML='Please enter password...!';
					return false;
				}
				return true;
			}
		</script>
	</body>
</html>