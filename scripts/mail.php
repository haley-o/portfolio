<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = 'Mail from haleyostrander.com';
    $message = $_POST['message'];
    
    $to = "h_ostrander@outlook.com";
    $content = "You got an email from " . $name . "," . $email . "." . $name . " says " . $message . ".";
    mail($to, $subject, $content);
    print "Hi " . $name . ", Thank you for sending me a message. I'll get back to you as soon as I can. ";
}

?>