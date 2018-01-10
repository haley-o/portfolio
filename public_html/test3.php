<?php

$user = "haley059_haley-o";
$pass = "Boston123!";
$host = "localhost";
$db = "haley059_haley_portfolio";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
echo "error";
}
else{
echo "conn";

require_once "Mail.php";

$from = "Sandra Sender <sender@example.com>";
$to = "h_ostrander@outlook.com";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";

$host = "haleyostrander.com";
$username = "haleyo@haleyostrander.com";
$password = "Boston123!";

$headers = array ('From' => $from,
 'To' => $to,
 'Subject' => $subject);
$smtp = Mail::factory('smtp',
 array ('host' => $host,
   'auth' => true,
   'username' => $username,
   'password' => $password));



$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
 echo("<p>" . $mail->getMessage() . "</p>");
} else {
 echo("<p>Message successfully sent!</p>");
}
}

?>