  <header>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg p-0">
					  <a class="navbar-brand m-0 p-0" href="index.php">
					  	<img src="img/logo.png" />
					  </a>
					  <div class="mobile-menu-open d-block d-lg-none" onclick="openNav()">
							<i class="far fa-bars sec-color"></i>
					  </div>
					  <div class="collapse navbar-collapse d-block justify-content-end" id="collapsibleNavbar">
					   	<div id="mySidenav" class="sidenav">
					  		<a href="javascript:void(0)" class="closebtn d-lg-none" onclick="closeNav()"><i class="fal fa-times"></i></a>
                  <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item nk-nav-item">
                      <a class="nav-link nk-nav-link active" href="<?=$baseUrl;?>">Home</a>
                    </li>
                    <li class="nav-item nk-nav-item">
                        <a class="nav-link nk-nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item nk-nav-item">
                        <a class="nav-link nk-nav-link" href="#">Courses</a>
                    </li>
                    <li class="nav-item nk-nav-item">
                        <a class="nav-link nk-nav-link" href="#">Tutor</a>
                    </li>
                    <li class="nav-item nk-nav-item">
                        <a class="nav-link nk-nav-link" href="#">Student</a>
                    </li>
                    <li class="nav-item nk-nav-item">
                        <a class="nav-link nk-nav-link" href="#">Speial Needs</a>
                    </li>
                    <li class="nav-item nk-nav-item">
                        <a class="nav-link nk-nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item nk-nav-item">
                        <a class="nav-link nk-nav-link" href="#">Contact Us</a>
                    </li>
                    <?php if( array_key_exists('usrname',$_SESSION) && !empty($_SESSION['usrname']) ) { ?>
                    <li class="nav-item nk-nav-item">
                      <?php if( $_SESSION['usrtype'] == 3 ){ ?>
                        <a class="nav-link nk-nav-link login-btn" href="<?=$baseUrl;?>tutor/myprofile.php"> Profile </a>
                      <?php }else{ ?>
                        <a class="nav-link nk-nav-link login-btn" href="<?=$baseUrl;?>student/myprofile.php"> Profile </a>
                      <?php } ?>  
                    </li>
                    <li class="nav-item nk-nav-item">
                        <a class="nav-link nk-nav-link login-btn" href="<?=$baseUrl;?>logout.php"> Logout </a>
                    </li>
                    <?php } else{ ?>                    
                    <li class="nav-item nk-nav-item">
                        <a class="nav-link nk-nav-link login-btn" href="<?=$baseUrl;?>login.php">Log In</a>
                    </li>
                    <li class="nav-item nk-nav-item">
                        <a class="nav-link nk-nav-link login-btn" href="<?=$baseUrl;?>register.php">Register</a>
                    </li>
                    <?php } ?>
                  </ul>
              </div>  
            </div>
          </nav>
				</div>
			</div>
	 </div>
  </header>