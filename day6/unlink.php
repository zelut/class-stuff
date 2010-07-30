<?php

$filename = "some-file.txt";

if (unlink($filename)) {
    print "Deleted $filename!\n";
} else {                         
    print "Delete of $filename failed!\n";
}

?>
