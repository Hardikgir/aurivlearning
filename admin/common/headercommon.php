<div class="pt-4 pb-lg-4 mb-3 position-relative">
			<div class="container-fluid">
				<div class="row align-items-center position-relative">
					<button type="button" id="sidebarCollapse" class="btn" name="collapsebtn">
						<i class="fa fa-bars"></i>
					</button>
					<div class="title-set col-lg-6 mb-4 mb-lg-0 order-2 order-lg-1">
						<h3 class="mb-1 font-weight-bold theme-color">Hello, <span class="sec-color"><?php echo $_SESSION['usrname']; ?></span></h3>
						<span>Lorem Ipsum is simply dummy text of the printing</span>
					</div>
					<div class="col-lg-6 text-right order-1 order-lg-2 mb-5 mb-lg-0">
						 <ul class="navbar-right list-inline float-right mb-0 d-flex">
						 	<!-- message -->
              <!-- <li class="notification-list list-inline-item d-none d-md-block">
                  <div class="notify-btn">
                  	<select class="form-control border-0" name="language">
                  		<option value="english">English</option>
                  		<option value="arabic">Arabic</option>
                  	</select>
                  </div>
              </li> -->
              <!-- notification -->
              <li class="notification-list list-inline-item">
                  <div class="notify-btn">
                  	<a href="#"><i class="far fa-bell"></i>
                  	<span class="badge badge-pill badge-danger noti-icon-badge"></span></a>
                  </div>
              </li>
							<li class="dropdown notification-list list-inline-item">
                  <div class="dropdown notification-list nav-pro-img">
	                  	<div class="notify-btn">
	                      <a class="dropdown-toggle nav-link arrow-none nav-user d-flex align-items-center p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
	                          <div>
	                          	<img src="img/user.jpg" alt="user" class="mr-3">
	                          </div>
	                          <div class="text-left">
	                          	<h6 class="m-0 username">John Doe<i class="fal fa-chevron-down ml-2"></i></h6>
	                          </div>
	                      </a>
	                      <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
	                          <!-- item-->
	                          <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Profile</a>
	                          <a class="dropdown-item d-block" href="#">Settings</a>
	                          <a class="dropdown-item text-danger" href="<?php echo $baseUrl."admin/logoutadmin.php" ?>"><i class="mdi mdi-power text-danger"></i> Logout</a>
	                      </div>
	                    </div>
                  </div>
              </li>	
						</ul>
					</div>
				</div>
			</div>
		</div>