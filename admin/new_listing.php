<!DOCTYPE html>
<html lang="en"> 
<?php session_start();
	include('../include/config.inc.php');
	$user_id = $_SESSION['usrid'];	
	if( ( !isset($_SESSION['usrname']) || $_SESSION['usrname'] == '' ) && ( !isset($_SESSION['usrid']) || $_SESSION['usrid'] == '' ) ){
        header( 'location:'. $baseUrl.'/admin' );
    }
     
	     $user_id = $_SESSION['usrid']; 

		//  echo $user_id;
	
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
				<div class="col-lg-12">
					<div class="row align-items-center mb-4">
						<div class="col-md-6 mb-3 mb-md-0">
							<h4 class="mb-0 page-title text-uppercase"><span class="vline"></span>Listing Management</h4>
						</div>
						<div class="col-md-6">
							<ul class="breadcrumbs font-weight-bold d-flex justify-content-md-end">
								<li><a href="<?php echo $baseUrl."/admin/dashboard.php"; ?>">Dashboard </a></li>
								<li>Listing Management</li>	
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-12 mb-4">
				    <div class="card-block p-4">
						<?php /*
				    	<div class="row align-items-center flex-column-reverse flex-md-row">
				    		<div class="col-xl-8 col-md-4 col-12 mb-3 mb-md-0">
				    			<a href="add-rider.html" class="theme-btn"><i class="fal fa-plus mr-2"></i> Add New Rider </a>
				    		</div>
				    		<div class="col-xl-4 col-md-8 col-12">
				    			<form class="filter">
				    				<div class="row">
				    					<div class="col-9">
				                <div class="form-group input-group mb-0 border shadow-none input-group-sm">
											    <input type="text" name="keyword" placeholder="Search for..." class="form-control shadow-none border-0">
											    <div class="input-group-prepend">
											       <span class="input-group-text border-0 bg-transparent">
										       		<button type="submit" class="bg-transparent border-0"><i class="far fa-search"></i></button>
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
				    	</div> */  ?>

					     <?php
				    	  $sql = "SELECT * FROM tutor_form_master";
						  $result = mysqli_query($con,$sql);
						  ?>
							<div class="table-responsive">
					    	<table class="table table-borderless table-striped">
					        <thead>
					            <tr>
				                <th scope="col">ID</th>
				                <th scope="col">Name</th>
								<th scope="col">Email</th>
				                <th scope="col">Phone</th>
				                <th scope="col">Message</th>
				                <!-- <th scope="col">Gender</th> -->
								<!-- <th>12345</th> -->
								<th>User type</th>
								<!-- <th>Action</th> -->
					            </tr>
						
					         </thead>
					        <tbody>
							<?php
							while($row = mysqli_fetch_assoc($result)){
								$id= $row['id'];
								$fname = $row['fname'];
								$email = $row['email'];
								$phone = $row['phone'];
								$message = $row['message'];
								// $gender = $row['gender'];
								$utype = $row['utype'];
								// if($gender == '1'){
								// 	$genderval = 'Man';
								// }else if($gender == '1'){
								// 	$genderval = 'Lady';
								// }else{
								// 	$genderval = 'Any';
								// }

								if($utype == '1'){
									$status_val = 'Student';
									$status_cls = 'text-success';
								}else{
									$status_val = 'Tutor';
									$status_cls = 'text-danger';
								}	
								?>
				            <tr>
			                <td><?php echo $id; ?></td>
			                <td><?php echo $fname; ?></td>
			                <td><?php echo $email; ?></td>
			                <td><?php echo $phone; ?></td>
			                <td><?php echo $message; ?></td>
							<td class="<?php echo $status_cls; ?>"><?php echo $status_val; ?></td>
			            
			                <!-- <td class="text-warning">In Process </td> -->
			               
				            </tr>
							<?php } ?>
					        </tbody>
							
					      </table>
							</div>
						</div>
				</div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
function chnagsstudentstatus(checkboxdtl,studentid){
	var change_status='';
	var action = "updatestatus"
	var currentval = $(checkboxdtl).attr("data-currentvalue");
	if(currentval == '1'){
		$(checkboxdtl).attr("data-currentvalue","0")
		change_status = 0;
	}else{
		$(checkboxdtl).attr("data-currentvalue","1")
		change_status = 1;
	}
	console.log("change_status");
	console.log(change_status)
	// alert(currentval);

	$.ajax({
		url: "ajax/ajaxuserupdate.php", //backend url
		type: 'post',
		dataType: "json",
		data: {action,action,studentid:studentid,change_status:change_status},
		success: function(response){
			console.log(response);
			if(response.status == '1'){
				location.reload();
			}
		}
	});

}

</script>

</body>
</html>