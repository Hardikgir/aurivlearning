						<?php 
							$profile_img = $baseUrl.'Profile_image/dummy_profile.png';
							if((isset($_SESSION['user_profile'])) && (!empty($_SESSION['user_profile']))){

								$profile_img = $baseUrl."Profile_image/".$_SESSION['user_profile'];
							}
							if(isset($_SESSION['location'])){
								$location = $_SESSION['location'];
							}
							
						?>
						<nav id="sidebar" class="mt-4">
							<div class="user-box text-center mb-4">
								<div class="user-img mb-2">
									<img src="<?=$profile_img;?>">
								</div>
								<div class="user-content">
									<h5 class="mb-1"><a href="myprofile.php"><?php echo $_SESSION['usrname'] ?></a></h5>
									<p class="mb-0">1 Learning Need</p>
									<?php if((isset($_SESSION['location'])) && (!empty($_SESSION['location']))){ ?>
										<div class="location dash-color">
										<i class="fas fa-map-marker-alt mr-1"></i><span><?php echo $_SESSION['location']; ?></span>
									</div>
									<?php } ?>									
								</div>
							</div>
							<ul class="list-unstyled components mb-0">
								<a href="javascript:void(0)" class="closebtn d-none">&times;</a>
								<li>
									<a href="paymenthistory.php"><img src="../img/payment-ico.svg" class="mr-3">Payment History<i class="fas fa-chevron-right drop-icon"></i></a>
								</li>
								<li>
									<a href="trackprocess.php"><img src="../img/track-ico.svg" class="mr-3">Track Your Progress<i class="fas fa-chevron-right drop-icon"></i></a>
								</li>
								<li>
									<a href="classessummary.php"><img src="../img/classes-ico.svg" class="mr-3"> Classes Summary<i class="fas fa-chevron-right drop-icon"></i></a>
								</li>
								<li>
									<a href="forms.php"><img src="../img/forms-ico.svg" class="mr-3"> Forms <i class="fas fa-chevron-right drop-icon"></i></a>
								</li>
								<li>
									<a href="newlearning.php"><img src="../img/learning-ico.svg" class="mr-3">Post-New Learning  Requirement<i class="fas fa-chevron-right drop-icon"></i></a>
								</li>
								<li>
									<a href="support.php"><img src="../img/support-ico.svg" class="mr-3">Support<i class="fas fa-chevron-right drop-icon"></i></a>
								</li>
							</ul>
						</nav>