<?php

include('Mail.php');

$mail = Mail::factory("mail");
 
$headers = array("From"=>"noreply@domain.tld", "Subject"=>"Test Mail");
$body = "Email Message";
$mail->send("christer.edwards@gmail.com", $headers, $body);

?>
