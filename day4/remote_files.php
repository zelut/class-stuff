<?php

  $slash = fopen("http://www.slashdot.org", "r");
  $site = fread($slash, 20000);
  fclose($slash);
  print $site;

?>
