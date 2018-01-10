<?php
	// echo "From mail file";
	//location would be thankyou.php
	function redirect_to($location){
		if($location != NULL){
			header("Location: {$location}");
			exit;
		}
	}

	function submitMessage($direct, $name, $email, $message) {
		// echo "From SubmitMessage()";
		$to = "h_ostrander@outlook.com";
		$subject = "message from user from hosting";
		$extra = "Reply to: ".$email;
		$msg = "Name: ".$name. "/n/nEmail: ".$email."/n/nMessage: ".$message;
		mail($to, $subject, $msg, $extra);

		//the thank you message will display their name, "thank you "name" blah blah
		$direct = $direct."?name={$name}";
	}

?>