<?php

// Try removing the @ sign before readfile() and see the output
// difference if/when the file doesn't exist.

$testfile = @readfile("test.txt");

if (!$testfile) {
    print "Could not open file\n";
}

?>
