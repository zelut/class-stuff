<?php

// This example will create an array with three entries.
// It will then implode() the array, creating a single string
// separated by \n characters.

// Optionally use the additional parameter FILE_APPEND to append to
// $filename, otherwise existing $filename will be clobbered.

$filename = "put_test.txt";

$myarray[] = "This is line one";
$myarray[] = "This is line two";
$myarray[] = "This is line three";
$mystring = implode("\n", $myarray);
$numbytes = file_put_contents($filename, $mystring, FILE_APPEND);
print "$numbytes bytes written\n";

?>
