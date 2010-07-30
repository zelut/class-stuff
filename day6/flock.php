<?php

$handle = fopen( $filename, "w");
// open it for WRITING ("w")     
 
if (flock($handle, LOCK_EX)) {
    // do your file writes here
    flock($handle, LOCK_UN);   
    // unlock the file         
} else {                       
    // flock() returned false, no lock obtained
    print "Could not lock $filename!\n";       

?>
