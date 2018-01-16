<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Infinito</title>
<link rel="shortcut icon" href="assets/portfolio_logo.svg">
<link href="css/reset.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</head>

<body>

<?php 

$user = "haley059";
    $pass = "Boston123!"; // FOR PC ONLY
    $url = "haleyostrander.com";
    $db = "haley059_haley_portfolio";

    // Creates an access package to our database
    $link = mysqli_connect($url, $user, $pass, $db); // "8888" needed on MAC

    // Check Connection w/ error message
    if(mysqli_connect_errno()) {
        printf("Connection FAILED: %s\n", mysqli_connect_error());
        exit(); // forces an exit just incase things get caught in a loop
    }else{
    	// echo "connected";
    }

?> 

	<div class="container">
		<header id="navigation" class="navbar navbar-inverse navbar-fixed-top">
			<div class="nav-con container-fluid">
				<img id="logo" src="assets/portfolio_logo.svg">
			</div>
		</header>
	</div>

	<div class="work-wrapper">

		<div id="title-con">
			<h1>Infinito Designs</h1>
			<h2>Designer and Developer</h2>
		</div>

		<div id="content-con">

			<img class="mockup-image" src="images/agency_home.png" alt="agency mockup">

			<h1 class="title">The Process</h1>
			<p class="desc">
				<?php
					$bio = "SELECT works_page_first_paragraph FROM `tbl_works_page` WHERE works_page_id = '4'";
					$works_page_first_paragraph = mysqli_query($link, $bio);
					while ($row = $works_page_first_paragraph->fetch_assoc()) {
					echo $row['works_page_first_paragraph'];
					}
				?>
			</p>

			<img class="mockup-image" src="images/agency_about.png" alt="agency mockup">

			<h1 class="title"> The Result</h1>
			<p class="desc">
				<?php
					$bio = "SELECT works_page_second_paragraph FROM `tbl_works_page` WHERE works_page_id = '4'";
					$works_page_second_paragraph = mysqli_query($link, $bio);
					while ($row = $works_page_second_paragraph->fetch_assoc()) {
					echo $row['works_page_second_paragraph'];
					}
				?>
			</p>

			<img class="mockup-image" src="images/agency_team.png" alt="agency mockup">

		</div>

	</div>

</body>

<script src="js/main.js"></script>
</body>
</html>
