<?php

$filename = "test.txt";
 
  $filearray = file($filename);
 
  if ($filearray) {
     while (list($var, $val) = each($filearray)) {
         ++$var;
         $val = trim($val);
         print "Line $var: $val\n";
     }
  } else {
     print "Could not open $filename.\n";
  }
?>
