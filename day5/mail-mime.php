<?php

include('Mail.php');
include('Mail/mime.php');
 
$message = new Mail_mime();
$text = file_get_contents("mail_text.txt");
$html = file_get_contents("mail_html.html");
 
$message->setTXTBody($text);
$message->setHTMLBody($html);
$body = $message->get();
$extraheaders = array("From"=>"sender@domain.tld", "Subject"=>"My Subject");
$headers = $message->headers($extraheaders);
 
$mail = Mail::factory("mail");
$mail->send("recipient@domain.tld", $headers, $body);

?>
