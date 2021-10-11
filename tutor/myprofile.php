<?php session_start();
	include('../include/config.inc.php');	
	if( ( !isset($_SESSION['usrname']) || $_SESSION['usrname'] == '' ) && ( !isset($_SESSION['usrid']) || $_SESSION['usrid'] == '' ) ){
        header( 'location:'. $baseUrl );
    }
   
	$user_id = $_SESSION['usrid'];
	$sql = "SELECT * FROM tbl_regusers Where user_id =" .$user_id;
	//echo $sql;
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result); 

	// echo $sql;

	// echo '<pre> user_id ::';
	// print_r($user_id);
	// echo '</pre>';
	// // exit();

	// echo '<pre>';
	// print_r($row);
	// echo '</pre>';
	// // //exit();



?>
<!DOCTYPE html>
<html>

<head>
    <title> Auriv Learning | Tutor | My Profile </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <!-- bootstarp -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/jquery.matchHeight-min.js"></script>
    <!-- owl carousel -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <script src="../js/owl.carousel.js"></script>
    <!-- custom js -->
    <!-- custom css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/animate.css">
    <!-- fonts -->
    <script src="../js/font-awesome-5-pro.js"></script>
</head>

<body>

    <?php include( '../tutor/tutor.header.php');?>

    <section class="pt-0 pb-5">
        <div class="container">
            <?php if(isset($_REQUEST['lmsg']) && !empty($_REQUEST['lmsg'])){ ?>
            <h5 class="text-center text-uppercase sec-color"> <?='**'.$_REQUEST['lmsg'];?> </h5>
            <?php } ?>
            <div class="row">
                <div class="col-xl-3">
                    <?php include('../tutor/sidebar.php');?>
                </div>
                <div class="col-xl-9">
                    <div class="content-title">
                        <div class="row align-items-center position-relative mt-lg-5">
                            <div class="col-md-6 col-9 mb-3">
                                <div class="d-flex align-items-center">
                                    <button type="button" id="sidebarCollapse" class="btn btn-primary d-xl-none mr-3">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <h3 class="mb-0 page-title">My Profile</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 

							// 1:- Update your account...
							// 2:- Login Successfully....
							if(isset($_SESSION['usermsg'])){
								if($_SESSION['usermsg'] == '1'){
									echo '<div class="alert alert-success" id="UserAcknowledgementMSG" role="alert">Your Profile is Update Successfully...</div>';
									unset($_SESSION['usermsg']);
								}else if($_SESSION['usermsg'] == '2'){
									echo '<div class="alert alert-success" id="UserAcknowledgementMSG" role="alert">Login Successfull..</div>';
									unset($_SESSION['usermsg']);
								}else{
									echo '<div class="alert alert-danger" id="UserAcknowledgementMSG" role="alert">Your Profile is Not Update. Please Try Again...!</div>';
									unset($_SESSION['usermsg']);
								}
							}	
							?>
                    <div class="side-content pt-3 pb-0">
                        <div class="wizard theme-shadow bg-white p-4 rounded">
                            <form method="post" action="PhpTutorProfileUpdate.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <h6 class="mb-4">Having an authentic looking profile picture increases your
                                                chances of getting quick responsesfrom Tutors & Institutes.</h6>
                                        </div>
                                    </div>
                                    <div class="profile-pic col-md-12 mb-3">
                                        <div class="circle mb-3">
                                            <div class="profile-img position-relative">
                                                <img class="user-profile" src="../img/user.jpg">
                                                <div class="p-image">
                                                    <i class="fal fa-plus upload-button"></i>
                                                    <input class="file-upload" type="file" name="profile_img"
                                                        accept="image/*" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <h4>Personal Information</h4>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <h6 class="font-weight-bold mb-2">Name</h6>
                                            <input type="text" class="form-control" name="fname"
                                                value="<?php if(!empty($row ['fname'])) {echo $row['fname'];} ?>"
                                                placeholder="Anne Sullivan">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <h6 class="font-weight-bold mb-2">Email</h6>
                                            <input type="email" class="form-control" name="email"
                                                value="<?php if(!empty($row ['email'])) {echo $row['email'];} ?>"
                                                placeholder="xyz@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <h6 class="font-weight-bold mb-2">Phone number</h6>
                                            <input type="text" class="form-control" name="phone"
                                                value="<?php if(!empty($row ['phone'])){echo $row['phone'];} ?>"
                                                placeholder="+ 91 78945 78956">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <h6 class="font-weight-bold mb-2">Whatsapp/telegram number </h6>
                                            <input type="text" class="form-control" name="wportelegramno"
                                                value="<?php if(!empty($row['wportelegramno'])){echo $row['wportelegramno']; } ?>"
                                                placeholder=" + 91 45785 12545">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <h6 class="font-weight-bold mb-2">Gender</h6>
                                            <div class="theme-radio radio-inline">
                                                <input type="radio" id="Male" name="gender" value="1"
                                                    <?php if(!empty($row['gender'])) { if($row['gender'] == "1"){ echo "checked"; } } ?>>
                                                <label for="Male" class="text-uppercase">Male</label>
                                            </div>
                                            <div class="theme-radio radio-inline ml-2">
                                                <input type="radio" id="Female" name="gender" value="2"
                                                    <?php if(!empty($row['gender'])) { if($row['gender'] == "2"){ echo "checked"; } } ?>>
                                                <label for="Female" class="text-uppercase">Female</label>
                                            </div>
                                            <div class="theme-radio radio-inline ml-2">
                                                <input type="radio" id="Other" name="gender" value="3"
                                                    <?php if(!empty($row['gender'])) { if($row['gender'] == "3"){ echo "checked"; } } ?>>
                                                <label for="Other" class="text-uppercase">Other</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <?php
						// echo '<pre>';
						// print_r($row);
						// echo '</pre>';
						// exit();
						  ?> -->

                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <h6 class="font-weight-bold mb-2">Language Known</h6>
                                            <input type="text" class="form-control" name="lang_known"
                                                value="<?php if(!empty($row['language_known'])) { echo $row['language_known']; } ?>"
                                                placeholder="English">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <h6 class="font-weight-bold mb-2">Identification type</h6>
                                            <input type="text" class="form-control" name="identification"
                                                value="<?php if(!empty($row['identification_type'])) { echo $row['identification_type']; } ?>"
                                                placeholder="8900 0089 0000 89000">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <h6 class="font-weight-bold mb-2">Identification Number</h6>
                                            <input type="text" class="form-control" name="inden_num"
                                                value="<?php if(!empty($row['identification_number'])) { echo $row['identification_number']; } ?>"
                                                placeholder="8900 0089 0000 89000">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <h6 class="font-weight-bold mb-2">Highest qualification</h6>
                                            <input type="text" class="form-control" name="high_qulifi"
                                                value="<?php if(!empty($row['high_qulifi'])) { echo $row['high_qulifi']; } ?>"
                                                placeholder="Masters In Teaching">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <h6 class="font-weight-bold mb-2">Teaching Experience</h6>
                                            <input type="text" class="form-control" name="teach_exp"
                                                value="<?php if(!empty($row['teaching_experience'])) { echo $row['teaching_experience']; } ?>"
                                                placeholder="5 years">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <h6 class="font-weight-bold mb-2">Subject Preference</h6>
                                            <input type="text" class="form-control" name="sub_pref"
                                                value="<?php if(!empty($row['subject_preference'])) { echo $row['subject_preference']; } ?>"
                                                placeholder="Subject Preference">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <h6 class="font-weight-bold mb-2">Extra curricular Activity Preference</h6>
                                            <input type="text" class="form-control" name="activ_pref"
                                                value="<?php  if(!empty($row['extra_curricular_activity_preference'])) {  echo $row['extra_curricular_activity_preference']; } ?>"
                                                placeholder="Research">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <h6 class="font-weight-bold mb-2">Bio</h6>
                                            <textarea class="form-control" rows="5" name="bio"
                                                placeholder="Add Your Bio"><?php if(!empty($row['bio'])){ echo $row['bio'];  } ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <input type="submit" value="submit" name="submit"
                                                class="login-btn font-weight-bold	 border-0" required>
                                        </div>
                                    </div>

                                </div>
                                <!-- </form> -->
                                <div id="payment-method" class="row">
                                    <div class="col-md-12 mb-3">
                                        <h4>Bank Information</h4>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-3">
                                        <div class="payment-box">
                                            <div class="d-flex align-items-center">
                                                <img src="../img/phone-pay.svg" class="payment-ico mr-2">
                                                <h5 class="mb-0 dash-color">Add Phonepay Number</h5>
                                            </div>
                                            <a data-toggle="collapse" href="#phonepay" role="button"
                                                aria-expanded="false" aria-controls="collapseExample"
                                                class="collapsed"><i class="fal fa-minus-circle add-more"></i></a>
                                            <div class="collapse" id="phonepay" data-parent="#payment-method">
                                                <div class="more-content pt-3 pb-3">
                                                    <!-- <form> -->
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="+ 91 78945 78956">
                                                    </div>
                                                    <div class="form-group">
                                                        <a class="login-btn border-0 font-weight-bold">Add</a>
                                                    </div>
                                                    <!-- </form> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-3">
                                        <div class="payment-box">
                                            <div class="d-flex align-items-center">
                                                <img src="../img/google-pay.svg" class="payment-ico mr-2">
                                                <h5 class="mb-0 dash-color">Add G-Pay Number</h5>
                                            </div>
                                            <a data-toggle="collapse" href="#googlepay" role="button"
                                                aria-expanded="false" aria-controls="collapseExample"
                                                class="collapsed"><i class="fal fa-minus-circle add-more"></i></a>
                                            <div class="collapse" id="googlepay" data-parent="#payment-method">
                                                <div class="more-content pt-3 pb-3">
                                                    <!-- <form> -->
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="+ 91 78945 78956">
                                                    </div>
                                                    <div class="form-group">
                                                        <a class="login-btn border-0 font-weight-bold">Add</a>
                                                    </div>
                                                    <!-- </form> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-3">
                                        <div class="payment-box">
                                            <div class="d-flex align-items-center">
                                                <img src="../img/upi.svg" class="payment-ico mr-2">
                                                <h5 class="mb-0 dash-color">Add UPI</h5>
                                            </div>
                                            <a data-toggle="collapse" href="#upi" role="button" aria-expanded="false"
                                                aria-controls="collapseExample" class="collapsed"><i
                                                    class="fal fa-minus-circle add-more"></i></a>
                                            <div class="collapse" id="upi" data-parent="#payment-method">
                                                <div class="more-content pt-3 pb-3">
                                                    <!-- <form> -->
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter UPI Id">
                                                    </div>
                                                    <div class="form-group">
                                                        <a class="login-btn border-0 font-weight-bold">Add</a>
                                                    </div>
                                                    <!-- </form> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 mb-3">
                                        <div class="payment-box">
                                            <div class="d-flex align-items-center">
                                                <h5 class="mb-0 dash-color">Add Your Bank Account</h5>
                                            </div>
                                            <a data-toggle="collapse" href="#bank" role="button" aria-expanded="false"
                                                aria-controls="collapseExample" class="collapsed"><i
                                                    class="fal fa-minus-circle add-more"></i></a>
                                            <div class="collapse" id="bank" data-parent="#payment-method">
                                                <div class="more-content pt-3 pb-3">
                                                    <!-- <form> -->
                                                    <div class="row">
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="form-group">
                                                                <h6 class="font-weight-bold mb-2">Bank Account Number
                                                                </h6>
                                                                <input type="text" class="form-control"
                                                                    placeholder="8900 0089 0000 89000">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="form-group">
                                                                <h6 class="font-weight-bold mb-2">Confirm Bank Account
                                                                    Number</h6>
                                                                <input type="text" class="form-control"
                                                                    placeholder="8900 0089 0000 89000">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="form-group">
                                                                <h6 class="font-weight-bold mb-2">IFSC CODE</h6>
                                                                <input type="text" class="form-control"
                                                                    placeholder="BARB0123">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="form-group">
                                                                <h6 class="font-weight-bold mb-2">Bank Branch</h6>
                                                                <input type="text" class="form-control"
                                                                    placeholder="XYZ Branch">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <a class="login-btn border-0 font-weight-bold w-auto">Add
                                                                    Bank Account</a>
                                                            </div>
                                                        </div>


                                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>

    <?php include('../include/footer.inc.php');?>

    <script src="../js/custom.js"></script>
    <script src="../js/custom.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#UserAcknowledgementMSG').delay(3000).fadeOut();
    });
    </script>

</body>

</html>