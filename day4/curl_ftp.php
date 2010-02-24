<?php

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, "ftp://ftp.gnu.org");
  curl_setopt($curl, CURLOPT_FTPLISTONLY, 1);
  curl_setopt($curl, CURLOPT_USERPWD, "anonymous:your@email.com");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   
  $result = curl_exec($curl);
  curl_close($curl);
  print $result;

?>
