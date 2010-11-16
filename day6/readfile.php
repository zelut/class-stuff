<?php
$testfile = @readfile('tst.txt');
 
if (!$testfile) {                 
    print "Could not open file\n";  
}
?>
