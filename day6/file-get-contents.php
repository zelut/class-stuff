<?php

$filename = "test.txt";

$filestring = file_get_contents($filename);

if ($filestring) {
        print $filestring;
    } else {
        print "Could not open $filename.\n";
}
?>
