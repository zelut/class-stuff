<?php

include('Mail.php');
include('Mail/mime.php');
 
$message = new Mail_mime();
$text = file_get_contents("pro-git.txt");
$html = file_get_contents("pro-git.html");
 
$message->setTXTBody($text);
$message->setHTMLBody($html);
$message->addAttachment("git-cheat-sheet.php");
$body = $message->get();
$extraheaders = array("From"=>"christer.edwards@gmail.com", "Subject"=>"Git Cheat Sheet");
$headers = $message->headers($extraheaders);
 
$mail = Mail::factory("mail");
$mail->send("christer.edwards@ubuntu.com", $headers, $body);

?>
