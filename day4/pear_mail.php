<?php
  include('Mail.php');
  $mail = Mail::factory("mail");
   
  $headers = array("From"=>"christer.edwards@gmail.com", "Subject"=>"Test Mail");
  $body = "This is a test!";
  $mail->send("christer.edwards@ubuntu.com", $headers, $body);
?>
