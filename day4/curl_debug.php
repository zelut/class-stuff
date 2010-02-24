<?php

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, "http://www.php.net");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_VERBOSE, 1);
   
  curl_exec($curl);
  curl_close($curl);

?>
