<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Haley Ostrander</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</head>

<body>

	<!-- <div class="container"> -->
		<header id="navigation" class="navbar navbar-inverse navbar-fixed-top">
			<div class="nav-con container-fluid">
				<img id="logo" src="assets/portfolio_logo.svg">
					
					<div id="main-nav">
						<nav class="nav navbar-nav">
							<label id="menuToggle">
								<span class="hamb"></span>
								<span class="hamb"></span>
								<span class="hamb"></span>
							</label>
						</nav>
					</div>

			</div>
		</header>

			<div class="navigation-menu">
				<ul class="nav-text-con">
					<li><a class="navText" href="#homeCon">Home</a></li>
					<li><a class="navText" href="#workCon">Work</a></li>
					<li><a class="navText" href="#aboutCon">About</a></li>
					<li><a class="navText" href="#contactCon">Contact</a></li>
				</ul>
			</div>
	<!-- </div> -->

<div id="homeCon">
	<!-- <div class="container"> -->
			<div id="img-title-con">
				<img class="img-title animated fadeInLeft" src="images/plant.png">
			</div>
			<div id="home-text-con">
				<div class="animated fadeInUp" id="home-text-content">
					<h1 id="home-title">My name is <span>Haley Ostrander</span></h1>
					<p id="home-desc">Rapidiously implement cross-platform systems before impactful leadership. Conveniently aggregate long-term high-impact internal</p>
				</div>
			</div>
	<!-- </div> -->
</div>

<div id="workCon">
	<!-- <div class="container"> -->
		<!-- <div id="work-wrapper"> -->

			<!-- <div class="overlay" id="reactr-overlay"> -->
				<div class="work-con" id="reactrWork">
					<img class="work-mock" src="images/reactr_students.png">
					<!-- <div id="reactr-overlay"> -->
						<a class="work-page" href="reactr-work.html" target="_blank">
							<h1 class="work-title">Reactr Student Section</h1>
						</a>
					<!-- </div> -->
				</div>
			<!-- </div> -->

			<!-- <div class="overlay" id="lotr-overlay"> -->
				<div class="work-con" id="lotrWork">
					<img class="work-mock" src="images/lotr_home.png" target="_blank">
					<a class="work-page" href="lotr-work.html">
						<h1 class="work-title">The Lord of the Rings</h1>
					</a>
				</div>
			<!-- </div> -->

			<!-- <div class="overlay" id="sleep-overlay"> -->
				<div class="work-con" id="sleepWork">
					<img class="work-mock" src="images/midterm_home.png" target="_blank">
					<a class="work-page" href="sleep-work.html">
						<h1 class="work-title">Sleep Stats</h1>
					</a>	
				</div>
			<!-- </div> -->

			<!-- <div class="overlay" id="agency-overlay"> -->
				<div class="work-con" id="agencyWork">
					<img class="work-mock" src="images/agency_home.png" target="_blank">
					<a class="work-page" href="agency-work.html">
						<h1 class="work-title">Infinito Web Agency</h1>
					</a>		
				</div>
			<!-- </div> -->

		<!-- </div> -->
	<!-- </div> -->
</div>

<div id="aboutCon">
		<div id="about-content-con">
			<img id="mobile-about-img" src="images/mobile_about.png" alt="about-image">
			<img id="desktop-about-img" class="animated fadeInUp" src="images/desktop_about.png" alt="about-image">

			<!-- <div class="container"> -->
				<div id="about-text-wrapper">
					<h1 id="about-title">About Me</h1>
					<p id="about-desc">Dynamically scale performance based web-readiness with fully researched "outside the box" thinking. Progressively communicate user friendly networks with out-of-the-box total linkage. Interactively seize team building.</p>
					<div id="videoToggleCon">
						<button id="resume-button">Resume</button>
					</div>
				</div>
		</div>
			<!-- </div> -->
</div>

<div id="contactCon">
	<?php

	require_once('scripts/config.php');
	if(isset($_POST['name'])){
		echo 	"yup";
		//thnak you page that loads after someone submits their info on the form
		$direct = "thankyou.php";

		$name = $_POST['form_name'];
		$email = $_POST['form_email'];
		$street = $_POST['street'];
		$message = $_POST['form_message'];
		// echo $name;

		if($street === ""){
			// echo "send mail";
			$sendMail = submitMessage($direct, $name, $email, $message);
		}else{
			// echo "F off bot!";
		}
	}

?>
	<!-- <div id="contact-side-img-con"> -->
		<img id="contact-side-img" src="images/contact_image.png" alt="stock leaf image">
	<!-- </div> -->
	<!-- <div class="container"> -->
		<div id="contact-text-con">
			<h1 id="contact-title">Contact Me</h1>
			<p id="contact-desc">Dynamically scale performance based web-readiness with fully researched "outside the box" thinking.</p>
			<div id="social-media">
				<a href="https://www.linkedin.com/in/haley-ostrander-96a124127/" target="_blank"><img class="sm-icons" src="images/linkedin.svg" alt="linkedin logo"></a>
				<a href="https://www.instagram.com/h.ostrander/" target="_blank"><img class="sm-icons" src="images/instagram.svg" alt="Instagram logo"></a>
				<a href="https://twitter.com/haley_ostrander" target="_blank"><img class="sm-icons" src="images/twitter.svg" alt="Twitter logo"></a>
			</div>
		</div>
		
		<div id="formCon">
			<label>Name</label>
			<input type="input" name="form_name">

			<label>E-mail</label>
			<input type="input" name="form_email">

			<label>Message</label>
			<!-- <textarea> type="input" name="message"> -->
			<textarea name="form_message"></textarea>

			<button id="submit-button" value="SEND">Submit</button>
		</div>

	<!-- </div> -->
</div>

<div id="footer">
	<p>Copyright2017</p>
</div>



</body>

<script src="js/main.js"></script>
</body>
</html>
