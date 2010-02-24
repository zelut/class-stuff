<?php

// this script opens two files: kinds_of_flowers.txt
// and service-log.log. The first in read mode and the
// second in write mode.

// Try removing the @ sign before fopen() and see the output
// difference.

// These files are meant to be missing.

$fh_flowers = @fopen("kinds_of_flowers.txt", "r")
    or die("Can't open flowers file!\n");
 
$fh_logfile = @fopen("service-log.log", "w")
    or die("Log file not writeable!\n");

?>
