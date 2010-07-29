<?php

include('Mail.php');
include('Mail/mime.php');
 
$message = new Mail_mime();
$text = file_get_contents("mail_text.txt");
$html = file_get_contents("mail_html.html");
 
$message->setTXTBody($text);
$message->setHTMLBody($html);
$message->addAttachment("git-cheat-sheet.pdf");
$body = $message->get();
$extraheaders = array("From"=>"noreply@zelut.org", "Subject"=>"Test Email");
$headers = $message->headers($extraheaders);
 
$mail = Mail::factory("mail");
$mail->send("christer.edwards@gmail.com", $headers, $body);

?>
