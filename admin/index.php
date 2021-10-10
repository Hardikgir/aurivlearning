<!DOCTYPE html> 
<html lang="en">
<?php include('common/head.php'); ?>
<body>

<section>
	<div class="container-fluid mb-lg-5">
			<div class="row">
				<div class="col-md-12 mb-4" style="height:100vh;">
					  <div class="login-box card-block p-4" style="transform: translate(-50%, -50%);left: 50%;top:50%;position:absolute;box-shadow: 0px -12px 0px #0d9047;">
					  	 <h4 class="mb-4 login-title page-title text-uppercase"><span class="vline"></span>Login</h4>
				       <form action="logincheck.php" method="post">
				    		<div class="row align-items-center">
					    		<div class="col-xl-12 mb-3">
	                    <div class="form-group">
	                        <label class="font-weight-bold mb-3">Email</label>
	                        <input type="text" class="form-control" name="txtemailid" placeholder="Enter Email">
	                    </div>
	                </div>
	                <div class="col-xl-12 mb-3">
	                    <div class="form-group">
	                        <label class="font-weight-bold mb-3">Password</label>
	                        <input type="password" class="form-control" name="txtpwd" placeholder="Enter Password">
	                    </div>
	                </div>
	                <div class="col-xl-12">
	                    <div class="form-group text-center">
	                        <button type="submit" class="theme-btn border-0">Login</button>
	                    </div>
	                </div>
	            </form>
						</div>
				</div>
			</div>
		</div>
</section>

<script src="../js/jquery.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/font-awesome-5-pro.js"></script>

</body>
</html>