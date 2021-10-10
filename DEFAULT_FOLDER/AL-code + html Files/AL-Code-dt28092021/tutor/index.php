<?php include('../include/config.inc.php');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Auriv Learning | Tutor | Login </title> 
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
			                <form role="form" action="logintutor.php" method="post" class="login-box bg-white" onsubmit="return checkfieldsVerify();">
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
				                            			<h4 class="sec-color text-center mb-3 mt-lg-5"> Sign In </h4>
						                                <div class="row m-lg-5">						                                	
						                                    <div class="col-md-12 mb-lg-3">
						                                       	<div class="form-group">
						                                            <input type="text" class="form-control" name="txtemailid" id="txtemailid" placeholder="Email ID" />
						                                        </div>
						                                        <div class="fld-error text-danger mb-3"><span id="erruEmail"></span></div>
						                                    </div>
						                                    
						                                    <div class="col-md-12 mb-lg-3">
						                                       	<div class="form-group">
						                                            <input type="password" class="form-control" name="txtpwd" id="txtpwd" placeholder="Password" />
						                                        </div>
						                                        <div class="fld-error text-danger mb-3"><span id="errPwd"></span></div>
						                                    </div> 
						                                    
						                                    <div class="col-md-12 text-right">
						                                    	<input type="submit" value="Sign In" class="login-btn border-0 font-weight-bold mx-auto" />
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