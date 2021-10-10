<?php session_start();
	include('include/config.inc.php');	
	if(array_key_exists('usrname',$_SESSION) && empty($_SESSION['usrname']) ) {
        header( 'location:'. $baseUrl );
    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Auriv Learning | Home </title>
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

	<body>

		<?php include('include/header.inc.php');?>

		<!-- banner -->
		<section class="banner p-lg-0 position-relative">
			<div class="container-fluid p-0">
				<div class="row align-items-center justify-content-lg-end justify-content-center">
					<div class="col-xl-5 col-lg-5 col-10">
						<h3 class="banner-title text-white mb-3">Join Live and Interactive <br>Online Classes with the best Tutors.</h3>
						<form class="book-form mb-3">
							<div class="field">
								<div class="input-group mb-3">
								    <div class="input-group-prepend">
								      <span class="input-group-text bg-transparent border-0"><i class="far fa-search"></i></span>
								    </div>
							    	<input type="text" class="form-control border-0" placeholder="WHAT DO YOU WANT TO LEARN?">
							    	<button type="submit" class="book-btn">Book a Demo Class<i class="far fa-angle-right ml-4" aria-hidden="true"></i></button>
							  	</div>
							</div>
						</form>
						<ul class="tags d-flex text-white">
							<li>7.5 Lakh+ Verified Tutors</li>
							<li>55 Lakh+ Students</li>
							<li>55 Lakh+ Students</li>
						</ul>
					</div>
					<div class="col-xl-5 col-lg-6 d-none d-lg-block">
						<img src="img/banner-img.png" class="banner-img">
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-xl-12 text-center mb-5">
						<h2 class="text-uppercase">Experience <span class="font-weight-normal">Auriv Live Classes</span></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-md-4 mb-3 mb-md-0">
						<a href="#" class="live-box">
							<div class="live-img blue-bg">
								<img src="img/live1.png">
							</div>
							<div class="live-title">
								<i class="fas fa-caret-circle-right mb-2"></i>
								<h6 class="text-white m-0">Spoken English</h6>
							</div>
						</a>
					</div>
					<div class="col-xl-4 col-md-4 mb-3 mb-md-0">
						<a href="#" class="live-box">
							<div class="live-img purple-bg">
								<img src="img/live1.png">
							</div>
							<div class="live-title">
								<i class="fas fa-caret-circle-right mb-2"></i>
								<h6 class="text-white m-0">IELTS Coaching</h6>
							</div>
						</a>
					</div>
					<div class="col-xl-4 col-md-4 mb-3 mb-md-0">
						<a href="#" class="live-box">
							<div class="live-img orange-bg">
								<img src="img/live1.png">
							</div>
							<div class="live-title">
								<i class="fas fa-caret-circle-right mb-2"></i>
								<h6 class="text-white m-0">German Language</h6>
							</div>
						</a>
					</div>
		  		</div>
			</div>
		</section>

		<section class="theme-bg pb-0">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-12 mb-5 text-center">
						<h2 class="mb-0">Explore Catagories</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 mb-2">
						<h4 class="text-uppercase">Tuition</h4>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<a href="#">
						<div class="tution-box">
							<div class="tution-img">
								<img src="img/tution/t1.png">
							</div>
							<div class="tution-title">
								<h6 class="text-white m-0">Class 9 Tuition</h6>
							</div>
						</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<a href="#" class="d-flex">
						<div class="tution-box">
							<div class="tution-img">
								<img src="img/tution/t2.png">
							</div>
							<div class="tution-title">
								<h6 class="text-white m-0">Class 10 Tuition</h6>
							</div>
						</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<a href="#" class="d-flex">
						<div class="tution-box">
							<div class="tution-img">
								<img src="img/tution/t3.png">
							</div>
							<div class="tution-title">
								<h6 class="text-white m-0">Class 11 Tuition</h6>
							</div>
						</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<a href="#" class="d-flex">
						<div class="tution-box">
							<div class="tution-img">
								<img src="img/tution/t4.png">
							</div>
							<div class="tution-title">
								<h6 class="text-white m-0">Class 12 Tuition</h6>
							</div>
						</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<a href="#" class="d-flex">
						<div class="tution-box">
							<div class="tution-img">
								<img src="img/tution/t1.png">
							</div>
							<div class="tution-title">
								<h6 class="text-white">BTech Tuition</h6>
							</div>
						</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<a href="#" class="d-flex">
						<div class="tution-box">
							<div class="tution-img">
								<img src="img/tution/t5.png">
							</div>
							<div class="tution-title">
								<h6 class="text-white">Nursery-KG Tuition</h6>
							</div>
						</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<a href="#" class="d-flex">
						<div class="tution-box">
							<div class="tution-img">
								<img src="img/tution/t6.png">
							</div>
							<div class="tution-title">
								<h6 class="text-white m-0">Class I-V Tuition</h6>
							</div>
						</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<a href="#" class="d-flex">
						<div class="tution-box">
							<div class="tution-img">
								<img src="img/tution/t7.png">
							</div>
							<div class="tution-title">
								<h6 class="text-white m-0">Class 6 Tuition</h6>
							</div>
						</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<a href="#" class="d-flex">
						<div class="tution-box">
							<div class="tution-img">
								<img src="img/tution/t8.png">
							</div>
							<div class="tution-title">
								<h6 class="text-white m-0">Class 7 Tuition</h6>
							</div>
						</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<a href="#" class="d-flex">
						<div class="tution-box">
							<div class="tution-img">
								<img src="img/tution/t5.png">
							</div>
							<div class="tution-title">
								<h6 class="text-white m-0">Class 8 Tuition</h6>
							</div>
						</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<a href="#" class="d-flex">
						<div class="tution-box">
							<div class="tution-img">
								<img src="img/tution/t2.png">
							</div>
							<div class="tution-title">
								<h6 class="text-white m-0">Bcom Tuition</h6>
							</div>
						</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<a href="#" class="d-flex">
						<div class="tution-box">
							<div class="tution-img">
								<img src="img/tution/t3.png">
							</div>
							<div class="tution-title">
								<h6 class="text-white m-0">Bsc Tuition</h6>
							</div>
						</div>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class="theme-bg language-sec p-0">
			<img src="img/language-bg.png" class="language-img w-100" />
			<div class="container">
				<div class="row margin-up">
					<div class="col-xl-12 mb-4">
						<h4 class="text-uppercase">Languages</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/ielts.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">IELTS Coaching</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/spoken-english.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">Spoken English</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/german-language.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">German Language</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/french-language.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">French Language</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/hindi-language.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">Hindi Language</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/french-language.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">French Language</h6>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="theme-bg pb-0">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 mb-2">
						<h4 class="text-uppercase">Hobbies</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/category/yoga.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">Yoga</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/category/guitar.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">Guitar</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/category/dance.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">Dance</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/category/vocal-music.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">Vocal Music</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/category/personality.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">Personality Development Training</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/category/photography.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">Photography</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/category/drawing.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">Drawing</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/category/trainer.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">Personal Trainer</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/category/cooking.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">Cooking</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/category/keyboard.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">Keyboard</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/category/yoga.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">Yoga</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3 mb-lg-5">
						<div class="cat-box">
							<a href="#">
								<div class="cat-img">
									<img src="img/category/guitar.png" class="w-100">
								</div>
								<div class="cat-title ">
									<h6 class="mb-0">Guitar</h6>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="how-works">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 text-center mb-5">
						<h2 class="text-uppercase">How it <span class="font-weight-normal">works</span></h2>
					</div>
				</div>
				<div class="stepper row">
					<div class="step-item col-xl-3 col-md-3 mb-3 mb-lg-0">
						<div class="step-box">
							<div class="step-no text-md-center mb-0 mb-md-5">
								<span class="mr-auto mx-md-auto">1</span>
							</div>
							<div class="step-content pl-5 pl-md-0 pb-4 pb-md-0 text-md-center">
								<div class="step-icon mx-md-auto mr-auto mb-3">
									<i class="fas fa-child"></i>
								</div>
								<h5 class="text-uppercase sec-color">Step 1</h5>
								<span>Identifying the child’s tutoring needs </span>
							</div>
						</div>
					</div>
					<div class="step-item col-xl-3 col-md-3 mb-3 mb-lg-0">
						<div class="step-box">
							<div class="step-no text-md-center mb-0 mb-md-5">
								<span class="mr-auto mx-md-auto">2</span>
							</div>
							<div class="step-content pl-5 pl-md-0 pb-4 pb-md-0 text-md-center">
								<div class="step-icon mx-md-auto mr-auto mb-3">
									<i class="fas fa-bookmark"></i>
								</div>
								<h5 class="text-uppercase sec-color">Step 2</h5>
								<span>Demo class with a matching tutor </span>
							</div>
						</div>
					</div>
					<div class="step-item col-xl-3 col-md-3 mb-3 mb-lg-0">
						<div class="step-box">
							<div class="step-no text-md-center mb-0 mb-md-5">
								<span class="mr-auto mx-md-auto">3</span>
							</div>
							<div class="step-content pl-5 pl-md-0 pb-4 pb-md-0 text-md-center">
								<div class="step-icon mx-md-auto mr-auto mb-3">
									<i class="fas fa-calendar-alt"></i>
								</div>
								<h5 class="text-uppercase sec-color">Step 3</h5>
								<span>Schedule the tutoring sessions</span>
							</div>
						</div>
					</div>
					<div class="step-item col-xl-3 col-md-3 mb-3 mb-lg-0">
						<div class="step-box">
							<div class="step-no text-md-center mb-0 mb-md-5">
								<span class="mr-auto mx-md-auto">4</span>
							</div>
							<div class="step-content pl-5 pl-md-0 pb-4 pb-md-0 text-md-center">
								<div class="step-icon mx-md-auto mr-auto mb-3">
									<i class="fas fa-money-bill-alt"></i>
								</div>
								<h5 class="text-uppercase sec-color">Step 4</h5>
								<span>Schedule the tutoring sessions</span>
							</div>
						</div>
					</div>
		  		</div>
			</div>
		</section>

		<section class="theme-bg">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 text-center mb-5">
						<h2 class="text-uppercase">OUR TESTIMONIALS</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 mb-3">
						<div class="story-box">
							<div class="d-flex align-items-center mb-4">
								<img src="img/c1.png" class="client-img mr-4">
								<div class="">
									<h5>Renu, Student</h5>
									<div class="rating">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</div>
								</div>
							</div>
							<div class="story-content text-center">
								<img src="img/light-quote.png" class="quote-ico">
								<span>"Was always shy to do physical workout in public, Auriv helped me connect with a Zumba instructor, helping me to workout at my convenience"</span>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 mb-3">
						<div class="story-box">
							<div class="d-flex align-items-center mb-4">
								<img src="img/c1.png" class="client-img mr-4">
								<div class="">
									<h5>Renu, Student</h5>
									<div class="rating">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</div>
								</div>
							</div>
							<div class="story-content text-center">
								<img src="img/light-quote.png" class="quote-ico">
								<span>"Was always shy to do physical workout in public, Auriv helped me connect with a Zumba instructor, helping me to workout at my convenience"</span>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 mb-3">
						<div class="story-box">
							<div class="d-flex align-items-center mb-4">
								<img src="img/c1.png" class="client-img mr-4">
								<div class="">
									<h5>Renu, Student</h5>
									<div class="rating">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</div>
								</div>
							</div>
							<div class="story-content text-center">
								<img src="img/light-quote.png" class="quote-ico">
								<span>"Was always shy to do physical workout in public, Auriv helped me connect with a Zumba instructor, helping me to workout at my convenience"</span>
							</div>
						</div>
					</div>
		  		</div>
			</div>
		</section>

		<section class="bg-light pt-2">
			<div class="container">
				<div class="row align-items-center flex-column-reverse flex-md-row">
					<div class="col-md-8 text-center text-md-left">
						<h2 class="mb-4">Request A Free Demo</h2>
						<div class="d-flex justify-content-center justify-content-md-start">
							<a href="#" class="theme-btn text-uppercase">try demo<i class="far fa-angle-right ml-4"></i></a>
						</div>
					</div>
					<div class="col-md-4 mt-4 mb-5 mb-md-0">
						<img src="img/cta-img.png">
					</div>
				</div>
			</div>
		</section>

		<?php include('include/footer.inc.php');?>

		<script src="js/custom.js"></script>
	</body>
</html>