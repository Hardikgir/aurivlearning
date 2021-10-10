<?php 
session_start();
include('../include/config.inc.php');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Auriv Learning | Tutor | Register </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?=$baseUrl;?>img/favicon.png" type="image/x-icon">  
		<!-- bootstarp -->
		<link rel="stylesheet" href="<?=$baseUrl?>css/bootstrap.min.css">
		<script src="<?=$baseUrl;?>js/jquery.min.js"></script>
		<script src="<?=$baseUrl;?>js/popper.min.js"></script>
		<script src="<?=$baseUrl;?>js/bootstrap.min.js"></script>
		<script src="<?=$baseUrl;?>js/wow.min.js"></script>
		<script src="<?=$baseUrl;?>js/jquery.matchHeight-min.js"></script>
		<!-- owl carousel -->  
		<link rel="stylesheet" href="<?=$baseUrl;?>css/owl.carousel.min.css">
		<link rel="stylesheet" href="<?=$baseUrl;?>css/owl.theme.default.min.css">
		<script src="<?=$baseUrl;?>js/owl.carousel.js"></script>
		<!-- custom js -->
		<!-- custom css -->
		<link rel="stylesheet" href="<?=$baseUrl;?>css/style.css">
		<link rel="stylesheet" href="<?=$baseUrl;?>css/responsive.css">
		<link rel="stylesheet" href="<?=$baseUrl;?>css/animate.css">
		<!-- fonts -->
		<script src="<?=$baseUrl?>js/font-awesome-5-pro.js"></script>
	</head>

	<body style="background: url(<?=$baseUrl;?>img/register-bg.png);background-size:cover;">

		<!-- header -->
		<header class="inner-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<nav class="navbar navbar-expand-lg p-0">
						  <a class="navbar-brand m-0 p-0" href="<?=$baseUrl?>">
						  	<img src="<?=$baseUrl?>img/logo.png" />
						  </a>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<section class="pt-5">
			<div class="container">
				<div class="row pt-5 mt-3 justify-content-center">
			        <div class="col-xl-10 col-lg-12">
			            <div class="wizard">
			                <form role="form" action="saveregistertutor.php" method="post" class="login-box bg-white" onsubmit="return verifyRegTutor();">
			                    <div class="tab-content" id="main_form">
			                        <div class="tab-pane active" role="tabpanel" id="step1">
			                            <div class="row justify-content-end">
			                            	<img src="<?=$baseUrl?>img/left-man.png" class="right-side"/>
			                            	<div class="col-xl-8 col-lg-8">
			                            		<div class="right-box p-3">
				                            		<div class="mb-4 mb-lg-2 text-center text-lg-right">
				                            			<img src="<?=$baseUrl?>img/logo.png"/>
				                            		</div>
				                            		<div class="field-box bg-white pt-5 pb-5 mb-5">
														<?php 
															if(isset($_SESSION['usermsg'])){
																if($_SESSION['usermsg'] == '4'){
																	echo '<div class="alert alert-danger" id="UserAcknowledgementMSG" role="alert">Email Already Registered</div>';
																	unset($_SESSION['usermsg']);
																}else if($_SESSION['usermsg'] == '0' || $_SESSION['usermsg'] == '2'){
																	echo '<div class="alert alert-danger" id="UserAcknowledgementMSG" role="alert">Something wrong...! Please Try Again..</div>';
																	unset($_SESSION['usermsg']);
																}
															}	
														?>
				                            			<h4 class="sec-color mb-lg-3"> Sign In details : </h4>
						                                <div class="row">
						                                	<div class="col-md-12">
						                                        <div class="form-group">
						                                            <input type="text" class="form-control" name="txtfname" id="txtfname" placeholder="Full Name" />
						                                        </div>
						                                        <div class="fld-error text-center mt-2"><span id="errfname"></span></div>
						                                    </div>
						                                    <div class="col-md-12">
						                                       	<div class="form-group">
						                                            <input type="email" class="form-control" name="txtemailid" id="txtemailid" placeholder="Email ID" />
						                                        </div>
						                                        <div class="fld-error mt-2 text-center"><span id="erremail"></span></div>
						                                    </div>
						                                    <div class="col-md-12">
						                                       	<div class="form-group">
						                                            <input type="text" class="form-control" name="txtphoneno" id="txtphoneno" placeholder="Phone Number" />
						                                        </div>
						                                        <div class="fld-error mt-2 text-center"><span id="errphone"></span></div>
						                                    </div>
						                                    <div class="col-md-12">
						                                       	<div class="form-group">
						                                            <input type="text" class="form-control" name="txtwportelegramno" id="txtwportelegramno" placeholder="WhatsApp / telegram number" />
						                                        </div>
						                                    </div>
						                                    <div class="col-md-12">
						                                       	<div class="form-group">
						                                            <input type="password" class="form-control" name="txtpwd" id="txtpwd" placeholder="Password" />
						                                        </div>
						                                        <div class="fld-error mt-2 text-center"><span id="errpwd"></span></div>
						                                    </div> 
						                                    <div class="col-md-12">
						                                       	<div class="form-group">
						                                            <input type="password" class="form-control" name="txtcnfrmpwd" id="txtcnfrmpwd" placeholder="Confirm Password" />
						                                        </div>
						                                        <div class="fld-error mt-2 text-center"><span id="errcmfrmpwd"></span></div>
						                                    </div>   
						                                    <div class="col-md-12">
						                                    	<input type="submit" value="Signup" class="login-btn border-0 font-weight-bold mx-auto" />
						                                    </div>                                 
						                                </div>
						                            </div>
				                            	</div>
			                            	</div>
			                            </div>
			                        </div>
			                    </div>
			                </form>
			            </div>
			        </div>
		    	</div>
			</div>
		</section>
		
		<script src="<?=$baseUrl;?>js/custom.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
			<script type="text/javascript"> 
			$(document).ready( function() {
				$('#UserAcknowledgementMSG').delay(3000).fadeOut();
			});
		</script>
		<script type="text/javascript">			
			function checkEmailFormat(email){
			    var result = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
			    return result.test(email);
			} 
			
			function verifyRegTutor(){

				document.getElementById('errfname').innerHTML = "";
			    document.getElementById('errphone').innerHTML = "";
			    document.getElementById('erremail').innerHTML = "";
			    document.getElementById('errcmfrmpwd').innerHTML = "";
			    document.getElementById('errpwd').innerHTML = "";	    
			    
			    if(document.getElementById('txtfname').value==''){                   
			        document.getElementById('txtfname').focus();
			        document.getElementById('errfname').innerHTML='Please Enter Full Name...!';
			        return false;
			    } 

			    if(document.getElementById('txtphoneno').value==''){                   
			        document.getElementById('txtphoneno').focus();
			        document.getElementById('errphone').innerHTML='Please Enter Phone No...!';
			        return false;
			    }   
			    
			    var user_email = document.getElementById('txtemailid').value;    
			    if(!checkEmailFormat(user_email)){        
			        document.getElementById('txtemailid').focus();
			        document.getElementById('erremail').innerHTML='Please Enter Valid Email Address...!';
			        return false;
			    }

			    if(document.getElementById('txtpwd').value==''){
			        document.getElementById('txtpwd').focus();
			        document.getElementById('errpwd').innerHTML='Please Enter Password...!';
			        return false;
			    }

			    if( (document.getElementById('txtcnfrmpwd').value=='') ){
			        document.getElementById('txtcnfrmpwd').focus();
			        document.getElementById('errcmfrmpwd').innerHTML='Please Enter Confirm Password...!';
			        return false;
			    }

			    if((document.getElementById('txtcnfrmpwd').value != document.getElementById('txtpwd').value)){
			    	document.getElementById('errcmfrmpwd').innerHTML='';
			        document.getElementById('txtcnfrmpwd').focus();
			        document.getElementById('errcmfrmpwd').innerHTML='Password not match...!';
			        return false;
			    }

			    return true;
			}
		</script>
	</body>
</html>