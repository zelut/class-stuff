<?php
$testfile = @readfile("test.txt");
 
if (!$testfile) {                 
    print "Could not open file\n";  
}
?>
