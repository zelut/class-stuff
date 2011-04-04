<?php

$fh_flowers = fopen("kinds_of_flowers.txt", "r")
    or die("Can't open flowers file!\n");     
 
$fh_logfile = fopen("application.log", "w")    
    or die("Log file not writeable!\n");

?>
