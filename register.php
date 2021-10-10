<?php include('include/config.inc.php');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Auriv Learning | Register </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">  
		<!-- bootstarp -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.matchHeight-min.js"></script>
		<!-- owl carousel -->  
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<script src="js/owl.carousel.js"></script>
		<!-- custom js -->
		<!-- custom css -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="css/animate.css">
		<!-- fonts -->
		<script src="js/font-awesome-5-pro.js"></script>
	</head>

	<body style="background: url(img/register-bg.png);background-size: cover;">

		<!-- header -->
		<header class="inner-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<nav class="navbar navbar-expand-lg p-0">
							<a class="navbar-brand m-0 p-0" href="<?=$baseUrl;?>">
								<img src="img/logo.png" />
							</a>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header -->

		<section class="pt-5">
			<div class="container">
				<div class="row pt-5 mt-3 justify-content-center">
			        <div class="col-xl-10 col-lg-12">			        	
			            <div class="wizard">
			                <div class="wizard-inner">
			                    <div class="connecting-line"></div>
			                    <ul class="nav nav-tabs justify-content-center" role="tablist">
			                        <li role="presentation" class="active">
			                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab"></span></a>
			                        </li>
			                        <li role="presentation" class="disabled">
			                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab"></span></a>
			                        </li>
			                        <li role="presentation" class="disabled">
			                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab"></span></a>
			                        </li>
			                    </ul>
			                </div>
			                <?php if(isset($_REQUEST['lmsg']) && !empty($_REQUEST['lmsg'])){ ?>										
								<h5 class="text-center text-uppercase sec-color mb-4"> <?='**'.$_REQUEST['lmsg'];?> </h5>
							<?php } ?>
							<form role="form" method="post" action="saveregisterstudentparentfm.php" class="login-box bg-white">
			                    <div class="tab-content" id="main_form">
			                        <div class="tab-pane active" role="tabpanel" id="step1">
			                            <div class="row justify-content-end">
			                            	<img src="img/right-side.png" class="right-side">
			                            	<div class="col-xl-8 col-lg-12">
			                            		<div class="right-box p-3">
				                            		<div class="mb-4 mb-lg-2 text-center text-lg-right">
				                            			<img src="img/logo.png">
				                            		</div>
				                            		<div class="field-box bg-white">
				                            			<h4 class="sec-color mb-3"> Select Details </h4>
						                                <div class="row mb-3">
						                                	<div class="col-md-6">
						                                       	<div class="form-group">
						                                            <select class="form-control" name="selgrade">
						                                            	<option value=""> Select Grade </option>
						                                            	<option value="1"> A </option>
						                                            	<option value="2"> B </option>
						                                            	<option value="3"> C </option>
						                                            </select>
						                                        </div>
						                                    </div>
						                                    <div class="col-md-6">
						                                       	<div class="form-group">
						                                            <select class="form-control" name="selage">
						                                            	<option value=""> Select Age (In Years ) </option>
						                                            <?php for($i=10;$i<=30;$i++){ ?>	
						                                            	<option value="<?=$i;?>"><?=$i;?></option>
						                                            <?php } ?>	
						                                            </select>
						                                        </div>
						                                    </div> 
						                                    <div class="col-md-6">
						                                        <div class="form-group">
						                                            <select class="form-control" name="selsubject">
						                                            	<option value="">Select Subject</option>
						                                            	<option value="1"> Subject-1 </option>
						                                            	<option value="2"> Subject-2 </option>
						                                            	<option value="3"> Subject-3 </option>
						                                            </select>
						                                        </div>
						                                    </div>
						                                    <div class="col-md-6">
						                                       	<div class="form-group">
						                                            <select class="form-control" name="selsyllabus">
						                                            	<option value=""> Select Syllabus </option>
						                                            	<option value="1"> Syllabus-1 </option>
						                                            	<option value="2"> Syllabus-2 </option>
						                                            	<option value="3"> Syllabus-3 </option>
						                                            </select>
						                                        </div>
						                                    </div> 
						                                    <div class="col-md-6">
						                                        <div class="form-group">
						                                            <select class="form-control" name="selactivity">
						                                            	<option value=""> Select Extra-Curricular Activity </option>
						                                            	<option value="1"> Activity-01 </option>
						                                            	<option value="2"> Activity-02 </option>
						                                            	<option value="3"> Activity-03 </option>
						                                            </select>
						                                        </div>
						                                    </div>
						                                    <div class="col-md-6">
						                                        <div class="form-group">
						                                            <select class="form-control" name="selanguage">
						                                            	<option value=""> Select Language </option>
						                                            	<option value="AF">Afrikaans</option>
																		<option value="SQ">Albanian</option>
																		<option value="AR">Arabic</option>
																		<option value="HY">Armenian</option>
																		<option value="EU">Basque</option>
																		<option value="BN">Bengali</option>
																		<option value="BG">Bulgarian</option>
																		<option value="CA">Catalan</option>
																		<option value="KM">Cambodian</option>
																		<option value="ZH">Chinese (Mandarin)</option>
																		<option value="HR">Croatian</option>
																		<option value="CS">Czech</option>
																		<option value="DA">Danish</option>
																		<option value="NL">Dutch</option>
																		<option value="EN">English</option>
																		<option value="ET">Estonian</option>
																		<option value="FJ">Fiji</option>
																		<option value="FI">Finnish</option>
																		<option value="FR">French</option>
																		<option value="KA">Georgian</option>
																		<option value="DE">German</option>
																		<option value="EL">Greek</option>
																		<option value="GU">Gujarati</option>
																		<option value="HE">Hebrew</option>
																		<option value="HI">Hindi</option>
																		<option value="HU">Hungarian</option>
																		<option value="IS">Icelandic</option>
																		<option value="ID">Indonesian</option>
																		<option value="GA">Irish</option>
																		<option value="IT">Italian</option>
																		<option value="JA">Japanese</option>
																		<option value="JW">Javanese</option>
																		<option value="KO">Korean</option>
																		<option value="LA">Latin</option>
																		<option value="LV">Latvian</option>
																		<option value="LT">Lithuanian</option>
																		<option value="MK">Macedonian</option>
																		<option value="MS">Malay</option>
																		<option value="ML">Malayalam</option>
																		<option value="MT">Maltese</option>
																		<option value="MI">Maori</option>
																		<option value="MR">Marathi</option>
																		<option value="MN">Mongolian</option>
																		<option value="NE">Nepali</option>
																		<option value="NO">Norwegian</option>
																		<option value="FA">Persian</option>
																		<option value="PL">Polish</option>
																		<option value="PT">Portuguese</option>
																		<option value="PA">Punjabi</option>
																		<option value="QU">Quechua</option>
																		<option value="RO">Romanian</option>
																		<option value="RU">Russian</option>
																		<option value="SM">Samoan</option>
																		<option value="SR">Serbian</option>
																		<option value="SK">Slovak</option>
																		<option value="SL">Slovenian</option>
																		<option value="ES">Spanish</option>
																		<option value="SW">Swahili</option>
																		<option value="SV">Swedish </option>
																		<option value="TA">Tamil</option>
																		<option value="TT">Tatar</option>
																		<option value="TE">Telugu</option>
																		<option value="TH">Thai</option>
																		<option value="BO">Tibetan</option>
																		<option value="TO">Tonga</option>
																		<option value="TR">Turkish</option>
																		<option value="UK">Ukrainian</option>
																		<option value="UR">Urdu</option>
																		<option value="UZ">Uzbek</option>
																		<option value="VI">Vietnamese</option>
																		<option value="CY">Welsh</option>
																		<option value="XH">Xhosa</option>
						                                            </select>
						                                        </div>
						                                    </div>
						                                    <div class="col-md-12">
						                                        <div class="form-group">
						                                           <textarea class="form-control" rows="5" placeholder="Did not find what you were looking for, do let us know about your requirement" name="txtaboutyourequirement"></textarea>
						                                        </div>
						                                    </div>
						                                </div> 
						                                <h4 class="sec-color mb-4"> Sign up details : </h4>
						                                <div class="row">
						                                	<div class="col-lg-12 mb-2">
						                                		<div class="theme-radio radio-inline">
															      <input type="radio" value="1" id="Student" name="gpstudorparent" checked />
																	<label for="Student"> Student </label>
															    </div>
															    <div class="theme-radio radio-inline ml-3">
															      <input type="radio" value="2" id="Parent" name="gpstudorparent" />
																	<label for="Parent"> Parent </label>
															    </div>
															</div>
						                                    <div class="col-md-6">
						                                        <div class="form-group">
						                                            <input type="text" class="form-control" placeholder="Full Name" name="txtfname" id="txtfname" />
						                                        </div>
						                                    </div>
						                                    <div class="col-md-6">
						                                       	<div class="form-group">
						                                            <input type="text" class="form-control" placeholder="Email ID" name="txtemail" />
						                                        </div>						                                        
						                                    </div>
						                                    <div class="col-md-6">
						                                       	<div class="form-group">
						                                            <input type="text" class="form-control" placeholder="Phone Number" name="txtphone" />
						                                        </div>
						                                    </div>
						                                    <div class="col-md-6">
						                                       	<div class="form-group">
						                                            <input type="text" class="form-control" placeholder="WhatsApp / telegram number" name="txtwportelegramno" />
						                                        </div>
						                                    </div>
						                                    <div class="col-md-6">
						                                       	<div class="form-group">
						                                            <input type="password" class="form-control" placeholder="Password" name="txtpwd" />
						                                        </div>						                                        
						                                    </div> 
						                                    <div class="col-md-6">
						                                       	<div class="form-group">
						                                            <input type="password" class="form-control" placeholder="Confirm Password" name="txtcnfmpwd" />
						                                        </div>						                                        
						                                    </div>                                    
						                                </div>						                                
						                                <div class="row">
						                                	<div class="col-lg-4 col-md-3 mb-4 mb-md-0">
						                                		<ul class="list-inline mb-0">
							                                      <li class="text-center text-md-left"><button type="button" class="dark-outline next-step">Next</button></li>
							                                  	</ul>
						                                	</div>
						                                	<div class="col-lg-8 col-md-9 text-md-right text-center">
						                                		<div class="d-md-flex align-items-center justify-content-md-end">
						                                			<span class="font-weight-bold mr-3">Are you a Tutor?</span>
						                                			<a href="<?=$baseUrl;?>tutor/register.php" class="dark-outline theme-outline mt-2 mt-md-0">Create Free Profile</a>
						                                		</div>
						                                	</div>
						                            	</div>
				                            		</div>
				                            	</div>
			                            	</div>
			                            </div>
			                        </div>
			                        <div class="tab-pane" role="tabpanel" id="step2">
			                            <div class="row justify-content-end">
			                            	<img src="img/right-side.png" class="right-side">
			                            	<div class="col-xl-8 col-lg-12">
			                            		<div class="right-box p-3">
				                            		<div class="mb-4 mb-lg-2 text-center text-lg-right">
				                            			<img src="img/logo.png">
				                            		</div>
				                            		<div class="field-box bg-white">
				                            			<h4 class="sec-color mb-3">Price Slab</h4>
					                                <div class="row">
					                                    <div class="col-xl-4 col-md-6 mb-5">
					                                        <div class="boxed price-box">
					                                        	<input type="radio" id="price1" name="gpriceslab" value="200" />
																<label for="price1">
																	<div class="tick">
																		<i class="fas fa-check-circle"></i>
																	</div>
																	<div class="text-center">
																		<div class="duration-ico mb-2">
																			<i class="fas fa-clock"></i>
																		</div>
																		<h4 class="mb-4">Per Hour</h4>
																	</div>
																	<ul class="price-listing">
																		<li>Donec eu orci et diam vehicula ornare.</li>
																		<li>Ut posuere ipsum vel urna suscipit interdum.</li>
																		<li>Vestibulum eleifend magna at quam tempor congue.</li>
																		<li>Praesent a eros condimentum efficitur eu nec elit.</li>
																	</ul>
																	<div class="pric-tag">
																		₹200
																	</div>
																</label>
					                                        </div>
					                                    </div>
					                                    <div class="col-xl-4 col-md-6 mb-5">
					                                        <div class="boxed price-box">
					                                        	<input type="radio" id="price2" name="gpriceslab" value="300">
																<label for="price2">
																	<div class="tick">
																		<i class="fas fa-check-circle"></i>
																	</div>
																	<div class="text-center">
																		<div class="duration-ico mb-2">
																			<i class="fas fa-clock"></i>
																		</div>
																		<h4 class="mb-4">Per Hour</h4>
																	</div>
																	<ul class="price-listing">
																		<li>Donec eu orci et diam vehicula ornare.</li>
																		<li>Ut posuere ipsum vel urna suscipit interdum.</li>
																		<li>Vestibulum eleifend magna at quam tempor congue.</li>
																		<li>Praesent a eros condimentum efficitur eu nec elit.</li>
																	</ul>
																	<div class="pric-tag">
																		₹300
																	</div>
																</label>
					                                        </div>
					                                    </div>
					                                    <div class="col-xl-4 col-md-6 mb-5">
					                                        <div class="boxed price-box">
					                                        	<input type="radio" id="price3" name="gpriceslab" value="350">
																<label for="price3">
																	<div class="tick">
																		<i class="fas fa-check-circle"></i>
																	</div>
																	<div class="text-center">
																		<div class="duration-ico mb-2">
																			<i class="fas fa-clock"></i>
																		</div>
																		<h4 class="mb-4">Per Hour</h4>
																	</div>
																	<ul class="price-listing">
																		<li>Donec eu orci et diam vehicula ornare.</li>
																		<li>Ut posuere ipsum vel urna suscipit interdum.</li>
																		<li>Vestibulum eleifend magna at quam tempor congue.</li>
																		<li>Praesent a eros condimentum efficitur eu nec elit.</li>
																	</ul>
																	<div class="pric-tag">
																		₹350
																	</div>
																</label>
					                                        </div>
					                                    </div>
					                                </div>
					                                <div class="row align-items-center">
					                                	<div class="col-md-6 mb-2 mb-md-0">
					                                		<span>*Fee might vary depending on various factors</span>
					                                	</div>
					                                	<div class="col-md-6 text-right">
					                                		<button type="button" class="dark-outline next-step">Next</button>
					                                	</div>
					                            		</div>
				                            		</div>
				                            	</div>
			                            	</div>
			                            </div>
			                        </div>
			                        <div class="tab-pane" role="tabpanel" id="step3">
			                            <div class="row justify-content-end">
			                            	<img src="img/right-side.png" class="right-side">
			                            	<div class="col-xl-8 col-lg-8">
			                            		<div class="right-box p-3">
				                            		<div class="mb-4 mb-lg-2 text-center text-lg-right">
				                            			<img src="img/logo.png">
				                            		</div>
				                            		<div class="field-box bg-white">
				                            			<h4 class="sec-color mb-3">Preferences</h4>
					                                <div class="row mb-3">
					                                	<div class="col-md-6 mb-3">
					                                		<h6 class="font-weight-bold mb-0">Gender</h6>
					                                	</div>
					                                	<div class="col-md-6 text-md-right text-left mb-2">
					                                        <div class="theme-radio radio-inline">
														    	<input type="radio" id="man" value="1" name="gender" checked />
																<label for="man" class="text-uppercase">MAN</label>
														    </div>
														    <div class="theme-radio radio-inline ml-2">
														        <input type="radio" id="lady" value="2" name="gender" />
																<label for="lady" class="text-uppercase">LADY</label>
														    </div>
														    <div class="theme-radio radio-inline ml-2">
														      	<input type="radio" id="any" value="3" name="gender" />
																<label for="any" class="text-uppercase">ANY</label>
														    </div>
					                                    </div>
					                                    <div class="col-md-12">
					                                        <div class="form-group">
					                                        	<h6 class="font-weight-bold mb-3">Language Preference</h6>
					                                            <select class="form-control" name="selpreferencelanguage">
					                                            	<option value=""> Select Language </option>
					                                            	<option value="AF">Afrikaans</option>
																	<option value="SQ">Albanian</option>
																	<option value="AR">Arabic</option>
																	<option value="HY">Armenian</option>
																	<option value="EU">Basque</option>
																	<option value="BN">Bengali</option>
																	<option value="BG">Bulgarian</option>
																	<option value="CA">Catalan</option>
																	<option value="KM">Cambodian</option>
																	<option value="ZH">Chinese (Mandarin)</option>
																	<option value="HR">Croatian</option>
																	<option value="CS">Czech</option>
																	<option value="DA">Danish</option>
																	<option value="NL">Dutch</option>
																	<option value="EN">English</option>
																	<option value="ET">Estonian</option>
																	<option value="FJ">Fiji</option>
																	<option value="FI">Finnish</option>
																	<option value="FR">French</option>
																	<option value="KA">Georgian</option>
																	<option value="DE">German</option>
																	<option value="EL">Greek</option>
																	<option value="GU">Gujarati</option>
																	<option value="HE">Hebrew</option>
																	<option value="HI">Hindi</option>
																	<option value="HU">Hungarian</option>
																	<option value="IS">Icelandic</option>
																	<option value="ID">Indonesian</option>
																	<option value="GA">Irish</option>
																	<option value="IT">Italian</option>
																	<option value="JA">Japanese</option>
																	<option value="JW">Javanese</option>
																	<option value="KO">Korean</option>
																	<option value="LA">Latin</option>
																	<option value="LV">Latvian</option>
																	<option value="LT">Lithuanian</option>
																	<option value="MK">Macedonian</option>
																	<option value="MS">Malay</option>
																	<option value="ML">Malayalam</option>
																	<option value="MT">Maltese</option>
																	<option value="MI">Maori</option>
																	<option value="MR">Marathi</option>
																	<option value="MN">Mongolian</option>
																	<option value="NE">Nepali</option>
																	<option value="NO">Norwegian</option>
																	<option value="FA">Persian</option>
																	<option value="PL">Polish</option>
																	<option value="PT">Portuguese</option>
																	<option value="PA">Punjabi</option>
																	<option value="QU">Quechua</option>
																	<option value="RO">Romanian</option>
																	<option value="RU">Russian</option>
																	<option value="SM">Samoan</option>
																	<option value="SR">Serbian</option>
																	<option value="SK">Slovak</option>
																	<option value="SL">Slovenian</option>
																	<option value="ES">Spanish</option>
																	<option value="SW">Swahili</option>
																	<option value="SV">Swedish </option>
																	<option value="TA">Tamil</option>
																	<option value="TT">Tatar</option>
																	<option value="TE">Telugu</option>
																	<option value="TH">Thai</option>
																	<option value="BO">Tibetan</option>
																	<option value="TO">Tonga</option>
																	<option value="TR">Turkish</option>
																	<option value="UK">Ukrainian</option>
																	<option value="UR">Urdu</option>
																	<option value="UZ">Uzbek</option>
																	<option value="VI">Vietnamese</option>
																	<option value="CY">Welsh</option>
																	<option value="XH">Xhosa</option>
					                                            </select>
					                                        </div>
					                                    </div>
					                                    <div class="col-md-12">
					                                        <div class="form-group">
					                                        	<h6 class="font-weight-bold mb-3">What needs to be taken during the demo. Demo is for 20-30 minutes</h6>
					                                          	<textarea class="form-control" name="txttakendemominute" rows="2"></textarea>
					                                        </div>
					                                    </div> 
					                                    <div class="col-md-12">
					                                        <div class="form-group">
					                                        	<h6 class="font-weight-bold mb-3">Special Request or Additional Information</h6>
					                                          	<textarea class="form-control" name="txtadditionalinformation" rows="3"></textarea>
					                                        </div>
					                                    </div>
					                                    <div class="col-md-6 mb-3 mb-md-0">
					                                	  	<h6 class="font-weight-bold mb-0">Preferred Days</h6>
					                                	</div>
					                                	<div class="col-md-6 text-md-right text-left mb-2">
					                                        <div class="theme-radio radio-inline">
														      	<input type="radio" id="weekdays" value="1" name="gpreferredays" checked />
																<label for="weekdays" class="text-uppercase">weekdays</label>
														    </div>
														    <div class="theme-radio radio-inline ml-2">
														      	<input type="radio" id="weekends" value="2" name="gpreferredays" />
																<label for="weekends" class="text-uppercase">weekends</label>
														    </div>
														    <div class="theme-radio radio-inline ml-2">
														      	<input type="radio" id="tany" value="3" name="gpreferredays" />
																<label for="tany" class="text-uppercase">any</label>
														    </div>
					                                    </div>
					                                    <div class="col-md-12">
					                                    	<h6 class="font-weight-bold mb-3">Time and date for the demo.</h6>
					                                    </div>
					                                    <div class="col-md-6">
					                                    	<div class="form-group">
					                                    		<input type="time" name="txtdemotime" class="form-control position-relative" />
					                                    	</div>
					                                    </div>
					                                    <div class="col-md-6">
					                                    	<div class="form-group">
					                                    		<input type="date" name="txtdemodate" class="form-control position-relative" />
					                                    	</div>
					                                    </div>
					                                </div>
					                                
					                                	<div class="row align-items-center">
						                                	<div class="col-md-12 text-right">
						                                		<button type="submit" class="dark-outline"> Save </button>
						                                	</div>
					                            		</div>
				                            		</div>
				                            	</div>
			                            	</div>
			                            </div>
			                        </div>
			                        <div class="clearfix"></div>
			                    </div>
			                </form>
			            </div>
			        </div>
		    	</div>
			</div>
		</section>

		<script src="js/custom.js"></script>

	</body>
</html>