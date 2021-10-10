<?php 

$link = $_SERVER['PHP_SELF'];
$link_array = explode('/',$link);
$page = end($link_array); 


?>
<nav id="sidebar">
		<a href="#" class="logo text-center mb-3" name="logo">
			<img src="img/logo.png">
		</a>
		
		<ul class="list-unstyled components mb-5">
			<a href="javascript:void(0)" class="closebtn d-none">&times;</a>
			<li <?php if($page == 'dashboard.php') { ?> class="active" <?php } ?>>
				<a href="dashboard.php"><img src="img/dash-ico.svg" class="mr-2" alt="Dash Ico"> Dashboard </a>
			</li>
			
			<!-- <li>
				<div class="dropdown">
				  <a href="#" data-toggle="dropdown"><img src="img/banner-ico.svg" class="mr-2" alt="Banner Ico">Banner Groups<i class="far fa-chevron-down drop-icon"></i></a>
				  <div class="dropdown-menu">
				    <ul>
						<li>
						  <a href="#" class="dropdown-item">Item 1 </a>
						</li>
						<li>
						  <a href="#" class="dropdown-item">Item 2</a>
						</li>
						<li>
						  <a href="#" class="dropdown-item">Item 3</a>
						</li>
						<li>
						  <a href="#" class="dropdown-item">Item 4</a>
						</li>
					</ul>
				  </div>
				</div>
			</li> -->
			<li <?php if($page == 'studentlist.php') { ?> class="active" <?php } ?>>
				<a href="studentlist.php"><img src="img/discount-ico.svg" class="mr-2" alt="Discount Ico">Student</a>
			</li>
            <li <?php if($page == 'tutorlist.php') { ?> class="active" <?php } ?>>
				<a href="tutorlist.php"><img src="img/discount-ico.svg" class="mr-2" alt="Discount Ico">Tutor</a>
			</li>
			<li <?php if($page == 'payments.php') { ?> class="active" <?php } ?>>
				<a href="payments.php"><img src="img/discount-ico.svg" class="mr-2" alt="Discount Ico">Payments</a>
			</li>
			<li <?php if($page == 'supportlisting.php') { ?> class="active" <?php } ?>>
				<a href="supportlisting.php"><img src="img/discount-ico.svg" class="mr-2" alt="Discount Ico">Support</a>
			</li>
			<li <?php if($page == 'new_learning.php') { ?> class="active" <?php } ?>>
				<a href="new_learning.php"><img src="img/discount-ico.svg" class="mr-2" alt="Discount Ico">Learning</a>
			</li>
			<li <?php if($page == 'new_listing.php') { ?> class="active" <?php } ?>>
				<a href="new_listing.php"><img src="img/discount-ico.svg" class="mr-2" alt="Discount Ico">Listing</a>
			</li>



			<!-- <li>
				<div class="dropdown">
				  <a href="#" data-toggle="dropdown"><img src="img/banner-ico.svg" class="mr-2" alt="Banner Ico">Rider Management<i class="far fa-chevron-down drop-icon"></i></a>
				  <div class="dropdown-menu">
				    <ul>
							<li>
							  <a href="rider-management.html" class="dropdown-item">Rider Management</a>
							</li>
							<li>
							  <a href="add-rider.html" class="dropdown-item">Add New Rider</a>
							</li>
						</ul>
				  </div>
				</div>
			</li> -->
			<!-- <li class="active">
				<div class="dropdown">
				  <a href="#" data-toggle="dropdown"><img src="img/schedule-ico.svg" class="mr-2" alt="Banner Ico">Rider Schedule<i class="far fa-chevron-down drop-icon"></i></a>
				  <div class="dropdown-menu">
				    <ul>
							<li>
							  <a href="rider-schedule.html" class="dropdown-item">Rider Schedule</a>
							</li>
							<li>
							  <a href="add-rider-schedule.html" class="dropdown-item">Add Rider Schedule</a>
							</li>
						</ul>
				  </div>
				</div>
			</li> -->
			<!-- <li>
				<div class="dropdown">
				  <a href="#" data-toggle="dropdown"><img src="img/schedule-ico.svg" class="mr-2" alt="Banner Ico">Rider Time Management<i class="far fa-chevron-down drop-icon"></i></a>
				  <div class="dropdown-menu">
				    <ul>
						<li>
						  <a href="time-management.html" class="dropdown-item">Rider Time Management</a>
						</li>
						<li>
						  <a href="add-time-slot.html" class="dropdown-item">Add Time Slot</a>
						</li>
					</ul>
				  </div>
				</div>
			</li> -->
			<!-- <li>
				<a href="#"><img src="img/notify-ico.svg" class="mr-2">Rider Notifications</a>
			</li> -->
			<!-- <li>
				<a href="#"><img src="img/partner-ico.svg" class="mr-2">Partner Management</a>
			</li> -->
			<!-- <li>
				<a href="#"><img src="img/account-ico.svg" class="mr-2">Bank account section</a>
			</li> -->
			<!-- <li>
				<a href="#"><img src="img/section-ico.svg" class="mr-2">Other section</a>
			</li> -->
			<!-- <li>
				<a href="#"><img src="img/rider-ico.svg" class="mr-2">Partner Messaging</a>
			</li> -->
			<!-- <li>
				<a href="#"><img src="img/notify-ico.svg" class="mr-2">Partner Notifications</a>
			</li> -->
			<!-- <li>
				<a href="#"><img src="img/rider-ico.svg" class="mr-2">Category Management</a>
			</li> -->
			<!-- <li>
				<a href="#"><img src="img/partner-ico.svg" class="mr-2">Sub-category Management</a>
			</li> -->
			<!-- <li>
				<a href="#"><img src="img/banner-ico.svg" class="mr-2" alt="Banner Ico">Reviews and Ratings</a>
			</li> -->
			<!-- <li>
				<a href="#"><img src="img/section-ico.svg" class="mr-2">Service Area</a>
			</li> -->
			<!-- <li>
				<a href="#"><img src="img/notify-ico.svg" class="mr-2">Service Distance</a>
			</li> -->
			<!-- <li>
				<a href="#"><img src="img/notify-ico.svg" class="mr-2">Locations</a>
			</li>	 -->
			<!-- <li>
				<a href="#"><img src="img/rider-ico.svg" class="mr-2">Contact Settings</a>
			</li>	 -->
			<!-- <li>
				<a href="#"><img src="img/notify-ico.svg" class="mr-2">GIVE User Notifications</a>
			</li>	 -->
			<!-- <li>
				<a href="#"><img src="img/notify-ico.svg" class="mr-2">Reports</a>
			</li>	 -->
		</ul>
	</nav>
