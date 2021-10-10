<!DOCTYPE html>
<html lang="en"> 
<?php session_start();
	include('../include/config.inc.php');
	$user_id = $_SESSION['usrid'];	
	if( ( !isset($_SESSION['usrname']) || $_SESSION['usrname'] == '' ) && ( !isset($_SESSION['usrid']) || $_SESSION['usrid'] == '' ) ){
        header( 'location:'. $baseUrl.'/admin' );
    }
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
							<h4 class="mb-0 page-title text-uppercase"><span class="vline"></span>Student Management</h4>
						</div>
						<div class="col-md-6">
							<ul class="breadcrumbs font-weight-bold d-flex justify-content-md-end">
								<li><a href="<?php echo $baseUrl."/admin/dashboard.php"; ?>">Dashboard </a></li>
								<li>Student Management</li>	
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
				    	//   $sql = "SELECT * FROM tbl_regusers where utype = '1'";
						//   $result = mysqli_query($con,$sql);
                          $sql = "SELECT * FROM  tbl_payment_master";			
							// echo $sql;				
	                        $result = mysqli_query($con,$sql);
	                       if(mysqli_num_rows($result)>0){
						  ?>
							<div class="table-responsive">
					    	<table class="payment table table-borderless">
									<thead>
										<tr>
											<th>Sr No.</th>
											<th>Date</th>
											<th>Amount</th>
											<th>Payment Mode</th>
											<th>Description</th>
											<th>Status</th>
										</tr>
									</thead>
									<?php 
									$i = 1;
									while($row = mysqli_fetch_assoc($result)){
										// $input = '06/10/2011 19:00:02';
										$date = strtotime($row['created_at']);
										$created_date = date('d-M-Y', $date);
										if($row['status'] == '1'){
											$payment_title = 'Approval';
											$payment_class = 'text-success';
										}else if($row['status'] == '2'){
											$payment_title = 'Rejected';
											$payment_class = 'text-success';
										}else if($row['status'] == '3'){
											$payment_title = 'Pending';
											$payment_class = 'text-success';
										}

									?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $created_date; ?></td>
										<td><strong>$<?php echo $row['amount']; ?></strong></td>
										<td><?php echo $row['payment_mode']; ?></td>
										<td class="description"><?php echo $row['description']; ?></td>
										<td class="<?php echo $payment_class; ?>"><?php echo $payment_title; ?></td>
									</tr>
									<?php $i++; } ?>									
									
								</table>
                                <?php } else{
                                    echo "No Payment yet";
                                } ?>
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