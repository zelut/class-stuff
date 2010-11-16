<?php

$filename = 'test.txt';

// open it for WRITING ("w")
$handle = fopen( $filename, "w");
 
if (flock($handle, LOCK_EX)) {
    print "Exclusive Lock (LOCK_EX) successful!\n";
    print "...\n";
    flock($handle, LOCK_UN);
    print "Lock Release (LOCK_UN) successful!\n";
} else {
    print "Could not lock $filename!\n";
}

?>
