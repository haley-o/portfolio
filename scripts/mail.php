<?php

function redirect_to($location){
 if($location != NULL){
   header("Location: {$location}");
   exit;
 }
}
// soumyav-com.mail.protection.outlook.com
 // echo "From mail file";
 function submitMessage($direct, $name, $email, $subject, $message){
   // Will work only when live
   //echo "from submitMessage";
   $to = "haley-o@haleyostrander.com"; //Who this is going to? Me!
   $subject = "Message from website soumyav.com";
   $extra = "Reply-To: ".$email;
   $msg = "Name: ".$name."\n\nEmail: ".$email."\n\nMessage: ".$message; //\n works in html web and application based files. just another <br> tag
   mail($to,$subject,$msg,$extra); //expects things in a particular order - Where is it going to, the subject, the message and extra isn't a requirement
   $direct = $direct."?name={$name}";
   redirect_to($direct);
 }

?>