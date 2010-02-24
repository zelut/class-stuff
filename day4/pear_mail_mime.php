<?php
  include('Mail.php');
  include('Mail/mime.php');
   
  $message = new Mail_mime();
  $text = file_get_contents("mail_text.txt");
  $html = file_get_contents("mail_html.html");
  
  $message->setTXTBody($text);
  $message->setHTMLBody($html);
  $body = $message->get();
  echo $body;
  $extraheaders = array("From"=>"christer.edwards@gmail.com", "Subject"=>"My Subject 7");
  $headers = $message->headers($extraheaders);
  
  $mail = Mail::factory("mail");
  $mail->send("christer.edwards@ubuntu.com", $headers, $body);
?>
