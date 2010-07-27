<?php

include('Mail.php');

$mail = Mail::factory("mail");
 
$headers = array("From"=>"from@domain.tld", "Subject"=>"Test Mail");
$body = "Email Message";
$mail->send("recipient@domain.tld", $headers, $body);

?>
