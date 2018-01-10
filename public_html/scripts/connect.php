<?php 

// Set up connection creds
// $ is basically a variable
// on a mac the passwords automatically set to root

$user = "root";
$pass = "";
// $pass = "root"; FOR MAC ONLY
$url = "localhost";
$db = "db_ostrander_portfolio"; //name of database

//store all of the information into a link, it passes off our credentials
//looking for what it is connecting to, and then the username, password and database
//FOR MAC may require a portal host (number at the end), to find out this number when you type localhost into the web the number will appear in the url
//creates us access token to ourvdata, a package of our information
$link = mysqli_connect($url, $user, $pass, $db);
echo 'Connected Successfully!!';
//check connection with error message
//gives you an error alert and then display message in the log
//errno is not a typo
if(mysqli_connect_errno()){
	printf("connection failed: %s\n", mysqli_connect_error());
	exit();
	echo 'Failed to connect to database: '.mysqli_connect_error();
}



?>